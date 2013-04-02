<?php
  session_start();

  include("config.inc.php");
  
  $grupoges = 0;

  if( isset($_GET["grupoges"]) )
     $grupoges = $_GET["grupoges"];
	 
  $empresa = "Escolar Hi-TECH";
  
  if( $grupoges == 1 )
      $empresa = "Grupo GES";
	  
  $id_evento = 0;  
  
/*  
  
  if( isset($_GET["id_evento"]) )
     $id_evento = $_GET["id_evento"];
	 
  $descripciontema = "";
  $fecha = "";
  $hora  = "";
    
  $db_host = "www.grupoges.com.mx";
  $db_user = "geswww";      // "root"
  $db_pass = "escolarges";  // ""
  $db_name = "ges";         // "escolar"

  $link = mysql_connect( $db_host, $db_user, $db_pass) or mysql_error();
  mysql_select_db( $db_name, $link );

  $qryres = mysql_query( "SELECT DAYOFWEEK(fechayhora) as dow, MONTH(fechayhora) as m, YEAR(fechayhora) as y, DAYOFMONTH(fechayhora) as day, TIME_FORMAT(fechayhora, '%h:%i %p') as t, a.*, b.descripciontema, b.duracion  " .
						 " FROM ges_demosagenda a " . 
						 "  LEFT JOIN ges_demostemas b ON (b.id_tema=a.id_tema) " .
						 "WHERE id_evento=$id_evento " );	
						 
 if( $row = @mysql_fetch_assoc( $qryres ) )
 {
 	  $descripciontema = $row["descripciontema"];
	
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
	*/
	
 $descripciontema = "<select name=tema id=tema>";
 $descripciontema .= "<option value='escolarges'>Introducción a Control Escolar GES </option>";
 $descripciontema .= "<option value='modulo_academico'>Control Escolar GES - Control Académico y Generalidades.</option>";
 $descripciontema .= "<option value='modulo_cobranza'>Control Escolar GES - Control de Cobranza/Facturación y Generalidades.</option>";
 $descripciontema .= "<option value='modulo_cobranza'>Control Escolar GES - Control de Cobranza/Facturación y Generalidades.</option>";
 $descripciontema .= "<option value='reloj_checador'>Módulo de Control de Asistencia (Reloj Checador).</option>";  
 $descripciontema .= "<option value='examenes'>Módulo de Manejo de Exámenes.</option>";  
 $descripciontema .= "<option value='examenes'>Control Escolar GES para Internet (Portal WEB Institucional)</option>";  
 $descripciontema .= "</select>";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sp" lang="sp">
