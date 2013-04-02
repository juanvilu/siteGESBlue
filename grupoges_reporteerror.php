<?php
  session_start();

  $institucion = "";
  $errormsg	= "";
  $lic = "";
  
  if( isset($HTTP_GET_VARS["customername"]) )
  	$institucion = $HTTP_GET_VARS["customername"];
	
  if( isset($HTTP_GET_VARS["errormsg"]) )
  	$errormsg = $HTTP_GET_VARS["errormsg"];
	
  if( isset($HTTP_GET_VARS["lic"]) )
  	$lic = $HTTP_GET_VARS["lic"];	
  
?>

<html>

<head>
<meta NAME="keywords" CONTENT="control escolar, sistema de control escolar, control academico, desarrollo de software, colegios, instituciones educativas">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Reporte de Errores</title>

	<script language="Javascript">

		function enviardatos() 
		{
           var error = 0;
		   
		   document.gateway.method = "POST";
		   document.gateway.submit();		   
		} 
		
	</script>

</head>

<body>

<form name="gateway" action="grupoges_reporteerrorform.php" method="POST">
	<input type=hidden name="institucion" value="<?php echo $institucion;?>">
	<input type=hidden name="licencia" value="<?php echo $lic;?>">
	<input type=hidden name="errormsg" value="<?php echo $errormsg;?>">

<table>	
<tr><td>
	<p>Recibir Reportes de Error</p> </td></tr>

	<script language="Javascript">
 		 enviardatos(); 
	</script>
	
</table>
	    
</form>

</body>
</html>
