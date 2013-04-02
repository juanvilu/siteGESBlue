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
		  <div style="width:95%; float: left">
		    <h5 align="center"><img src="images/banner_escolarges.jpg" alt="" width="800" height="180" /></h5>
	      </div>
		  <div style="width:95%; float: left">
		    <p><img src="img/enc_preguntas.jpg" alt="" width="500" height="40" /></p>
	        <table width="800" border="1" bordercolor="#FFFFFF">
              <tr>
                <td width="143"><div align="center"><span class="Estilo46"><span class="Estilo45"><a href="grupoges_faq.php">Aspectos Generales... </a></span></span></div></td>
                <td width="145"><div align="center"><span class="Estilo46"><span class="Estilo45"><a href="grupoges_faq_academico.php">Control Acad&eacute;mico...</a></span></span></div></td>
                <td width="157"><div align="center"><span class="Estilo46"><span class="Estilo45"><a href="grupoges_faq_cobranza.php">Control de Cobranza...</a></span></span></div></td>
                <td width="167" bgcolor="#999999"><div align="center"><span class="Estilo46"><span class="Estilo45"><a href="grupoges_faq_asistencia.php">Control de Asistencia...</a></span></span></div></td>
                <td width="154"><div align="center"><span class="Estilo46"><span class="Estilo45"><a href="grupoges_faq_tecnicas.php">Preguntas T&eacute;cnicas... </a></span></span></div></td>
              </tr>
            </table>
		  </div>
		  <p>&nbsp;</p>
		  <div class="Estilo10" style="width:95%; float: left"><br />
            <table border="0" width="97%">
              <tbody>
                <tr>
                  <td><table width="100%">
                      <tbody>
                        <tr>
                          <td valign="top" rowspan="2"> <strong><img src="img/question.png" alt="d" width="35" height="35" /></strong> </td>
                          <td><strong>Me controla la asistencia de profesores por d&iacute;a y por   clase?</strong></td>
                        </tr>
                        <tr>
                          <td>As&iacute; es, el sistema toma los datos de la carga acad&eacute;mica y con base en   eso controla la asistencia de los profesores por d&iacute;a y por cada clase que tenga   asignada.&nbsp;&nbsp;<br />
                              <br /></td>
                        </tr>
                      </tbody>
                  </table></td>
                </tr>
                <tr>
                  <td><table width="100%">
                      <tbody>
                        <tr>
                          <td valign="top" rowspan="2">  <strong><img src="img/question.png" alt="d" width="35" height="35" /></strong></td>
                          <td><strong>Como se registra la asistencia de los profesores?</strong></td>
                        </tr>
                        <tr>
                          <td>Se debe instalar una computadora en el punto de acceso, para que   funcione como m&oacute;dulo de registro de asistencia; en este equipo los profesores o   empleados registrar&aacute;n su asistencia a trav&eacute;s de los diversos medios disponibles   tales como: Tarjeta de Identificaci&oacute;n, Huella Dactilar, N&uacute;mero Personal (NIP),   etc.&nbsp;&nbsp;<br />
                              <br /></td>
                        </tr>
                      </tbody>
                  </table></td>
                </tr>
                <tr>
                  <td><table width="100%">
                      <tbody>
                        <tr>
                          <td valign="top" rowspan="2">  <strong><img src="img/question.png" alt="d" width="35" height="35" /></strong></td>
                          <td><strong>Cu&aacute;les lectores de huella dactilar pueden ser   utilizados?</strong></td>
                        </tr>
                        <tr>
                          <td>Control Escolar GES tiene soporte para los lectores m&aacute;s eficientes y   confiables del mercado; pueden utilizarse lectores de la l&iacute;nea Hamster y de la   marca APC.<br />
                              <br />
                            Estos lectores son f&aacute;ciles de encontrar en las principales   cadenas comerciales de art&iacute;culos de   oficina.&nbsp;&nbsp;<br />
                            <br /></td>
                        </tr>
                      </tbody>
                  </table></td>
                </tr>
                <tr>
                  <td><table width="100%">
                      <tbody>
                        <tr>
                          <td valign="top" rowspan="2">  <strong><img src="img/question.png" alt="d" width="35" height="35" /></strong></td>
                          <td><strong>Cu&aacute;ntos empleados o profesores puedo manejar con este m&oacute;dulo de Control   de Asistencia?</strong></td>
                        </tr>
                        <tr>
                          <td>A diferencia de otros productos en los cuales hay un l&iacute;mite en los   empleados, Control Escolar GES en su m&oacute;dulo de Control de Asistencia permite   trabajar con todos los Profesores y Empleados registrados sin ninguna   limitando.&nbsp;&nbsp;<br />
                              <br /></td>
                        </tr>
                      </tbody>
                  </table></td>
                </tr>
                <tr>
                  <td><table width="100%">
                      <tbody>
                        <tr>
                          <td valign="top" rowspan="2">  <strong><img src="img/question.png" alt="d" width="35" height="35" /></strong></td>
                          <td><strong>Es posible instalar varios puntos de acceso para registrar la   asistencia?</strong></td>
                        </tr>
                        <tr>
                          <td>As&iacute; es, se instalan tantas computadoras como sea necesario en sus   distintos puntos de acceso. Cada una deber&aacute; ir acompa&ntilde;ada con su propio lector   de huella dactilar.&nbsp;&nbsp;<br />
                              <br /></td>
                        </tr>
                      </tbody>
                  </table></td>
                </tr>
                <tr>
                  <td><table width="100%">
                      <tbody>
                        <tr>
                          <td valign="top" rowspan="2">  <strong><img src="img/question.png" alt="d" width="35" height="35" /></strong></td>
                          <td><strong>Se generan informes de asistencia, retardos y   puntualidad?</strong></td>
                        </tr>
                        <tr>
                          <td>SI. Con base en los horarios registrados de sus profesores y empleados,   Control Escolar GES le permitir&aacute; obtener de forma autom&aacute;tica diversos reportes y   gr&aacute;ficas de asistencia.&nbsp;&nbsp;<br />
                              <br /></td>
                        </tr>
                      </tbody>
                  </table></td>
                </tr>
                <tr>
                  <td><table width="100%">
                      <tbody>
                        <tr>
                          <td valign="top" rowspan="2">  <strong><img src="img/question.png" alt="d" width="35" height="35" /></strong></td>
                          <td><strong>Cu&aacute;l es la mejor forma de evitar que los empleados hagan fraude al   registrar la asistencia de otros compa&ntilde;eros?</strong></td>
                        </tr>
                        <tr>
                          <td>La forma m&aacute;s confiable es utilizando un Lector Biom&eacute;trico de Huella   dactilar, te&oacute;ricamente el trazado de una huella dactilar es &uacute;nico para cada dedo   y para cada individuo. <br />
                              <br />
                            Control Escolar GES permitie el uso de lectores   Hamster/NITGEN y tambi&eacute;n de la marca APC que Usted podr&aacute; adquirir en cadenas   comerciales de art&iacute;culos de   oficina.&nbsp;&nbsp;<br />
                            <br /></td>
                        </tr>
                      </tbody>
                  </table></td>
                </tr>
                <tr>
                  <td><table width="100%">
                      <tbody>
                        <tr>
                          <td valign="top" rowspan="2">  <strong><img src="img/question.png" alt="d" width="35" height="35" /></strong></td>
                          <td><strong>Es posible colocar permisos, vacaciones o   incapacidades?</strong></td>
                        </tr>
                        <tr>
                          <td>As&iacute; es, mediante el registro de excepciones Usted podr&aacute; informar al   sistema cuando se presentan eventos que impidan el registro ordinario en la   estad&iacute;stica de asistencia de un   empleado.&nbsp;&nbsp;<br />
                              <br /></td>
                        </tr>
                      </tbody>
                  </table></td>
                </tr>
                <tr>
                  <td><table width="100%">
                      <tbody>
                        <tr>
                          <td valign="top" rowspan="2">  <strong><img src="img/question.png" alt="d" width="35" height="35" /></strong></td>
                          <td><strong>C&oacute;mo se evita que los empleados hagan fraude modificando la fecha y hora   de la computadora donde registran la asistencia?</strong></td>
                        </tr>
                        <tr>
                          <td>Para evitar este tipo de fraudes, la fecha y hora se toma del servidor   de base de datos; de esta forma se mantiene una sincronizaci&oacute;n con ese servidor,   aun cuando la fecha y hora de la computadora de registro de asistencia sea   alterada.&nbsp;&nbsp;<br />
                              <br /></td>
                        </tr>
                      </tbody>
                  </table></td>
                </tr>
                <tr>
                  <td><table width="100%">
                      <tbody>
                        <tr>
                          <td valign="top" rowspan="2">  <strong><img src="img/question.png" alt="d" width="35" height="35" /></strong></td>
                          <td><strong>Porqu&eacute; es necesario que haya una computadora en el lugar de acceso, en   lugar de tener solamente el lector de huella?</strong></td>
                        </tr>
                        <tr>
                          <td>Entre otras cosas, porque el profesor o empleado, puede visualizar en la   pantalla de la computadora avisos, su estad&iacute;stica de puntualidad, mensajes de   error y otra informaci&oacute;n importante.&nbsp;&nbsp;<br /></td>
                        </tr>
                      </tbody>
                  </table></td>
                </tr>
              </tbody>
            </table>
		    <table width="200" border="0" align="center">
              <tr>
                <td><div align="center"><span class="Estilo43"><a href="grupoges_escolarges.php"><img src="img/link_back.png" alt="a " width="20" height="20" border="0" />...P&aacute;gina Inicial</a><a href="grupoges_escolarges.php"> </a></span></div></td>
              </tr>
            </table>
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