<head>
	<meta http-equiv="Content-Type" content="text/html; CHARSET=iso-8859-1" />
	<title>Grupo GES Sistemas Avanzados</title>

	<style media="all" type="text/css">
	@import "menu_style.css";
    a:link {	color: #000033; font-weight:bold;}
    a:visited {	color: #000033; font-weight:bold;}
    </style>
	
 <script type="text/javascript" src="niftycube.js"></script>

	<script type="text/javascript">
	
		window.onload=function()
		{
		   Nifty("div#datos_identificacion","small");
		   Nifty("ul.postnav a","transparent");
		}
	
		function validardatos() 
		{
           var error = 0;
		   	   
		   if ( informes.empresa.value == ""  ) 
		   {
		      error = 1;
			  informes.empresa.focus();
			  alert (' Debe introducir el nombre de la organización o empresa');
		   } 
		   
		   if( error == 0 )
		   {
				if ( informes.nombre.value == "" )  
				{
				   error = 1;
				   informes.nombre.focus();
				   alert (' Debe introducir el nombre de la persona que desea suscribirse'); 	
				}
		   }
		   
		   if( error == 0 )
		   {
				if ( informes.cargo.value == "" )  
				{
				   error = 1;
				   informes.cargo.focus();
				   alert (' Debe introducir el cargo de la persona que presenciará la demo');
				}
		   }

		   if( error == 0 )
		   {
				if (informes.email.value == "")  
				{
				   error = 1;
				   informes.email.focus();
				   alert ('Es indispensable el correo electrónico de la persona que solicita informes para establecer comunicación'); 	
				}
		   }
		   
		   if( error == 0 )
		   {
				if (informes.email_confirma.value == "")  
				{
				   error = 1;
				   informes.email_confirma.focus();
				   alert ('Deberá confirmar la dirección de correo electrónico de la persona que solicita informes.'); 	
				}
				else
				{
					if(informes.email.value != informes.email_confirma.value )
					{
					   error = 1;
					   informes.email_confirma.focus();
					   alert ('La dirección de correo electrónico no coincide.'); 						
					}
				}
		   }
		   
		   if( error == 0 )
		   {
				if (informes.direccion.value == "")  
				{
				   error = 1;
				   informes.direccion.focus();
				   alert ('Indique su dirección.');
				}
		   }		   
		   
		   if( error == 0 )
		   {
				if (informes.ciudad.value == "")  
				{
				   error = 1;
				   informes.ciudad.focus();
				   alert ('Indique la ciudad/población desde donde nos está contactando.'); 	
				}
		   }		   
		   
		   if( error == 0 )
		   {
				if (informes.estado.value == "")  
				{
				   error = 1;
				   informes.estado.focus();
				   alert ('Indique el estado/provincia o departamento desde donde nos está contactando.'); 	
				}
		   }		   
		   
		   if( error == 0 )
		   {
				if (informes.pais.value == "")  
				{
				   error = 1;
				   informes.pais.focus();
				   alert ('Indique el pais desde donde nos está contactando.'); 	
				}
		   }		   
		   
		   if( error == 0 )
		   {
				if (informes.telefono.value == "")  
				{
				   error = 1;
				   informes.telefono.focus();
				   alert ('Es indispensable el número teléfonico para establecer comunicación con Usted'); 	
				}
		   }		   

		   if( error == 0 )
		   {
		   		if( !informes.deseoinscribirme.checked )
				{
					error = 1;
					alert ('Para enviar su solicitud es necesario que marque la casilla de petición para concretar su inscripción.'); 	
				}
		   }			
			
		   if( error == 0 )
		   {
 		       document.informes.submit();
		   } 
		}
		
	</script>
	<script type="text/javascript" src="javascript/jqueryFancybox134/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="javascript/jqueryFancybox134/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="javascript/jqueryFancybox134/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <link rel="stylesheet" type="text/css" href="javascript/jqueryFancybox134/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
    <script language='javascript'>		
        function goLink( link ){
        	document.location.href = link;
        }
        $(document).ready(function(){
            $("#lnkPoliticaPrivacidad").fancybox({                    
                'autoDimensions': true
            });    
        });	 
	</script>
</head>
<body class="body">

<?php
  include "template_header.php";  // wrapper1
?>

  <div class="wrapper">

	<?php
		$menu = 2;
		
		include "template_menu.php";
	?>
		<div class="content">
		  <div style="width:99%; float: left">
		    <h5 align="center"><img src="images/banner_inscripciondemo.jpg" alt="" width="800" height="180" /></h5>
	      </div>
		  <div style="width:97%; float: left"><img src="img/enc_demo_2.jpg" alt="" width="500" height="40" /></div>
		  <p>&nbsp;</p>
		  <div style="width:99%; float: left">
          <form name="informes" action="grupoges_enviarsoldemo.php" method="GET" enctype="text/plain" style="display:inline;">
            <input type="hidden" name="redirect" value="gracias_sce.htm"/>
        	<input type="hidden" name="id_evento" value="<?php echo $id_evento;?>"/>
        	<input type="hidden" name="grupoges" value="<?php echo $grupoges;?>"/>    <br />
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="black" bgcolor="#D9ECFA">
              <tr>
                <td width="70%" align="right" class="FROW">&nbsp;</td>
                <td class="FROW">&nbsp;</td>
              </tr>

              <tr>
                <td width="70%" align="right" class="FROW">Tema de su Inter&eacute;s: </td>
                
                <td width="30%" class="FROW" valign="top"><?php echo $descripciontema; ?></td>
              </tr>
              <tr>
                <td width="70%" align="right" class="FROW">Nombre de la Organizaci&oacute;n 
                  o Instituci&oacute;n *</td>
                <td class="FROW"><input type="text" size="50" name="empresa" /></td>
              </tr>
              <tr>
                <td width="70%" align="right" class="FROW">Nombre de la Persona que participar&aacute; 
                  * </td>
                <td class="FROW"><input name="nombre" type="text" id="nombre" size="40" /></td>
              </tr>
              <tr>
                <td width="70%" align="right" class="FROW">Cargo o Posici&oacute;n de la Persona * </td>
                <td class="FROW"><input name="cargo" type="text" id="cargo" size="40" /></td>
              </tr>
              <tr>
                <td width="70%" align="right" class="FROW">Correo electr&oacute;nico *</td>
                <td class="FROW"><input type="text" size="50" name="email" /></td>
              </tr>
              <tr>
                <td width="70%" align="right" class="FROW">Confirme Correo electr&oacute;nico  *</td>
                <td class="FROW"><input type="text" size="50" name="email_confirma" /></td>
              </tr>
              <tr>
                <td width="70%" align="right" class="FROW">Direcci&oacute;n (Calle y n&uacute;mero) *</td>
                <td class="FROW"><input name="direccion" type="text" id="direccion" size="60" maxlength="60" />
                </td>
              </tr>
              <tr>
                <td width="70%" align="right" class="FROW">Ciudad o Poblaci&oacute;n *</td>
                <td class="FROW"><input name="ciudad" type="text" id="ciudad" size="35" maxlength="60" /></td>
              </tr>
              <tr>
                <td width="70%" align="right" class="FROW">Estado, Provincia o Departamento *</td>
                <td class="FROW"><input type="text" size="35" maxlength="60" name="estado" /></td>
              </tr>
              <tr>
                <td width="70%" align="right" class="FROW">P&aacute;is *</td>
                <td class="FROW"><input type="text" size="20" maxlength="30" name="pais" /></td>
              </tr>
              <tr>
                <td width="70%" align="right" class="FROW">Tel&eacute;fono (incluya clave o c&oacute;digo 
                  de &aacute;rea) *</td>
                <td class="FROW"><input type="text" size="35" maxlength="60" name="telefono" /></td>
              </tr>
              <tr>
                <td width="70%" align="right" class="FROW">Horario para llamadas telef&oacute;nicas </td>
              <td class="FROW"> De:&nbsp;
                    <input type="text" size="10" maxlength="10" name="desde" />
                  &nbsp;a:&nbsp;
                  <input type="text" size="10" maxlength="10" name="hasta" /></td>
              </tr>
              <tr>
                <td align="right" class="FROW">Comentarios</td>
                <td class="FROW"><textarea name="comentarios" cols="65" rows="6" id="comentarios"></textarea></td>
              </tr>
              <tr>
                <td width="40%" align="right" class="FROW">&nbsp;</td>
                <td class="FROW"><input type="checkbox" name="siendoatendido" style="border:0px;" />
                  &nbsp;Estoy siendo atendido por un asesor de ventas de <?php echo $empresa;?></td>
              </tr>
              <tr>
                <td width="40%" align="right" class="FROW">&nbsp;</td>
                <td class="FROW"><input type="checkbox" name="deseoinscribirme" style="border:0px;" />
                  &nbsp;<strong>* S&iacute;, Deseo inscribirme y participar en la demo 
                    en l&iacute;nea.</strong></td>
              </tr>
              <tr>
                <td width="40%" align="right" class="FROW">&nbsp;</td>
                <td class="FROW">&nbsp;</td>
              </tr>

            </table>
            <table width="21%" border="0" align="center">
              <tr>
                <td width="47%" align="right" bgcolor="#CAED8F"><div align="center"><a href="javascript:validardatos()">Enviar Solicitud</a></div></td>
              </tr>
            </table>
            <p class="Estilo10">&nbsp;</p>
		    <table width="200" border="0" align="center">
              <tr>
                <td><div align="center" class="Estilo43"><em> <img src="img/link_back.png" alt="" width="20" height="20" /></em><a href="grupoges_escolarges.php">...P&aacute;gina Inicial</a></div></td>
              </tr>
            </table>
	      </form>
          </div>
    </div>
		<div class="content-bottom"></div>
    <div style="width:100%; float:left; background-image:url(images/copyright.png); background-repeat:no-repeat">
      <!--<table width="757" height="43" border="0" align="center">
        <tr>
          <td width="343"><div align="right"><span class="Estilo10"><strong>Grupo GES Sistemas Avanzados </strong>&copy; 2010 | </span> </div></td>
          <td width="157"><div align="center" class="Estilo32"><a href="grupoges_quienessomos.php">Informaci&oacute;n para Contacto</a></div></td>
          <td width="243"><span class="Estilo9"><span class="Estilo10">|</span></span><span class="Estilo32"> <a href="grupoges_informes.php">Solicitar Informes</a></span></td>
        </tr>
      </table>
      <p class="Estilo9">&nbsp;</p>-->
      <?php
            include "template_foo.php";
          ?>
    </div>
  </div>
</div>
</body>
</html>

