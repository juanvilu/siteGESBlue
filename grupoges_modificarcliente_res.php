<?php
  	session_start();

  	include("funciones.php");
	
	if( getsessionvar("firmado") == 'NO') 
	{
		header('302 Moved');
		header( "Location:grupoges_usuarios.php" );
		exit;    
	}
	
    if( isset($HTTP_POST_VARS["aplicarcambios"]) )
	{
        $id_cotizacion = $HTTP_POST_VARS["id_cotizacion"];
		
		$empresa 	= $HTTP_POST_VARS["empresa"];
		$dirigidoa	= $HTTP_POST_VARS["dirigidoa"];
		$cargo 		= $HTTP_POST_VARS["cargo"];
		$contacto 	= $HTTP_POST_VARS["contacto"];
		$email		= $HTTP_POST_VARS["email"];
		$ciudad		= $HTTP_POST_VARS["ciudad"];
		$estado		= $HTTP_POST_VARS["estado"];
		$pais		= $HTTP_POST_VARS["pais"];
		$fecha		= $HTTP_POST_VARS["fecha"];
		
		$fecha = date_for_database_updates( $fecha );
		
		$query = "UPDATE ges_cotizaciones SET EMPRESA='$empresa', DIRIGIDOA='$dirigidoa', CARGO='$cargo', " .
				 "     CONTACTO='$contacto', EMAIL='$email', CIUDAD='$ciudad', ESTADO='$estado', PAIS='$pais', FECHA='$fecha' " .
				 "WHERE ID_COTIZACION=$id_cotizacion ";
				
		$link = mysql_pconnect( $db_host, $db_user, $db_pass) or mysql_error();
		mysql_select_db( $db_name, $link );
				 
		mysql_query( $query ) or mysql_error();
	}
	else
	{	
		if( !isset($HTTP_GET_VARS["id_cotizacion"]) )
		{
			header('302 Moved');
			header( "Location:grupoges_usuarios.php" );
			exit;    		
		}
		
    	$id_cotizacion 	= $HTTP_GET_VARS["id_cotizacion"];
		
		$link = mysql_pconnect( $db_host, $db_user, $db_pass) or mysql_error();
		mysql_select_db( $db_name, $link );		
	}
	
	// Consultar productos a modificar
	$query = "SELECT * FROM ges_cotizaciones WHERE ID_COTIZACION=$id_cotizacion";

	$result_cotiza = mysql_query( $query ) or die("No se pudo obtener la cotización");
	
	if( $row = @mysql_fetch_assoc($result_cotiza) ) 
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
		
		if( $pais <> "Mexico" ) $estado = "OUTME";
		
		$fecha		= get_str_datetime( $fecha, 0, 0 );
	}
	
	@mysql_free_result( $result_cotiza );	

?>

<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>

<head>

	<title>Modificar precio a un producto</title> 
    <LINK HREF=ges.css REL=STYLESHEET>	

    <SCRIPT SRC="../calend/calend.js" TYPE="text/javascript"></script>
	
	<script type="text/javascript">
	
		function verify( id_cotizacion ) 
		{
		
				if( EsFechaValida( document.cambios.fecha.value, document.cambios.fecha ) == false )
				{
					alert( "La fecha está en formato incorrecto o no ha sido especificada." );
					document.cambios.fecha.focus();
				}		
				else
				    document.cambios.submit();
		
		}

	
	</script>

</head>

<body>

<?php

	if( isset($HTTP_POST_VARS["aplicarcambios"]) )
	{
		 echo "<script language='Javascript'>";
		 echo "   alert( 'Se aplicaron los cambios a esta cotización.'); ";
		 echo "   window.close(); window.opener.document.location.reload(); " ;
		 echo "</script>";		
	}
	
 ?>

<br>

