<?php
 $email = $HTTP_GET_VARS["recipient"]; 
 $subj  = $HTTP_GET_VARS["subject"]; 
 
 if( !isset($HTTP_GET_VARS["empresa"]) )
 {
 	exit;
 }

 if( !isset($HTTP_GET_VARS["cargo"]) )
 {
 	exit;
 }

 $cc = $HTTP_GET_VARS["cc"]; 
 $emailsender = $HTTP_GET_VARS["email"]; 
 $namesender  = $HTTP_GET_VARS["realname"]; 

 $redirect    = $HTTP_GET_VARS["redirect"]; 
  
 $header = "Return-Path: root@me.com\r\n"; 
 $header .= "From: $namesender <$emailsender>\r\n"; 
 $header .= "Cc: $cc\r\n"; 
 $header .= "Content-Type: text/html; charset=iso-8859-1;\r\n\r\n"; 

 $mesg = "<html><body>";

 $mesg .= "<h3>Control Escolar GES - Solicitud de Informes</h3><br>";

 $mesg .= "Tipo de Usuarios: " . $HTTP_GET_VARS["tipocliente"] . "<br>";
 $mesg .= "Institución que solicita informes: " . $HTTP_GET_VARS["empresa"] . "<br>";
 $mesg .= "Persona para contacto: " . $HTTP_GET_VARS["realname"] . "<br>";
 $mesg .= "Cargo del contacto: " . $HTTP_GET_VARS["cargo"] . "<br>";
 $mesg .= "Correo Electrónico del contacto: " . $HTTP_GET_VARS["email"] . "<br>";
 $mesg .= "Num. de Niveles Educativos: " . $HTTP_GET_VARS["niveles"] . "<br><br><br>";
 $mesg .= "Descripción de Niveles Educativos: " . $HTTP_GET_VARS["descripcion_niveles"] . "<br><br><br>";
 $mesg .= "¿Cómo se enteró de nuestros servicios? " . $HTTP_GET_VARS["comoseentero"] . "<br><br><br>"; 

 $mesg .= "Dirección: " . $HTTP_GET_VARS["direccion"] . "<br>";
 $mesg .= "Colonia: " . $HTTP_GET_VARS["colonia"] . "<br>";
 $mesg .= "C.P.: " . $HTTP_GET_VARS["cp"] . "<br>";
 $mesg .= "Ciudad: " . $HTTP_GET_VARS["ciudad"] . "<br>";
 $mesg .= "Estado: " . $HTTP_GET_VARS["estado"] . "<br>";
 $mesg .= "País: " . $HTTP_GET_VARS["pais"] . "<br>"; 
 $mesg .= "Telefonos: " . $HTTP_GET_VARS["telefono"] . "<br><br><br>";

 //$mesg .= "Desea recibir información adicional por e-mail: " . (($HTTP_GET_VARS["deseo_info_adic"]=="ON") ? "SI" : "NO") . "<br>";  
 //$mesg .= "Instalaría en RED: " . (($HTTP_GET_VARS["instalar_red"]=="ON") ? "SI" : "NO") . "<br>";    

 $mesg .= "</body></html>"; 

 if( mail ( $email, $subj, $mesg, $header ) )
 {
	$db_host = "localhost"; 
	$db_user = "grupoges";     
	$db_pass = "6ruP0G35"; 
 
	$link = mysql_connect($db_host, $db_user, $db_pass) or mysql_error();
    mysql_select_db( "ges", $link );
	
    $resultid = mysql_query( "SELECT MAX(IDCliente) AS MAXID FROM ges_prospectos" );
	$row = @mysql_fetch_assoc($resultid); 
	
	$id = $row["MAXID"];
	$id++;
	
	@mysql_free_result($resultid);

    $ctipocliente     = $HTTP_GET_VARS["tipocliente"];
    $cempresa         = $HTTP_GET_VARS["empresa"];
	$ccontacto        = $HTTP_GET_VARS["realname"];
	$ccontacto_cargo  = $HTTP_GET_VARS["cargo"];	
	$ccontacto_email  = $HTTP_GET_VARS["email"];
	$nnum_niveles     = $HTTP_GET_VARS["niveles"];
	$cdescrip_niveles = $HTTP_GET_VARS["descripcion_niveles"];
	$cdireccion		  = $HTTP_GET_VARS["direccion"];
	$ccolonia         = $HTTP_GET_VARS["colonia"];
	$ccp              = $HTTP_GET_VARS["cp"];
	$cciudad          = $HTTP_GET_VARS["ciudad"];
	$cestado          = $HTTP_GET_VARS["estado"];	
	$cpais            = $HTTP_GET_VARS["pais"];		
	$ctelefono        = $HTTP_GET_VARS["telefono"];		
	$comoseentero	  = $HTTP_GET_VARS["comoseentero"];

    if( $ctipocliente == "Empleado" )
	    $ctipo = "EMP";
    else if( $ctipocliente == "Director" )
	    $ctipo = "DIR";	
    else if( $ctipocliente == "JefeAdministrativo" )
	    $ctipo = "ADMVO";	
    else if( $ctipocliente == "JefeServiciosEscolares" )
	    $ctipo = "SE";			
    else if( $ctipocliente == "Encargado de sistemas" )
	    $ctipo = "SIST";
    else if( $ctipocliente == "Consultor" )
	    $ctipo = "CONS";
    else if( $ctipocliente == "ProspectoDistribuidor" )
	    $ctipo = "PRO";
    else if( $ctipocliente == "Otro" )
	    $ctipo = "OTRO";		

    $cfecharegistro = current_dbdate();

    $exec_qry = "INSERT INTO ges_prospectos " .
	            " SET idcliente=$id, TipoCliente='$ctipo', nombre='$cempresa', contacto_nombre='$ccontacto', contacto_cargo='$ccontacto_cargo', " .
	            "     Contacto_Email='$ccontacto_email', Niveles_Educativos=$nnum_niveles, Descripcion_Niveles='$cdescrip_niveles', " .
	            "     Direccion='$cdireccion', Colonia='$ccolonia', CP='$ccp', Ciudad='$cciudad', Estado='$cestado', Pais='$cpais', Telefonos='$ctelefono', " .
				"     FechaRegistro='$cfecharegistro', ComoSeEntero='$comoseentero' ";

    $resultid = mysql_query( $exec_qry );
	
	// suscribir a newsletter
/*	$result_newsletter = mysql_query( "SELECT email FROM ges_suscripnews WHERE EMAIL='$ccontacto_email' " );
								
	if( $registro_email = @mysql_fetch_assoc($result_newsletter) ) 
	{
	}
	else
	{
	    mysql_query( "INSERT INTO ges_suscripnews (email, fecha, nombre, activo) values ('$ccontacto_email', '$cfecharegistro', '$ccontacto', 1) " );
	}
	
	@mysql_free_result( $result_newsletter );			
*/
     header( '302 Moved' );
     header ( "Location:$redirect" );
 }
 else
 {
   die( "no se pudo completar el envío de su información..." );
 }

function right ($str, $howManyCharsFromRight)
{
  $strLen = strlen ($str);
  return substr ($str, $strLen - $howManyCharsFromRight, $strLen);
}
 
 
function current_dbdate()
{
   $cur_date = getdate();
   
   $anio = $cur_date["year"];
   $mes = $cur_date["mon"];
   $dia = $cur_date["mday"];
   
   return dateasmysql($anio, $mes, $dia); 

}

function dateasmysql( $year, $month, $day )
{
   $month = right( "00" . $month, 2 );	
   $day = right( "00" . $day, 2 );	

   $cStr = $year . "-" . $month . "-" . $day;
  
   return $cStr;
}


?>