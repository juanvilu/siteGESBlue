<?php
  session_start();

  include("funciones.php");
  
  if( isset($HTTP_POST_VARS["emailsubscription"]) or isset($HTTP_POST_VARS["recomendado"]) )
  {
     $nombrepersona = "";
	 
	 if( isset($HTTP_POST_VARS["recomendado"]) ) 
	 {
	     $emailsubscription = $HTTP_POST_VARS["emailamigo"];
		 $nombrepersona = $HTTP_POST_VARS["nombreamigo"];
		 
		 if( $emailsubscription == "" ) 
		 {
			echo "<h4>Es necesario indicar un email v�lido para suscribir al newsletter.</h4>";
			exit;
		 }
	 }
	 else
	 {
	     $emailsubscription = $HTTP_POST_VARS["emailsubscription"];
		 
		 if( isset( $HTTP_POST_VARS["nombresubscription"] ) )
		 {
		 	$nombrepersona = $HTTP_POST_VARS["nombresubscription"];
		 }
     }
  }
  else
  {
    if( isset($HTTP_GET_VARS["remove"]) )
	{
		$result_newsletter = mysql_query( "DELETE FROM ges_suscripnews WHERE EMAIL='" . $HTTP_GET_VARS["remove"] . "' " );
		$result_newsletter = mysql_query( "DELETE FROM ges_suscripnews_enviada WHERE EMAIL='" . $HTTP_GET_VARS["remove"] . "' " );		
									
		echo "<h4>Ha sido eliminado de la lista de distribuci�n.</h4>";

		$subj = "Grupo GES - Eliminaci�n de Bolet�n Electr�nico"; 
		
		$header = "Return-Path: root@me.com\r\n"; 
		$header .= "From: Suscriptor <"  . $HTTP_GET_VARS["remove"] . ">\r\n"; 
		$header .= "Content-Type: text/html; charset=iso-8859-1;\r\n\r\n"; 
		
		$mesg = "<html><body style='font-family:arial,helvetica; font-size:12px; font-color: black; " .
			 	"background: url(http://www.grupoges.com.mx/images/logoFondoGES.jpg) no-repeat right top;' >";
		
		$mesg .= "<h3>Eliminaci�n de Bolet�n Electr�nico de: " . $HTTP_GET_VARS["remove"] . "</h3>\r\n";
		
		mail ( "newsletter@grupoges.com.mx", $subj, $mesg, $header );
		
		exit;
	}
	else
    {
	  echo "Error enviando la forma de suscripci�n"; 	
	  exit;
	} 
  }

    
?>

<html>
<head>
<title>Suscripci�n al Newsletter</title>
    <LINK HREF=ges.css REL=STYLESHEET>
</head>

<body>


<?php

    $link = mysql_pconnect( $db_host, $db_user, $db_pass) or mysql_error();
    mysql_select_db( $db_name, $link );

	$result_newsletter = mysql_query( "SELECT email FROM ges_suscripnews WHERE EMAIL='$emailsubscription' " );
								
	if( $registro_email = @mysql_fetch_assoc($result_newsletter) ) 
	{
		echo "<h4>Este email ya est� registrado en la lista de distribuci�n.</h4>";
	}
	else
	{
		echo "<br><br><table width=90% align=center>";
		echo "<tr><td><img src='images/gesnvo_small.jpg'></td></tr>";
		
		if( isset($HTTP_POST_VARS["recomendado"]) ) 
		   echo "<tr><td class=Titulares>Gracias por recomendar a una persona nuestro bolet�n electr�nico !!<br><br></td></tr>";
		else
           echo "<tr><td class=Titulares>Gracias por suscribirse a nuestro bolet�n electr�nico !!<br><br></td></tr>";		
		   
		echo "<tr><td class=F>En breve recibir� un email autom�tico de confirmaci�n de la suscripci�n.</td></tr>";
		echo "<tr><td class=F>Revise su bandeja de correo no deseado o su filtro anti-spam para asegurar la recepci�n de nuestro bolet�n.</td></tr>";
		echo "</table>";

		$cur_date = getdate();
		
		$anio = $cur_date["year"];
		$mes = $cur_date["mon"];
		$dia = $cur_date["mday"];

		$fecha =  dateasmysql( $anio, $mes, $dia );

		if( mysql_query( "INSERT INTO ges_suscripnews (email, fecha, nombre, activo ) values ('$emailsubscription', '$fecha', '$nombrepersona', 1) " ) )
		{
			$email = $emailsubscription;
		
			$subj = "Grupo GES - Suscripci�n a Bolet�n Electr�nico"; 
			
			$header  = "Return-Path: root@me.com\r\n"; 
			$header .= "From: Grupo GES Newsletter <newsletter@grupoges.com.mx>\r\n"; 
			$header .= "Cc: jlopez@grupoges.com.mx\r\n";
			$header .= "Content-Type: text/html; charset=iso-8859-1;\r\n\r\n"; 
			
			$mesg = "<html><body style='font-family:arial,helvetica; font-size:12px; font-color: black; " .
					"background: url(http://www.grupoges.com.mx/images/logoFondoGES.jpg) no-repeat right top;' >";
			
			$mesg .= "<h3>Confirmaci�n de Suscripci�n a Bolet�n Electr�nico</h3>\r\n";
			
			$mesg .= ((isset($HTTP_POST_VARS["recomendado"])) ? " Por recomendaci�n de un amigo su": "Su") . " direcci�n de correo electr�nico <strong>$email</strong> ha sido inscrita en la lista de distribuci�n de nuestro bolet�n electr�nico (newsletter).<br><br>\r\n";
			$mesg .= "Muy pronto recibir� su primer ejemplar del bolet�n, en el cual tendr� acceso a diversos temas aplicables a Control Escolar GES tales como tutoriales, manuales, novedades, art�culos, etc.<br><br>\r\n";
	
			$mesg .= "Verifique su bandeja de correo no deseado y/o su filtro anti-spam para asegurar la recepci�n de nuestro bolet�n.<br><br>\r\n";
			$mesg .= "Atentamente.<br><br><br><br>\r\n";
			$mesg .= "Grupo GES Sistemas Avanzados<br>\r\n";
			$mesg .= "L�der nacional en software para gesti�n escolar<br>\r\n";		 
			
			$mesg .= "<HR>";
			$mesg .= "<DIV align=center><STRONG><A href='http://www.grupoges.com.mx' target=_blank>Vis&iacute;tenos en http://www.grupoges.com.mx</A></STRONG></DIV>\r\n";
			
			$mesg .= "</body></html>"; 
			
			if( mail( $email, $subj, $mesg, $header ) )
			{
				echo "<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Se ha enviado la notificaci�n al correo electr�nico $email.</h2><br><br>";
			}
		}
		else
		{
			echo "Ocurri� un error t�cnico que impide la suscripci�n en este momento.";
		}

	}
	
	@mysql_free_result( $result_newsletter );		

 ?>

</body>
</html>