<table width="800" BORDER=0 align="center" CELLPADDING=0 CELLSPACING=0 SIZE=100%>

          <tr>
		  	<td><p class="Titulares">Modificar Datos del Cliente</p></td>
		  </tr>
		  <TR>
            <TD class=columnNormal height=3><IMG src='images/pxl.gif'></TD>
          </TR>
          <TR> 
            <TD class=column>
			<form action="grupoges_modificarcliente.php" method="post" enctype="multipart/form-data" name="cambios" target="_self" id="cambios">
        		<input name="aplicarcambios" type="hidden" id="aplicarcambios" value="SI">
				<input name="id_cotizacion" type="hidden" id="id_cotizacion" value="<?php echo $id_cotizacion;?>">

        <TABLE border=0 width=100% >
          <TR> 
            <TD class=FTITLE colspan=2 vAlign=top align=left> &nbsp;<IMG src='images/mW.gif' width='5' height='10'>&nbsp;Datos 
              del Prospecto</TD>
          </TR>
          <TR> 
            <TD bgcolor=gray colspan=2></TD>
          </TR>
          <TR> 
            <TD class=columnNormal colspan=2></TD>
          </TR>
          <TR> 
            <TD width="205" align=right class=columnNormal> &nbsp;<strong>&nbsp;&nbsp;Nombre 
              de la Empresa</strong>&nbsp;&nbsp;</TD>
            <TD class="boxColumn"> <input name=empresa size="75" maxlength="100" value="<?php echo $empresa;?>"></TD>
          </TR>
          <TR> 
            <TD class=columnNormal align=right>&nbsp;<strong>&nbsp;&nbsp;Dirigido 
              a</strong>&nbsp;&nbsp;</TD>
            <TD class="boxColumn"> <input name=dirigidoa size="75" maxlength="100" value="<?php echo $dirigidoa;?>"></TD>
          </TR>
          <TR> 
            <TD class=columnNormal align=right>&nbsp;<strong>&nbsp;&nbsp;Cargo</strong>&nbsp;&nbsp;</TD>
            <TD class="boxColumn"> <input name=cargo size="75" maxlength="100" value="<?php echo $cargo;?>"></TD>
          </TR>
          <TR> 
            <TD class=columnNormal align=right>&nbsp;<strong>&nbsp;&nbsp;Email</strong>&nbsp;&nbsp;</TD>
            <TD class="boxColumn"> <input name=email size="75" maxlength="100" value="<?php echo $email;?>"></TD>
          </TR>
          <TR> 
            <TD class=columnNormal align=right>&nbsp;<strong>&nbsp;&nbsp;Contacto</strong>&nbsp;&nbsp;</TD>
            <TD class="boxColumn"> <input name=contacto size="75" maxlength="100" value="<?php echo $contacto;?>"></TD>
          </TR>
          <TR> 
            <TD class=columnNormal align=right>&nbsp;<strong>&nbsp;&nbsp;Ciudad</strong>&nbsp;&nbsp;</TD>
            <TD class="boxColumn"> <input name=ciudad size="50" maxlength="50" value="<?php echo $ciudad;?>"></TD>
          </TR>
          <TR> 
            <TD class=columnNormal align=right>&nbsp;<strong>&nbsp;&nbsp;Estado</strong>&nbsp;&nbsp;</TD>
            <TD class="boxColumn"> <select name="estado" size="1" id="estado">
                <option value="Ags"  <?php echo (( $estado=="Ags" ) ? "selected" : ""); ?> >Aguascalientes</option>
                <option value="Bcn"  <?php echo (( $estado=="Bcn" ) ? "selected" : ""); ?>>Baja California</option>
                <option value="Bcs"  <?php echo (( $estado=="Bcs" ) ? "selected" : ""); ?>>Baja California Sur</option>
                <option value="Cam"  <?php echo (( $estado=="Cam" ) ? "selected" : ""); ?>>Campeche</option>
                <option value="Chis" <?php echo (( $estado=="Chis" ) ? "selected" : ""); ?>>Chiapas</option>
                <option value="Chi"  <?php echo (( $estado=="Chi" ) ? "selected" : ""); ?>>Chihuahua</option>
                <option value="Coah" <?php echo (( $estado=="Coah" ) ? "selected" : ""); ?>>Coahuila</option>
                <option value="Col"  <?php echo (( $estado=="Col" ) ? "selected" : ""); ?>>Colima</option>
                <option value="DF"   <?php echo (( $estado=="DF" ) ? "selected" : ""); ?>>Distrito Federal</option>
                <option value="Dur"  <?php echo (( $estado=="Dur" ) ? "selected" : ""); ?> >Durango</option>
                <option value="Gto"  <?php echo (( $estado=="Gto" ) ? "selected" : ""); ?>>Guanajuato</option>
                <option value="Gro"  <?php echo (( $estado=="Gro" ) ? "selected" : ""); ?>>Guerrero</option>
                <option value="Hgo"  <?php echo (( $estado=="Hgo" ) ? "selected" : ""); ?>>Hidalgo</option>
                <option value="Jal"  <?php echo (( $estado=="Jal" ) ? "selected" : ""); ?>>Jalisco</option>
                <option value="Mex"  <?php echo (( $estado=="Mex" ) ? "selected" : ""); ?>>M&eacute;xico, Estado de</option>
                <option value="Mich" <?php echo (( $estado=="Mich" ) ? "selected" : ""); ?>>Michoac&aacute;n</option>
                <option value="Mor"  <?php echo (( $estado=="Mor" ) ? "selected" : ""); ?>>Morelos</option>
                <option value="Nay"  <?php echo (( $estado=="Nay" ) ? "selected" : ""); ?>>Nayarit</option>
                <option value="NL"   <?php echo (( $estado=="NL" ) ? "selected" : ""); ?>>Nuevo Le&oacute;n</option>
                <option value="Oax"  <?php echo (( $estado=="Oax" ) ? "selected" : ""); ?>>Oaxaca</option>
                <option value="Pue"  <?php echo (( $estado=="Pue" ) ? "selected" : ""); ?>>Puebla</option>
                <option value="QRO"  <?php echo (( $estado=="QRO" ) ? "selected" : ""); ?>>Quer&eacute;taro</option>
                <option value="QR"   <?php echo (( $estado=="QR" ) ? "selected" : ""); ?>>Quintana Roo</option>
                <option value="Slp"  <?php echo (( $estado=="Slp" ) ? "selected" : ""); ?>>San Luis Potos&iacute;</option>
                <option value="Sin"  <?php echo (( $estado=="Sin" ) ? "selected" : ""); ?>>Sinaloa</option>
                <option value="Son"  <?php echo (( $estado=="Son" ) ? "selected" : ""); ?>>Sonora</option>
                <option value="Tamps" <?php echo (( $estado=="Tamps" ) ? "selected" : ""); ?>>Tamaulipas</option>
                <option value="Tlax"  <?php echo (( $estado=="Tlax" ) ? "selected" : ""); ?>>Tlaxcala</option>
                <option value="Tab"   <?php echo (( $estado=="Tab" ) ? "selected" : ""); ?>>Tabasco</option>
                <option value="Ver"   <?php echo (( $estado=="Ver" ) ? "selected" : ""); ?>>Veracruz</option>
                <option value="Yuc"   <?php echo (( $estado=="Yuc" ) ? "selected" : ""); ?>>Yucat&aacute;n</option>
                <option value="Zac"   <?php echo (( $estado=="Coah" ) ? "selected" : ""); ?>>Zacatecas</option>
                <option value="OUTMEX" <?php echo (( $estado=="OUTME" ) ? "selected" : ""); ?>>Fuera de M&eacute;xico</option>
              </select></TD>
          </TR>
          <TR> 
            <TD class=columnNormal align=right>&nbsp;<strong>&nbsp;&nbsp;Pa&iacute;s</strong>&nbsp;&nbsp;</TD>
            <TD class="boxColumn"><select name="pais" size="1" id="pais">
                <option value="Mexico" <?php echo (( $pais=="Mexico" ) ? "selected" : ""); ?>>M&eacute;xico</option>
                <option value="Colombia" <?php echo (( $pais=="Colombia" ) ? "selected" : ""); ?>>Colombia</option>
                <option value="Costa Rica" <?php echo (( $pais=="Costa Rica" ) ? "selected" : ""); ?>>Costa Rica</option>
                <option value="Ecuador" <?php echo (( $pais=="Ecuador" ) ? "selected" : ""); ?>>Ecuador</option>
                <option value="ElSalvador" <?php echo (( $pais=="ElSalvador" ) ? "selected" : ""); ?>>El Salvador</option>
                <option value="Guatemala" <?php echo (( $pais=="Guatemala" ) ? "selected" : ""); ?>>Guatemala</option>
                <option value="Honduras" <?php echo (( $pais=="Honduras" ) ? "selected" : ""); ?>>Honduras</option>
                <option value="Panama" <?php echo (( $pais=="Panama" ) ? "selected" : ""); ?>>Panam&aacute;</option>
                <option value="Peru" <?php echo (( $pais=="Peru" ) ? "selected" : ""); ?>>Per&uacute;</option>
                <option value="Otro" <?php echo (( $pais=="Otro" ) ? "selected" : ""); ?>>Otro (favor de indicar)</option>
              </select> </TD>
          </TR>
          <TR> 
            <TD class=columnNormal align=right>&nbsp;<strong>&nbsp;&nbsp;Fecha</strong>&nbsp;&nbsp;</TD>
            <TD class="boxColumn"> <table>
                <tr> 
                  <td> <input name="fecha" type="text" value="<? echo $fecha; ?>" size="15" maxlength="12"> 
                  </td>
                  <td width=5> </td>
                  <td> <a href="JavaScript:doNothing();" 
			onclick="setDateField(document.cambios.fecha); 
			         top.calendwin = window.open('calend/getdate.php','cal','WIDTH=185,HEIGHT=200,TOP=200,LEFT=300')" 
			onMouseOver="javascript: window.status = 'Abrir calendario'; return true;" 
			onMouseOut="window.status=' '; return true;"> <img src="images/calendario.gif" width="24" height="20" border="0"></a>	
                  </td>
                </tr>
              </table></TD>
          </TR>
          <TR> 
            <TD class=columnNormal align=right>&nbsp;</TD>
            <TD class=columnNormalHilite>&nbsp;</TD>
          </TR>
          <TR> 
            <TD class=boxColumn>&nbsp;</TD>
            <TD class="boxColumn"> <a href='javascript:verify()'><img src='images/aplicarcambiosButton.gif' border="0"></a></TD>
          </TR>
        </TABLE>					
</form>
			</TD>
          </TR>

          <TR>
            <TD class=columnNormal height=3><IMG src='images/pxl.gif'></TD>
          </TR>
        </TABLE>
			
<br>

<?php
  include("footer.php");
 ?>

</body>

</html>