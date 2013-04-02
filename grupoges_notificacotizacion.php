<?php
  	session_start();

  	include("funciones.php");
	
	if( getsessionvar("firmado") == 'NO') 
	{
		/* No es un usuario firmado como autorizado del sitio */
		header('302 Moved');
		header( "Location:grupoges_usuarios.php" );
		exit;
	}
   
    if( !isset($HTTP_GET_VARS["id_cotizacion"]) )
	{
	   header('302 Moved');
	   header( "Location:grupoges_usuarios.php" );
	   exit;
	}
    else 
       $id_cotizacion = $HTTP_GET_VARS["id_cotizacion"];
	
	$link = mysql_pconnect( $db_host, $db_user, $db_pass) or mysql_error();
	mysql_select_db( $db_name, $link );

	$query = "SELECT a.*, b.NOMBRE_USUARIO, b.EMAIL_USUARIO, b.CARGO_EMPRESA FROM ges_cotizaciones a " .
			 " LEFT JOIN ges_usuariosexternos b ON (b.USUARIO=a.USUARIO) WHERE a.ID_COTIZACION=$id_cotizacion";

	$qrycotiza = mysql_query( $query );

	if( $row = @mysql_fetch_assoc( $qrycotiza ) )
	{
		$empresa   	= $row["EMPRESA"];
		$dirigidoa 	= $row["DIRIGIDOA"];
		$cargo		= $row["CARGO"];
		$contacto	= $row["CONTACTO"];
		$email		= $row["EMAIL"];
		$ciudad		= $row["CIUDAD"];
		$estado		= $row["ESTADO"];
		$pais		= $row["PAIS"];
		$fecha		= $row["FECHA"];
		
		$fecha		= get_str_date( $fecha );
		
		if( $pais <> "Mexico" ) $estado = "OUTME";
	
		$fecha_tmp  = $row["FECHA"];	
		$moneda		= $row["MONEDA"];
		
		$usuario		 = $row["USUARIO"];
		$nombre_usuario	 = $row["NOMBRE_USUARIO"];
		$cargo_usuario	 = $row["CARGO_EMPRESA"];
		$email_usuario	 = $row["EMAIL_USUARIO"];
		
		$passwrd		 = $row["PASSWRD"];
		
		$passwrd 		 = Decrypt( $passwrd, $allcolors );
		
		$tipocambio = 0;
		
		$denom_moneda = "pesos";
		
		if( $moneda <> "P" )
		{
			$denom_moneda = "dolares";
			// saber tipo de cambio según fecha de cotizacion
			$query = "SELECT PESOS FROM ges_tipocambio " .
					 "WHERE MONEDA='$moneda' and ('$fecha_tmp'>=FECHA_INICIAL and '$fecha_tmp'<=FECHA_FINAL)";

			$qrycotiza_tipocambio = mysql_query( $query );

			if( $row_tipocambio = @mysql_fetch_assoc( $qrycotiza_tipocambio ) )
				$tipocambio = $row_tipocambio["PESOS"];

			@mysql_free_result( $qrycotiza_tipocambio );
			
			if( $tipocambio == 0 ) $denom_moneda = "pesos";
		}	
		
	}
	
	@mysql_free_result( $qrycotiza );	
		
?>

<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>

<head>
	<title>Cotizacion</title> 
    <LINK HREF=ges.css REL=STYLESHEET>	
</head>

<body>
<br>

