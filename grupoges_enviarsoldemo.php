<?php

 include("config.inc.php"); 


  $db_host = "www.grupoges.com.mx";
  $db_user = "geswww";      // "root"
  $db_pass = "escolarges";  // ""
  $db_name = "ges";         // "escolar"

  $descripciontema = "";
  $hora = "";
  $fecha = "";
  
  $idsesion = "";  // se tomará de la base de datos
  
  $id_evento = $HTTP_GET_VARS["id_evento"]; 

  $link = mysql_connect( $db_host, $db_user, $db_pass) or mysql_error();
  mysql_select_db( $db_name, $link );

  $qryres = mysql_query( "SELECT DAYOFWEEK(fechayhora) as dow, MONTH(fechayhora) as m, YEAR(fechayhora) as y, DAYOFMONTH(fechayhora) as day, TIME_FORMAT(fechayhora, '%h:%i %p') as t, a.*, b.descripciontema, b.duracion  " .
						 " FROM ges_demosagenda a " . 
						 "  LEFT JOIN ges_demostemas b ON (b.id_tema=a.id_tema) " .
						 "WHERE id_evento=$id_evento " );	
						 
 if( $row = @mysql_fetch_assoc( $qryres ) )
 {
 	  $descripciontema = $row["descripciontema"];
	  $idsesion		   = $row["id_sesion"];

	  $hora   = $row["t"];
	  $fecha = $row["day"];
	  
	  if( $row["dow"] == 1 )
		 $fecha = "Domingo " . $fecha;
	  else if( $row["dow"] == 2 )
		 $fecha = "Lunes " . $fecha;
	  else if( $row["dow"] == 3 )
		 $fecha = "Martes " . $fecha;
	  else if( $row["dow"] == 4 )
		 $fecha = "Miércoles " . $fecha;
	  else if( $row["dow"] == 5 )
		 $fecha = "Jueves " . $fecha;
	  else if( $row["dow"] == 6 )
		 $fecha = "Viernes " . $fecha;
	  else if( $row["dow"] == 7 )
		 $fecha = "Sábado " . $fecha;
		 
	  switch( $row["m"] )	
	  {
	    case 1: $fecha .= " de Enero "; break;
		case 2: $fecha .= " de Febrero "; break;
		case 3: $fecha .= " de Marzo "; break;
		case 4: $fecha .= " de Abril "; break;
		case 5: $fecha .= " de Mayo "; break;
		case 6: $fecha .= " de Junio "; break;
		case 7: $fecha .= " de Julio "; break;
		case 8: $fecha .= " de Agosto "; break;
		case 9: $fecha .= " de Septiembre "; break;
		case 10: $fecha .= " de Octubre "; break;
		case 11: $fecha .= " de Noviembre "; break;
		case 12: $fecha .= " de Diciembre ";
	  }
	  
	  $fecha .= "de " . $row["y"];
 }

 @mysql_free_result( $qryres );
 @mysql_close($link);


 $grupoges = 0;
 
 if( isset($HTTP_GET_VARS["grupoges"]) )
 {
 	$grupoges = $HTTP_GET_VARS["grupoges"];
 }

	$email = "jlopez@grupoges.com.mx"; 

 if( $grupoges == 1 )
 {
    $cc   = "srodriguez@grupoges.com.mx";
	$subj = "Grupo GES Sistemas Avanzados - Solicitud de Inscripción a DEMO ON LINE";
 }
 else
 {
     $cc   = "srodriguez@grupoges.com.mx"; "etrujillo@grupoges.com.mx";
	//$cc   = "lpastrana@escolarhitech.com.mx"; 
	//$subj = "Escolar HiTECH - Solicitud de Inscripción a DEMO ON LINE";
	$subj = "Grupo GES Sistemas Avanzados - Solicitud de Inscripción a DEMO ON LINE";
 }

 $emailsender = $HTTP_GET_VARS["email"]; 
 $namesender  = $HTTP_GET_VARS["nombre"]; 
 $redirect    = $HTTP_GET_VARS["redirect"]; 

 $mesg = "<html><body style='font-family:verdana,arial,helvetica; font-size:12px; font-color: black; " .
			 "background: url(http://intranet.escolarges.com.mx/images/logoFondoGES.jpg) no-repeat right top;'>";

 $mesg .= "<h3>$subj</h3><br>";

 $mesg .= "Tema de Interés: "  . $HTTP_GET_VARS["tema"]  . ". <br><br>";
 $mesg .= "Institución que solicita informes: " . $HTTP_GET_VARS["empresa"] . "<br>";
 $mesg .= "Persona para contacto: " . $HTTP_GET_VARS["nombre"] . "<br>";
 $mesg .= "Cargo o Puesto del contacto: " . $HTTP_GET_VARS["cargo"] . "<br>";
 $mesg .= "Correo Electrónico del contacto: " . $HTTP_GET_VARS["email"] . "<br><br>";
 $mesg .= "Dirección: " . $HTTP_GET_VARS["direccion"] . "<br>";
 $mesg .= "Ciudad: " . $HTTP_GET_VARS["ciudad"] . "<br>";
 $mesg .= "Estado: " . $HTTP_GET_VARS["estado"] . "<br>";
 $mesg .= "Pais: " . $HTTP_GET_VARS["pais"] . "<br>";
 $mesg .= "Teléfono: " . $HTTP_GET_VARS["telefono"] . "<br><br>";
 $mesg .= "Llamar entre: " . $HTTP_GET_VARS["desde"] . " y " . $HTTP_GET_VARS["hasta"] .  "<br><br>";
 
 $mesg .= "Comentarios: "  . $HTTP_GET_VARS["comentarios"]  . ". <br>";
