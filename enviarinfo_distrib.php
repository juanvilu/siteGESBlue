<?php

 $email = "jlopez@grupoges.com.mx"; 
 $subj  = $HTTP_GET_VARS["subject"]; 

 $cc = "etrujillo@grupoges.com.mx, susana@grupoges.com.mx"; // $HTTP_GET_VARS["cc"]; 
 $emailsender = $HTTP_GET_VARS["email"]; 
 $namesender  = $HTTP_GET_VARS["nombrecontacto"]; 

 $redirect    = $HTTP_GET_VARS["redirect"]; 
  
 $header = "Return-Path: root@me.com\r\n"; 
 $header .= "From: $namesender <$emailsender>\r\n"; 
 $header .= "Cc: $cc\r\n"; 
 $header .= "Content-Type: text/html; charset=iso-8859-1;\r\n\r\n"; 

 $mesg = "<html><body>";

 $mesg .= "<h3>Control Escolar GES - Solicitud de Informes para Distribuidor (elaborado en PHP)</h3><br>";

 $mesg .= "Organización que solicita informes: " . $HTTP_GET_VARS["empresa"] . "<br>";
 $mesg .= "Nombre del contacto: " . $HTTP_GET_VARS["nombrecontacto"] . "<br>";
 $mesg .= "Cargo del contacto: " . $HTTP_GET_VARS["cargocontacto"] . "<br>";
 $mesg .= "Correo Electrónico: " . $HTTP_GET_VARS["email"] . "<br><br>";
 
 if( isset($HTTP_GET_VARS["boletin"]) )
 {
 	$mesg .= " @ Si deseo suscribirme al boletín electrónico. <br><br>";
 }
 
 $mesg .= "Estado: " . $HTTP_GET_VARS["estado"] . "<br>";
 $mesg .= "País: " . $HTTP_GET_VARS["pais"] . "<br>"; 
 $mesg .= "Telefonos: " . $HTTP_GET_VARS["telefono"] . "<br><br><br>";
 
 $mesg .= "Zona de Cobertura: " . $HTTP_GET_VARS["zonacobertura"] . "<br><br>";
 $mesg .= "Experiencia con otro software: " . $HTTP_GET_VARS["experiencia"] . "<br><br>"; 
 
 if( isset($HTTP_GET_VARS["otros"]) )
 {
 	$mesg .= "Otros datos: " . $HTTP_GET_VARS["otros"] . "<br><br><br>"; 
 }

 $mesg .= "</body></html>"; 

 if( mail ( $email, $subj, $mesg, $header ) )
 {
	// suscribir a newsletter
	if( isset($HTTP_GET_VARS["boletin"]) )
	{
		$db_host = "localhost"; 
		$db_user = "geswww";      //"root";
		$db_pass = "escolarges"; // "";
	 
		$link = mysql_connect($db_host, $db_user, $db_pass) or mysql_error();
		mysql_select_db( "ges", $link );	

		$ccontacto        = $HTTP_GET_VARS["nombrecontacto"];
		$ccontacto_email  = $HTTP_GET_VARS["email"];
		$cfecharegistro = current_dbdate();
		
		$result_newsletter = mysql_query( "SELECT email FROM ges_suscripnews WHERE EMAIL='$ccontacto_email' " );
									
		if( $registro_email = @mysql_fetch_assoc($result_newsletter) ) 
		{
		}
		else
		{
			mysql_query( "INSERT INTO ges_suscripnews (email, fecha, nombre, activo) values ('$ccontacto_email', '$cfecharegistro', '$ccontacto', 1) " );	
		}
		
		@mysql_free_result( $result_newsletter );
	}

     //header( '302 Moved' );
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