<?php
 session_start();

 include("funciones.php");

 $link = mysql_pconnect( $db_host, $db_user, $db_pass) or mysql_error();
 mysql_select_db( $db_name, $link );
 
 // VERIFICAR QUE NO ENTREN DOS INSTITUCIONES CON EL MISMO NOMBRE
 $query = "select * from ges_licencias where id_proyecto=1 and nombre_escuela='" . $_POST["nombre_escuela"] . "' and activada='N' ";

 $result = mysql_query( $query );
 
 if( $row = @mysql_fetch_assoc( $result ) )
 {
	die( "Está pendiente una solicitud de licencia para la misma organización. Haga 'clic' en la opción [Volver Atrás] para verificar sus datos." );
 }
  
 @mysql_free_result( $result );

    //<input type="hidden" name="recipient" value="jlopez@grupoges.com.mx">
//<!--    <input type="hidden" name="cc" value="etrujillo@grupoges.com.mx, susana@grupoges.com.mx">	 -->
 
 //$email = $_POST["recipient"];
 
 $email = "jlopez@grupoges.com.mx";
 
 $pais = "";
 
 if( isset($_POST["pais"]) )
	$pais = $_POST["pais"];

 // colocar elementos adicionales
 if( $pais == "México" )
 {
	// colocar elementos adicionales
    $cc = "etrujillo@grupoges.com.mx,susana@grupoges.com.mx,lpastrana@escolarhitech.com.mx";
 }
 else
 {
	$cc = "lpastrana@escolarhitech.com.mx";
 }
 
 //if( isset( $_POST["cc"] ) )
//   $cc = $_POST["cc"]; 
 
 $emailsender = $_POST["email_contacto"]; 
 $namesender  = $_POST["nombre_contacto"]; 
 
 $header = "Return-Path: root@me.com\r\n"; 
 $header .= "From: $namesender <$emailsender>\r\n"; 

 if( isset( $cc ) )
     $header .= "Cc: $cc\r\n"; 

 $header .= "Content-Type: text/html; charset=iso-8859-1;\r\n\r\n"; 

 $mesg = "<html><body style='font-family:verdana,arial,helvetica; font-size:12px; font-color: black; background: url(http://www.grupoges.com.mx/images/logoFondoGES.jpg) no-repeat right top;'>";

 $mesg .= "<h3>Control Escolar GES - Solicitud de Licencia Electrónica</h3>";

 $mesg .= "Institución que Solicita: " . $_POST["nombre_escuela"] . "<br>";
 
 $clave = "";
 $rfc   = "";
 $estado = "";
 
 if( isset($_POST["clave_escolar"]) )
 {
    $mesg .= "Clave Escolar: " . $_POST["clave_escolar"] . "<br>";
	$clave = $_POST["clave_escolar"];
 }

 if( isset($_POST["rfc_escolar"]) )
 {
    $mesg .= "RFC. Escolar: " . $_POST["rfc_escolar"] . "<br>"; 
	$rfc   = $_POST["rfc_escolar"];
 }

 $mesg .= "Dirección: " . $_POST["domicilio_escuela"] . "<br>";
 $mesg .= "C.P.: " . $_POST["cp_escuela"] . "<br>";
 $mesg .= "Municipio: " . $_POST["municipio_escuela"] . "<br>";
 $mesg .= "País: " . $pais . "<br>"; 
 
 if( $pais == "México" )
 {
	$mesg .= "Estado: " . $_POST["estado_escuela"];
 }
 else
 {
	$estado = "";
	
	if( isset($_POST["provincia"]) )
		$estado = strtoupper($_POST["provincia"]);

	$mesg .= "Provincia: " . $estado;
 }

 $mesg .= "<br>"; 
 
 $mesg .= "Telefonos: " . $_POST["telefono_escuela"] . "<br><br>";

 $mesg .= "<h3>Contacto que recibirá la licencia</h3>";
 $mesg .= "Persona para contacto: " . $_POST["nombre_contacto"] . "<br>";

 $cargo_contacto = "";
 $horario_contacto = "";

 if( isset( $_POST["cargo_contacto"] ) )
 {
    $mesg .= "Cargo del contacto: " . $_POST["cargo_contacto"] . "<br>";
	$cargo_contacto = $_POST["cargo_contacto"];
 }

 $mesg .= "Correo Electrónico del contacto: " . $_POST["email_contacto"] . "<br><br><br>";
 
 if( isset( $_POST["horario_contacto"] ) )
 {
     $mesg .= "   Horario para contactar: " . $_POST["horario_contacto"] . "<br>"; 
	 $horario_contacto = $_POST["horario_contacto"];
 }

  // PENDIENTE AGREGAR DIGITO VERIFICADOR 
  
  $confirm_code = codify_string( $_POST["nombre_escuela"] ) . "-" . codify_string( $_POST["domicilio_escuela"] ) .
              	 "-" . codify_string( $_POST["municipio_escuela"] ) . "-" . codify_string( $_POST["telefono_escuela"] ); 
				 
  $mesg .= "<br>";
  $mesg .= "CODIGO DE ACTIVACION: " . $confirm_code . "<br>"; 
 
 $mesg .= "</body></html>"; 

 if( mail ( $email, "Control Escolar GES - Solicitud de Licencia Electrónica", $mesg, $header ) )
 {
	 $fecha = current_dbdateandtime();

	 mysql_query( "INSERT INTO ges_licencias ( id_proyecto, licencia, id_escuela, nombre_escuela, clave_escolar, rfc_escolar, domicilio_escuela, cp_escuela, municipio_escuela, " .
	 			  "    estado_escuela, pais_escuela, telefono_escuela, nombre_contacto, cargo_contacto, email_contacto, horario_contacto, fecha_solicitud, activada, confirmacion ) " .
	 			  " VALUES ( 1, '', 1, '" . $_POST["nombre_escuela"] . "', '$clave', '$rfc', '" . $_POST["domicilio_escuela"] . "', '" . $_POST["cp_escuela"] . "', " .
				  "   '" . $_POST["municipio_escuela"] . "', '$estado', '$pais', '" . $_POST["telefono_escuela"] . "', '" . $_POST["nombre_contacto"] . "', " .
				  "   '$cargo_contacto', '" . $_POST["email_contacto"] . "', '$horario_contacto', '$fecha', 'N', '$confirm_code' ) " );
				  
	 $redirect = "http://www.grupoges.com.mx/gracias_licencia.htm";
	 
	 header( '302 Moved' );
     header ( "Location:$redirect" );
	 
	 // PENDIENTE enviarle email al cliente con su código de confirmación

 }
 else
 {
   die( "no se pudo completar el envío de su información..." );
 }

















 
 
 function codify_string( $str )
 {
	$code_string = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	
	$x = current_dbdateandtime();
	
	$str = trim( $str );
	
	$x = str_replace( ":", "0", $x );
	$x = str_replace( "/", "0", $x );

	$str = "$code_string$x$str$x$code_string";
	$str = str_replace( " ", "0", $str );
	$str = str_replace( "-", "9", $str );
	$str = str_replace( ".", "1", $str );

	$code = "";

	for($i=0; $i<5; $i++)
	{
		$y = rand(0,strlen($str)-1);
		
		$code .= $str[$y];
	}
	
	return strtoupper( $code );
 }

?>