// $mesg .= "Fecha y Hora: " . $fecha . ", " . $hora . "<br>";
 //$mesg .= "Identificador de la Sesión (Meeting-ID): " . $idsesion . "<br><br>";
 //$mesg .= "Forma de entrar a la sesión: <strong>https://www1.gotomeeting.com/join</strong> e ingresar el identificador de sesión <strong>$idsesion</strong>.<br>";
 //$mesg .= "Password de la sesión: <strong>gesgesges</strong><br>";
 //$mesg .= "<br>Se recomienda Micrófono y Auriculares son recomendados.<br>";

 if( isset($HTTP_GET_VARS["siendoatendido"]) )
 {
 	$mesg .= "<br><strong>YA ESTOY siendo atendido por un asesor de ventas.</strong><br>";	
 }

 if( isset($HTTP_GET_VARS["deseoinscribirme"]) )
 {
 	$mesg .= "<br><strong>DOY mi consentimiento para registrarme.</strong><br>";	
 }

 $mesg .= "\n<br><hr><div style='display: inline; font-size: 9px; color: #666666;'>Disclaimer: Este e-mail es de interés solo para los individuos mencionados en el mismo. Por lo anterior, no podrá distribuirse ni difundirse bajo ninguna circunstancia. Si Usted no es alguno de los destinatarios y este correo le ha llegado por equivocación se le pide borrarlo inmediatamente.</div>";

 $mesg .= "</body></html>"; 
 
 if( $use_smtp_4mail ) 
 {
	 require_once 'Mail.php';
	 
	 $host = "mail.escolarges.com.mx";
	 $username = "newsletter@grupoges.com.mx";
	 $password = "geskiki";

	$smtp = Mail::factory( 'smtp',
	  array ('host' => $host,
		'auth' => true,
		'username' => $username,
		'password' => $password));
		
	$headers = array ('From' => $emailsender,
	  'Return-Path' => $username,
	  'To' => $email,
	  'Cc' => $cc,
	  'Subject' => $subj, 
	  'Content-Type' => "text/html; charset=iso-8859-1" );		
	
	$mail = $smtp->send( $email . "," . $cc, $headers, $mesg );
	
	if (PEAR::isError($mail)) 
	{
	   echo "no se pudo completar el envío de su información...<br><br>";
	   echo("<p>" . $mail->getMessage() . "</p>");
	} 
	else 
	{
		 header( '302 Moved' );
		 header ( "Location:$redirect" );	 
	}	
 }
 else
 {	
 
	$headers = "Return-Path: jlopez@grupoges.com.mx\r\n"; 
	$headers .= "From: $namesender <$emailsender>\r\n"; 
	$headers .= "Cc: $cc\r\n"; 
	$headers .= "Content-Type: text/html; charset=iso-8859-1;\r\n\r\n";  
 
	if( mail ( $email, $subj, $mesg, $headers ) )
	 {
		 header( '302 Moved' );
		 header ( "Location:$redirect" );
	 }
	 else
	 {
	   die( "no se pudo completar el envío de su información..." );
	 }
 }

 /***
  
    ' Enviar MAIL con PEAR Mail.php
	' cuando se obtiene lo siguiente

Warning: mail() [function.mail]: SMTP server response: 553 sorry, that domain isn't in my list of allowed rcpthosts (#5.7.1) in c:\escolar_html\hitech\hitech_enviarinfo.php on line 41
no se pudo completar el envío de su información...
	

	require_once 'Mail.php';
	require_once 'Mail/mime.php';

	$destinario = 'direccion@del.destinario.com';
	$from = 'direccion@del.from.com';
	$asunto = 'Asunto del mensaje';
	$mensaje = '<html><head><title>'.$asunto.'</title></head>'."\n";
	$mensaje .= '<body><p><h1>Hola</h1></body></html>';

	$mime = new Mail_mime("\n");
	$mime->setTXTBody(strip_tags($mensaje));
	$mime->setHTMLBody($mensaje);
	$mime->addAttachment('fichero_adjunto.zip', 'application/zip');
	$body = $mime->get();
	$hdrs = array('From' => $from, 'Subject' => $asunto);
	$hdrs = $mime->headers($hdrs);
	$mail =& Mail::factory('mail');
	$res = $mail->send($destinario, $hdrs, $body);
	if (PEAR::isError($res)) echo 'error enviando el email';  
 
  */
?>