<table width="780" BORDER=0 bordercolor=black align="center" CELLPADDING=0 CELLSPACING=0 background="images/logoFondoGES.jpg" 
   style="border-width:0;background: url(images/logoFondoGES.jpg) no-repeat right top;">
  <TR> 
    <TD class=columnNormalPrinterFriendly><div align="left"><strong>
        Número de Cotización: <?php echo $id_cotizacion;?> <br><br>
        Fecha: <?php echo $fecha; ?> <br></strong>
        <br>
      </div></TD>
  </TR>
  <TR> 
    <TD colspan=2 class=columnNormalPrinterFriendly align=left><strong><?php echo $dirigidoa; ?></strong></TD>
  </TR>
  <TR> 
    <TD colspan=2 class=columnNormalPrinterFriendly align=left><strong><?php echo $cargo; ?></strong></TD>
  </TR>
  <TR> 
    <TD colspan=2 class=columnNormalPrinterFriendly align=left><strong><?php echo $empresa; ?></strong></TD>
  </TR>
  <TR> 
    <TD colspan=2 class=columnNormalPrinterFriendly align=left><strong><br>Cotizaci&oacute;n 
      de los siguientes productos:</strong><br> <br></TD>
  </TR>
  <!-- datos de la cotizacion !-->
  <TR> 
    <TD colspan=2 class=FTITLE> 
      <?php

		// Consultar productos ya asignados
		$query_detail = "SELECT a.*, b.DESCRIPCION, b.TIPO_PRODUCTO, b.DETALLES_IMPORTANTES FROM ges_cotizaciones_det a " . 
						" LEFT JOIN ges_productos b ON (b.ID_PRODUCTO=a.ID_PRODUCTO) " . 
						"WHERE a.ID_COTIZACION=$id_cotizacion " .
						"ORDER BY b.TIPO_PRODUCTO, b.ORDENAR_POR";
	
		$result_detail = mysql_query( $query_detail ) or die("No se pudo obtener la cotización");
	
		echo "<table class=F border=0 bordercolor=gray width=100% cellpadding=0 cellspacing=0>";
		echo "<tr><td width=30 class=columnNormalPrinterFriendly><img src='images/pxl.gif'></td><td width=500 class=columnNormalPrinterFriendly valign=top ><u><strong>Producto</u></strong></td>";
		echo "    <td class=columnNormalPrinterFriendly valign=top align=right width=150><strong><u>Precio</u></strong><br><br></td></tr>";
	
		$num_det = 0;
	
		$total     = 0;
		$descuento = 0;
		
		$clast_tipo = "";
		
		$productos_de_software = 0;
		
		while( $registro_det = @mysql_fetch_assoc($result_detail) ) 
		{		
			$num_det++;
			
			$id_producto = $registro_det["ID_PRODUCTO"];
			
			if( $clast_tipo <> $registro_det["TIPO_PRODUCTO"] ) 
			{
				$clast_tipo = $registro_det["TIPO_PRODUCTO"];
				
				if( $registro_det["TIPO_PRODUCTO"] == "O" )
				{
					echo "<tr><td></td><td colspan=2 bgcolor=gray><img src=images/pxl.gif height=1 width=750></td></tr>";
					echo "<tr><td></td><td colspan=2><img src=images/pxl.gif height=3 width=750></td></tr>";
					echo "<tr><td></td><td colspan=2 bgcolor=gray><img src=images/pxl.gif height=1 width=750></td></tr>";
					
					echo "<tr><td colspan=3 class=columnNormalPrinterFriendly align=right>";
					
						echo "<table width=250 border=0 class=columnNormalPrinterFriendly>";
						if( $descuento > 0 ) echo "<tr><td align=right><strong>SubTotal</strong></td><td>&nbsp;=&nbsp;</td><td align=right>" . currency($total) . "</td></tr>";
						if( $descuento > 0 ) echo "<tr><td align=right><strong>Descuento</strong></td><td>&nbsp;-&nbsp;</td><td align=right>" . currency($descuento) . "</td></tr>";						   
						echo "<tr><td align=right><strong>GRAN TOTAL</strong></td><td>&nbsp;==&nbsp;</td><td align=right><strong><u>" . currency(($total-$descuento)) . "</u></strong></td></tr></table>";
						
						echo "<table width=100% border=0 class=columnNormalPrinterFriendly>";
						echo "<tr><td align=right><font size=+1><strong>(" . makewords(($total-$descuento), 2, $denom_moneda) . ")</font></strong></td></tr>";
						echo "</table>";
						 
					echo "</tr>";

					/* Titulares de la sección Otros */
					echo "<tr><td></td><td colspan=2><img src=images/pxl.gif height=20 width=750></td></tr>";
					echo "<tr><td width=30 class=columnNormalPrinterFriendly><img src='images/pxl.gif'></td><td width=500 class=columnNormalPrinterFriendly valign=top ><u><strong>Productos y Servicios Opcionales </u></strong></td>";
					echo "    <td class=columnNormalPrinterFriendly valign=top align=right width=150><strong><u>Precio</u></strong><br><br></td></tr>";							
				}		
			}
			
			echo "<tr><td></td><td colspan=2 bgcolor=gray><img src=images/pxl.gif height=1 width=750></td></tr>";
			
			echo "<tr><td class=columnNormalPrinterFriendly valign=top><strong>$num_det)&nbsp;</strong></td>";
			echo "<td class=columnNormalPrinterFriendly valign=top><strong>" . $registro_det["DESCRIPCION"] . "</strong>";

			if ( $registro_det["DETALLES_IMPORTANTES"] <> "" ) /* del producto */
			{
				echo  "<br>" . $registro_det["DETALLES_IMPORTANTES"];

				if( strpos( $registro_det["DETALLES_IMPORTANTES"], "<ul>", 0 ) == 0 ) echo "<br><br>";
			}
								 
			if ( $registro_det["DETALLESADICIONALES"] <> "" )
				echo  "<br><em>" . $registro_det["DETALLESADICIONALES"] . "</em>";	
			
			echo  "</td>";
			
			$precio = $registro_det["PRECIO"];			
			
			if( $moneda == "D" and $tipocambio <> 0)
				$precio = $precio / $tipocambio;			
			
			$descto = (($registro_det["DESCTO"]>0) ? ($precio * ($registro_det["DESCTO"]/100)) : 0 );
			
			echo "<td class=columnNormalPrinterFriendly width=150 align=right valign=top><strong>" . currency($precio) . "</strong>";
			
				if( $descto > 0 )
				{
					echo "<br><br>";
					echo "<strong>Descuento: (" . number_format($registro_det["DESCTO"], 2, '.', ',')  . "%)&nbsp;" . currency($descto) . "</strong><br><br>";
					echo "<strong><u>Precio Final: " . currency($precio-$descto) . "</u></strong><br>";
					echo "<font size=-2>Nota: El precio final de este producto ya incluye el descuento.</font>";
				}
			
			echo "</td>";			
		
			if( $registro_det["TIPO_PRODUCTO"] <> "O" )	
			{
				$total += $precio;
				$descuento += $descto;
			}
			
			if( $registro_det["TIPO_PRODUCTO"] == "A" )	
			   $productos_de_software++;
			
			echo "</tr>";
		}
	
				if( $clast_tipo <> "O" )
				{
					echo "<tr><td></td><td colspan=2 bgcolor=gray><img src=images/pxl.gif height=1 width=750></td></tr>";
					echo "<tr><td></td><td colspan=2><img src=images/pxl.gif height=3 width=750></td></tr>";
					echo "<tr><td></td><td colspan=2 bgcolor=gray><img src=images/pxl.gif height=1 width=750></td></tr>";
					
					echo "<tr><td colspan=3 class=columnNormalPrinterFriendly align=right>";
					
						echo "<table width=250 border=0 class=columnNormalPrinterFriendly>";
						if( $descuento > 0 ) echo "<tr><td align=right><strong>SubTotal</strong></td><td>&nbsp;=&nbsp;</td><td align=right>" . currency($total) . "</td></tr>";
						if( $descuento > 0 ) echo "<tr><td align=right><strong>Descuento</strong></td><td>&nbsp;-&nbsp;</td><td align=right>" . currency($descuento) . "</td></tr>";						   
						echo "<tr><td align=right><strong>GRAN TOTAL</strong></td><td>&nbsp;==&nbsp;</td><td align=right><strong><u>" . currency(($total-$descuento)) . "</u></strong></td></tr></table>";
						
						echo "<table width=100% border=0 class=columnNormalPrinterFriendly>";
						echo "<tr><td align=right><font size=+1><strong>(" . makewords(($total-$descuento), 2, $denom_moneda) . ")</font></strong></td></tr>";
						echo "</table>";
						 
					echo "</tr>";
				}		
	
		echo "</table>";
		
		@mysql_free_result( $result_detail );
			
			 ?>
    </TD>
  </TR>
