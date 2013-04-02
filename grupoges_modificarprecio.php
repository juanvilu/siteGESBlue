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
    	$id_cotizacion 	= $HTTP_POST_VARS["id_cotizacion"];
		$id_producto	= $HTTP_POST_VARS["id_producto"];
		$adicionales 	= $HTTP_POST_VARS["adicionales"];
		$precio 		= $HTTP_POST_VARS["precio"];
		$descuento		= $HTTP_POST_VARS["descuento"];
		
		$query = "UPDATE ges_cotizaciones_det SET PRECIO=$precio, DETALLESADICIONALES='$adicionales', DESCTO=$descuento " .
				 "WHERE ID_COTIZACION=$id_cotizacion and ID_PRODUCTO=$id_producto ";
				
		$link = mysql_pconnect( $db_host, $db_user, $db_pass) or mysql_error();
		mysql_select_db( $db_name, $link );
				 
		mysql_query( $query ) or mysql_error();
	}
	else
	{	
		if( !isset($HTTP_GET_VARS["id_cotizacion"]) or !isset($HTTP_GET_VARS["id_producto"]) )
		{
			header('302 Moved');
			header( "Location:grupoges_usuarios.php" );
			exit;    		
		}
		
    	$id_cotizacion 	= $HTTP_GET_VARS["id_cotizacion"];
		$id_producto	= $HTTP_GET_VARS["id_producto"];
		
		$link = mysql_pconnect( $db_host, $db_user, $db_pass) or mysql_error();
		mysql_select_db( $db_name, $link );		
	}
	
	// Consultar productos a modificar
	$query_detail = "SELECT a.*, b.DESCRIPCION, b.PRECIO AS PRECIO_PRODUCTO, b.TIPO_PRODUCTO FROM ges_cotizaciones_det a " . 
					" LEFT JOIN ges_productos b ON (b.ID_PRODUCTO=a.ID_PRODUCTO) " . 
					"WHERE a.ID_COTIZACION=$id_cotizacion and a.ID_PRODUCTO=$id_producto";

	$result_detail = mysql_query( $query_detail ) or die("No se pudo obtener el detail");
	
	if( $registro_det = @mysql_fetch_assoc($result_detail) ) 
	{
		$descripcion = $registro_det["DESCRIPCION"];
		$adicionales = $registro_det["DETALLESADICIONALES"];
		$precio 	 = $registro_det["PRECIO"];
		$descto 	 = $registro_det["DESCTO"];
	}
	
	@mysql_free_result( $result_detail );		
	   
?>

<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>

<head>

	<title>Modificar precio a un producto</title> 
    <LINK HREF=ges.css REL=STYLESHEET>	

    <SCRIPT SRC="../calend/calend.js" TYPE="text/javascript"></script>

</head>

<body>

<?php

	if( isset($HTTP_POST_VARS["aplicarcambios"]) )
	{
		 echo "<script language='Javascript'>";
		 echo "   alert( 'Se aplicaron los cambios a este producto.'); ";
		 echo "   window.close(); window.opener.document.location.reload(); " ;
		 echo "</script>";		
	}
	
 ?>

<br>

<table width="800" BORDER=0 align="center" CELLPADDING=0 CELLSPACING=0 SIZE=100%>

          <tr>
		  	<td><p class="Titulares">Modificar Precio</p></td>
		  </tr>
		  <TR>
            <TD class=columnNormal height=3><IMG src='images/pxl.gif'></TD>
          </TR>
          <TR> 
            <TD class=column>
			<form action="grupoges_modificarprecio.php" method="post" enctype="multipart/form-data" name="cambios" target="_self" id="cambios">
        		<input name="aplicarcambios" type="hidden" id="aplicarcambios" value="SI">
				<input name="id_cotizacion" type="hidden" id="id_cotizacion" value="<?php echo $id_cotizacion;?>">
				<input name="id_producto" type="hidden" id="id_producto" value="<?php echo $id_producto;?>">

        <TABLE border=0 width=100% >
          <TR> 
            <TD class=FTITLE colspan=2 vAlign=top align=left> &nbsp;<IMG src='images/mW.gif' width='5' height='10'>&nbsp;Datos 
              del Producto y Precio</TD>
          </TR>
          <TR> 
            <TD bgcolor=gray colspan=2></TD>
          </TR>
          <TR> 
            <TD class=columnNormal colspan=2></TD>
          </TR>
          <TR> 
            <TD width="205" class=columnNormal align=right> &nbsp;<strong>&nbsp;&nbsp;Descripci&oacute;n 
              del Producto</strong>&nbsp;&nbsp;</TD>
            <TD class=columnNormalHilite> <?php echo $descripcion;?></TD>
          </TR>
          <TR> 
            <TD width="205" class=columnNormal align=right>&nbsp;<strong>&nbsp;Detalles Adicionales&nbsp;&nbsp;<br>(Observaciones)</strong>&nbsp;&nbsp;</TD>
            <TD class="columnNormalHilite"> <textarea name="adicionales" cols="80" rows="8" id="adicionales"><?php echo $adicionales;?></textarea></TD>
          </TR>
          <TR> 
            <TD width="205" class=columnNormal align=right>&nbsp;<strong>&nbsp;&nbsp;Precio</strong>&nbsp;&nbsp;</TD>
            <TD class="boxColumn"> <input name=precio id="precio" value="<?php echo $precio;?>" size="18" maxlength="18"></TD>
          </TR>
          <TR> 
            <TD width="205" class=columnNormal align=right>&nbsp;<strong>&nbsp;&nbsp;Descuento</strong>&nbsp;&nbsp;</TD>
            <TD class="boxColumn"> <input name=descuento id="descuento" value="<?php echo $descto;?>" size="18" maxlength="18"></TD>
          </TR>
          <TR> 
            <TD class=boxColumn>&nbsp;</TD>
            <TD class=boxColumn>&nbsp;</TD>
          </TR>
          <TR> 
            <TD class=boxColumn>&nbsp;</TD>
            <TD class="boxColumn"> <a href='javascript:document.cambios.submit()'><img src='images/aplicarcambiosButton.gif' border="0"></a></TD>
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