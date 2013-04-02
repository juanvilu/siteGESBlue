<?php
  session_start();

  include("funciones.php");   
  
  $institucion = "";
  $licencia = "";
  $errormsg	= "";
  
  if( isset($HTTP_POST_VARS["institucion"]) )
  	$institucion = $HTTP_POST_VARS["institucion"];
  else
  {
	 header( '302 Moved' );
	 header ( "Location:http://www.grupoges.com.mx" );
  } 
	
  if( isset($HTTP_POST_VARS["licencia"]) )
  	$licencia = $HTTP_POST_VARS["licencia"];	
	
  if( isset($HTTP_POST_VARS["errormsg"]) )
  	$errormsg = $HTTP_POST_VARS["errormsg"];
	
  if( isset($HTTP_POST_VARS["enviarreporte"]) )
  {
	 $email = "soporte_tecnico@grupoges.com.mx";
	 $subj  = $HTTP_POST_VARS["subject"]; 
	
	 $cc = ""; // $HTTP_POST_VARS["cc"]; 
	 $emailsender = $HTTP_POST_VARS["email"]; 
	 $namesender  = $HTTP_POST_VARS["contacto"]; 
	
	 $redirect    = $HTTP_POST_VARS["redirect"]; 
	 
	 //$cc = "soporte_tecnico@grupoges.com.mx";
	  
	 $header = "Return-Path: root@me.com\r\n"; 
	 $header .= "From: $namesender <$emailsender>\r\n"; 
	 //$header .= "Cc: $cc\r\n"; 
	 $header .= "Content-Type: text/html; charset=iso-8859-1;\r\n\r\n"; 
	
	 $mesg = "<html><body>";
	
	 $mesg .= "<h3>Control Escolar GES - Reporte de Error</h3><br>";
	
	 $mesg .= "Institución que reporta el error: " . $HTTP_POST_VARS["institucion"] . "<br>";
	 $mesg .= "Licencia: " . $HTTP_POST_VARS["licencia"] . "<br><br>";	 
	 $mesg .= "Persona para contacto: " . $HTTP_POST_VARS["contacto"] . "<br>";
	 $mesg .= "Cargo del contacto: " . $HTTP_POST_VARS["contacto_cargo"] . "<br>";
	 $mesg .= "Correo Electrónico del contacto: " . $HTTP_POST_VARS["email"] . "<br><br>";
	 
	 $mesg .= "Error técnico:<br>" . $HTTP_POST_VARS["error_tecnico"] . "<br><br>";

	 $mesg .= "Opción en donde aparece el error: " . $HTTP_POST_VARS["opcion"] . "<br><br>";  
	 $mesg .= "Descripción Completa: " . $HTTP_POST_VARS["descripcion_error"] . "<br><br>";  
	 
	 $mesg .= "Importancia del error: " . $HTTP_POST_VARS["importancia"] . "<br><br>";  
	 
	 $mesg .= "Este es un mensaje generado automáticamente al reportar un error. No responda a él";
	
	 $mesg .= "</body></html>"; 
	
	 if( mail ( $email, $subj, $mesg, $header ) )
	 {
		 header( '302 Moved' );
		 header ( "Location:$redirect" );
	 }
	 else
	 {
	   die( "no se pudo completar el envío de su información..." );
	 }
  }
  
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sp" lang="sp">
<head>