</TABLE>
		
<?

 $subj = "Grupo GES - Cotización"; 

 $header = "Return-Path: root@me.com\r\n"; 
 $header .= "From: $nombre_usuario <$email_usuario>\r\n"; 
 $header .= "Cc: jorgeels@grupoges.com.mx,etrujillo@grupoges.com.mx";
 
 if( $email_usuario != "jorgeels@grupoges.com.mx" and $email_usuario != "etrujillo@grupoges.com.mx" ) 
   $header .= "," . $email_usuario;
   
 $header .= "\r\n"; 
 $header .= "Content-Type: text/html; charset=iso-8859-1;\r\n\r\n"; 

 $mesg = "<html><body style='font-family:arial,helvetica; font-size:12px; font-color: black; " .
         "background: url(http://www.grupoges.com.mx/images/logoFondoGES.jpg) no-repeat right top;' >";

 $mesg .= "<h3>Notificaci&oacute;n de Cotizaci&oacute;n Electr&oacute;nica</h3>\r\n";

 $mesg .= "Estimado $dirigidoa<br>\r\n";
 $mesg .= "$cargo<br>\r\n";
 $mesg .= "$empresa<br><br>\r\n";  
 
 $mesg .= "Atendiendo su amable petición, por este conducto ponemos a su disposición la cotización que nos fue solicitada.<br><br>\r\n";
 $mesg .= "Esta cotización podrá ser consultada vía Internet haciendo 'clic' en este link <a href='http://www.grupoges.com.mx/grupoges_imprimecotizacion.php?id_cotizacion=$id_cotizacion'>&laquo;&nbsp;Entrar a cotización&nbsp;&raquo;</a>,\r\n"; 
 $mesg .= " y utilizando esta contraseña que le ha sido asignada autom&aacute;ticamente: <font color=red><strong><em>$passwrd</em></strong></font><br><br>\r\n";
 $mesg .= "Si necesita alguna aclaraci&oacute;n o alg&uacute;n servicio adicional, no dude en ponerse en contacto con nosotros.<br><br>\r\n"; 
 
 $mesg .= "<strong>Atentamente<br><br><br>\r\n";
 $mesg .= "$nombre_usuario<br>\r\n";
 $mesg .= "Grupo GES Sistemas Avanzados<br>\r\n";
 $mesg .= "$cargo_usuario<br>\r\n";  
 $mesg .= "L&iacute;der Nacional en software para Gesti&oacute;n Escolar</strong><br><br>\r\n";

 $mesg .= "<HR>";
 $mesg .= "<DIV align=center><STRONG><A href='http://www.grupoges.com.mx' target=_blank>Vis&iacute;tenos en http://www.grupoges.com.mx</A></STRONG></DIV>\r\n";

 $mesg .= "</body></html>"; 

 if( mail ( $email, $subj, $mesg, $header ) )
 {
     echo "<br><br><div align=center><h2>Se ha enviado la notificación al correo electrónico $email.</h2></div><br><br>";
	 echo "<div align=center><a class=Ligas href='javascript:window.history.back();'>&laquo;&laquo; Regresar &raquo;&raquo;</a></div><br>";
 }
 else
 {
   die( "no se pudo completar el envío de la cotización." );
 }

 ?>
			
<br>

<?php
  include("footer.php");
 ?>

</body>

</html>