<meta http-equiv="Content-Type" content="text/html; CHARSET=iso-8859-1" />
    <meta NAME="keywords" CONTENT="control escolar, sistema de control escolar, control academico, desarrollo de software, colegios, instituciones educativas">
	<title>Grupo GES Sistemas Avanzados</title>

	<style media="all" type="text/css">	
	@import "menu_style.css";
	
    a:link {	color: #000033; font-weight:bold;}
    a:visited {	color: #000033; font-weight:bold;}
    </style>
	
 <script language="Javascript">

		function validardatos() 
		{
           var error = 0;
		   	   	   
		   if( error == 0 )
		   {
				if ( (errores.contacto.value == "") || (errores.contacto_cargo.value == "")  )  {
				   error = 1;
				   errores.contacto.focus();
				   alert (' Debe introducir el nombre y cargo de la persona que solicita informes'); 	}
		   }
		   
		   if( error == 0 )
		   {
				if (errores.email.value == "")  {
				   error = 1;
				   errores.email.focus();
				   alert ('Es indispensable el correo electrónico de la persona que solicita informes para establecer comunicación'); 	}
		   }			
			
		   if( error == 0 )
		   {
				if (errores.opcion.value == "")
				{
				   error = 1;
				   alert ('Indique la opción en donde se está presentando el error.'); 	
				   errores.opcion.focus();
				}
		   }
		   
		   if( error == 0 )
		   {
				if ( errores.descripcion_error.value == "")  
				{
				   error = 1;
				   errores.descripcion_error.focus();
				   alert ('Indique el informe detallado para reproducir el error.'); 
				}
		   }		   

		   	if( error == 0 )
		   	{
 		       document.errores.method = "POST";
			   document.errores.submit();
			}
		
		}
		
</script>
    
	
</head>
<body class="body">

<?php
  include "template_header.php";  // wrapper1
?>

  <div class="wrapper">

	<?php
		$menu = 1;
		
		include "template_menu.php";
	?>
    
    <form name="errores" action="grupoges_reporteerrorform.php" method="POST">

    
    <input type="hidden" name="redirect" value="http://www.grupoges.com.mx/gracias_reporteerror.htm">
    <input type="hidden" name="subject" value="Control Escolar GES - Reporte de Error">
    <input type=hidden name="reporte_error" value="REMOTE_HOST,REMOTE_ADDR,HTTP_USER_AGENT">
	<input type=hidden name="enviarreporte" value="SI">
	<input type=hidden name="institucion" value="<?php echo $institucion;?>">
	<input type=hidden name="licencia" value="<?php echo $licencia;?>">
	<div class="content">
    
  <div style="width:30%; float: left">
		    <h5 align="center"><img src="images/banner_error.jpg" alt="banner_solicitudinformes" title="SolicitudInformes" width="800" height="180" /></h5>
      </div>
		 
	  <div style="width:99%; float: left">
	    <div class="info_frame" id="datos_identificacion">
	      <p class="Estilo43"><img src="img/enc_usuario.jpg" alt="" width="550" height="40" /></p>
	      <table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#D1E9F3" bgcolor="#D1E9F3" class="F">
            <tr>
              <td colspan="3"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tr> </tr>
              </table></td>
            <tr>
              <td width="2%" class="F">&nbsp;</td>
              <td width="18%" class="F">&nbsp;</td>
              <td width="77%" class="F">&nbsp;</td>
            </tr>
            <tr>
              <td class="F">&nbsp;</td>
              <td class="F"><div align="left"><strong>Nombre de la Instituci&oacute;n</strong></div></td>
              <td class="F"><strong><?php echo $institucion;?></strong></td>
            </tr>
            <tr>
              <td height="23" class="F">&nbsp;</td>
              <td class="F"><div align="left">Persona que reporta el Error</div></td>
              <td><input name="contacto" type="text" id="contacto" size="40" /></td>
            </tr>
            <tr>
              <td class="F">&nbsp;</td>
              <td class="F"><div align="left">Cargo en la instituci&oacute;n</div></td>
              <td><input name="contacto_cargo" type="text" id="contacto_cargo" size="40" /></td>
            </tr>
            <tr>
              <td class="F">&nbsp;</td>
              <td class="F"><div align="left">Correo electr&oacute;nico</div></td>
              <td><input type="text" size="50" name="email" /></td>
              <td width="1%" class="F"></td>
              <td width="1%" class="F"></td>
            </tr>
            <tr>
              <td class="F">&nbsp;</td>
              <td class="F">&nbsp;</td>
              <td>&nbsp;</td>
              <td class="F"></td>
              <td class="F"></td>
            </tr>
            <tr>
              <td colspan="5" bgcolor="#FFFFFF" class="F">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="5" bgcolor="#FFFFFF" class="F"><p class="Estilo43"><img src="img/enc_erroro.jpg" alt="" width="550" height="40" /></p>              </td>
            </tr>
            
            <tr>
              <td colspan="3"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                  
              </table></td>
            </tr>
            
            <tr>
              <td valign="top" class="F">&nbsp;</td>
              <td valign="top" class="F">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td valign="top" class="F">&nbsp;</td>
              <td valign="top" class="F"><p><strong>Error T&eacute;cnico</strong></p></td>
              <td><textarea name="error_tecnico" cols="60" rows="4" id="error_tecnico" readonly="readonly"><?php echo $errormsg;?></textarea></td>
            </tr>
            
            <tr>
              <td valign="top" class="F">&nbsp;</td>
              <td valign="top" class="F">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td valign="top" class="F">&nbsp;</td>
              <td valign="top" class="F"><strong>Lugar donde Aparece el Error</strong></td>
              <td><input name="opcion" type="text" id="opcion" value="" size="80" /></td>
            </tr>
            <tr>
              <td valign="top" class="F">&nbsp;</td>
              <td valign="top" class="F">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            
            <tr>
              <td valign="top" class="F">&nbsp;</td>
              <td valign="top" class="F"><strong>Descripci&oacute;n del Error</strong><br />
(Nota: Por favor explique claramente la forma en que se presenta 
              el error y los pasos para reproducirlo. </td>
              <td><textarea name="descripcion_error" cols="60" rows="10" id="descripcion_error"></textarea></td>
            </tr>
            
            <tr>
              <td valign="middle" class="F">&nbsp;</td>
              <td valign="middle" class="F"><em><strong>Importacia</strong></em></td>
              <td><table border="0" cellpadding="0">
                  <tr>
                    <td class="F"><input type="radio" name="importancia" value="NOURGE" style="border:0" />
                      No Urgente&nbsp;&nbsp;</td>
                    <td class="F"><input name="importancia" type="radio" style="border:0" value="NORMAL" checked="checked" />
                      Normal&nbsp;&nbsp;</td>
                    <td class="F"><input type="radio" name="importancia" value="URGENTE" style="border:0" />
                      Urgente&nbsp;&nbsp;</td>
                  </tr>
                  
              </table></td>
            </tr>
            <tr>
              <td valign="middle" class="F">&nbsp;</td>
              <td valign="middle" class="F">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
          
	      <table width="111" border="0" align="center">
            <tr>
              <td width="101"><span class="Estilo43">
              <input type="button" value="Enviar Reporte" onclick="validardatos();" />
              </span></td>
            </tr>
          </table>
	      </div>
	    <br />
	  </div>
	  <div class="Estilo10" style="width:99%; float:left">
	    <div align="center" class="Estilo43"><em> <img src="img/link_back.png" alt="k" width="20" height="20" /></em><a href="grupoges_main.php">...P&aacute;gina Inicial</a></div>
    </div>
</div>
<div class="content-bottom"></div>
    <div style="width:100%; float:left; background-image:url(images/copyright.png); background-repeat:no-repeat">
      <table width="757" height="43" border="0" align="center">
        <tr>
          <td width="343"><div align="right"><span class="Estilo10"><strong>Grupo GES Sistemas Avanzados </strong>&copy; 2010 | </span> </div></td>
          <td width="157"><div align="center" class="Estilo32"><a href="grupoges_quienessomos.php">Informaci&oacute;n para Contacto</a></div></td>
          <td width="243"><span class="Estilo9"><span class="Estilo10">|</span></span><span class="Estilo32"><a href="grupoges_informes.php"> Solicitar Informes</a></span></td>
        </tr>
      </table>
      <p class="Estilo9">&nbsp;</p>
    </div>
    <span class="Estilo30"></span>
    </form>
</body>
</html>

