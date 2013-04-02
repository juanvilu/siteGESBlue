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
		    <h5 align="center"><img src="images/banner_escolarges.jpg" alt="banner_escolarges" title="banner EscolarGes" width="800" height="180" /></h5>
	      </div>
		  <div style="width:95%; float: left">
		    <p><img src="img/enc_preguntas.jpg" alt="" width="500" height="40" /></p>
		    <table width="800" border="1" bordercolor="#FFFFFF">
              <tr>
                <td width="143" bgcolor="#CCCCCC"><div align="center"><span class="Estilo43"><span class="Estilo45"><a href="grupoges_faq.php">Aspectos Generales... </a></span></span></div></td>
                <td width="145"><div align="center"><span class="Estilo43"><span class="Estilo45"><a href="grupoges_faq_academico.php">Control Acad&eacute;mico...</a></span><a href="grupoges_faq_academico.php"></a></span></div></td>
                <td width="157"><div align="center"><span class="Estilo43"><span class="Estilo45"><a href="grupoges_faq_cobranza.php">Control de Cobranza...</a></span><a href="grupoges_faq_cobranza.php"></a></span></div></td>
                <td width="167"><div align="center"><span class="Estilo43"><span class="Estilo45"><a href="grupoges_faq_asistencia.php">Control de Asistencia...</a></span><a href="grupoges_faq_asistencia.php"></a></span></div></td>
                <td width="154"><div align="center"><span class="Estilo43"><span class="Estilo45"><a href="grupoges_faq_tecnicas.php">Preguntas T&eacute;cnicas... </a></span></span></div></td>
              </tr>
            </table>
		    <p class="Estilo43">&nbsp;</p>
		  </div>
		  <p>&nbsp;</p>
		  <div class="Estilo10" style="width:95%; float: left">
		    <table cellspacing="0" cellpadding="0">
              <tr>
                <td><table width="100%">
                    <tbody>
                      <tr>
                        <td valign="top" rowspan="2"><strong><img src="img/question.png" alt="d" width="35" height="35" /></strong></td>
                        <td class="Estilo10"><strong>¿Existe algún límite en el número de alumnos que puedo   registrar?</strong></td>
                      </tr>
                      <tr>
                        <td class="Estilo10">La respuesta es NO, Control Escolar GES no l&iacute;mita el crecimiento de su   instituci&oacute;n, por tanto el n&uacute;mero de alumnos est&aacute; limitado solamente a la   capacidad del equipo de c&oacute;mputo en el cual est&eacute; instalado.   &nbsp;&nbsp;<br />
                        <br />
                        </td>
                      </tr>
                    </tbody>
                </table></td>
              </tr>
              <tr>
                <td><table width="100%">
                    <tbody>
                      <tr>
                        <td rowspan="2" valign="top" class="Estilo10"> <strong><img src="img/question.png" alt="s" width="35" height="35" /></strong> </td>
                        <td class="Estilo10"><strong>¿Qué formato de gráficos soporta Control Escolar GES, para almacenamiento   de fotografías o logotipos?</strong></td>
                      </tr>
                      <tr>
                        <td class="Estilo10">Nuestro sistema, permite la utilizaci&oacute;n de los formatos m&aacute;s utilizados:   BMP (formato est&aacute;ndar de Windows) o bien JPEG (formato est&aacute;ndar de Internet).   Sin embargo, recomendamos ampliamente la utilizaci&oacute;n del formato JPEG (o JPG),   porque permite una compresi&oacute;n mayor y el tama&ntilde;o de la base de datos crecer&aacute; m&aacute;s   lentamente. Para dejar m&aacute;s claro este punto, una fotograf&iacute;a en formato BMP podr&aacute;   tener un tama&ntilde;o de 128Kb, mientras que la misma fotograf&iacute;a en formato JPEG podr&aacute;   tener un tama&ntilde;o de 17KB.&nbsp;&nbsp;<br />
                        <br />
                        </td>
                      </tr>
                    </tbody>
                </table></td>
              </tr>
              <tr>
                <td><table width="100%">
                    <tbody>
                      <tr>
                        <td rowspan="2" valign="top" class="Estilo10"> <strong><img src="img/question.png" alt="" width="35" height="35" /></strong> </td>
                        <td class="Estilo10"><strong>¿Estarán configurados los formatos que yo utilizo en mi   institución?</strong></td>
                      </tr>
                      <tr>
                        <td class="Estilo10">Es probable que no, sobre todo si se tratan de formatos dise&ntilde;ados   exclusivamente para su instituci&oacute;n, por su personal administrativo. Sin embargo,   esto no es un impedimento, ya que Control Escolar GES permite personalizar los   formatos existentes e incluso puede dise&ntilde;ar sus propios formatos alejados de los   est&aacute;ndares que nosotros manejamos. Durante la etapa de implantaci&oacute;n, Usted puede   pedir a nuestro distribuidor o asesor de servicio que le gui&eacute; en la   configuraci&oacute;n de los formatos que necesita para su instituci&oacute;n. (* nota: esta   asistencia es solo a manera de tutor&iacute;a o asesor&iacute;a   *).&nbsp;&nbsp;<br />
                        <br />
                        </td>
                      </tr>
                    </tbody>
                </table></td>
              </tr>
              <tr>
                <td><table width="100%">
                    <tbody>
                      <tr>
                        <td rowspan="2" valign="top" class="Estilo10"><strong><img src="img/question.png" alt="" width="35" height="35" /></strong>  </td>
                        <td class="Estilo10"><strong>¿Porqué no me permite modificar los datos de mi institución (nombre,   domicilio, etc.)?</strong></td>
                      </tr>
                      <tr>
                        <td class="Estilo10">Seguramente se debe a que el sistema fue configurado de f&aacute;brica, es   decir, los datos de su instituci&oacute;n fueron registrados desde el momento en que se   grab&oacute; f&iacute;sicamente el CD de distribuci&oacute;n. Estos datos est&aacute;n deshabilitados como   mecanismo de protecci&oacute;n contra la pirater&iacute;a, si desea alguna modificaci&oacute;n   solic&iacute;tela a su distribuidor &eacute;l con gusto se la realizar&aacute;.   &nbsp;&nbsp;<br />
                        <br />
                        </td>
                      </tr>
                    </tbody>
                </table></td>
              </tr>
              <tr>
                <td><table width="100%">
                    <tbody>
                      <tr>
                        <td rowspan="2" valign="top" class="Estilo10"><strong><img src="img/question.png" alt="" width="35" height="35" /></strong>  </td>
                        <td class="Estilo10"><strong>¿Se conservarán los datos históricos de los alumnos al término de cada   ciclo escolar?</strong></td>
                      </tr>
                      <tr>
                        <td class="Estilo10">Definitivamente SI. Control Escolar GES, posee una estrategia de   almacenamiento de informaci&oacute;n que le permitir&aacute; trabajar con el ciclo escolar   actual, y tener acceso a todos los ciclos escolares anteriores que haya   trabajado.&nbsp;Es decir, Usted podr&aacute; cambiar a ciclos escolares anteriores y podr&aacute;   ver la situaci&oacute;n completa de esos ciclos, como si realmente estuviera en ellos,   esto incluye grupos, horarios, asignaci&oacute;n de profesores, etc.   &nbsp;&nbsp;<br />
                        <br />
                        </td>
                      </tr>
                    </tbody>
                </table></td>
              </tr>
              <tr>
                <td><table width="100%">
                    <tbody>
                      <tr>
                        <td rowspan="2" valign="top" class="Estilo10"><strong><img src="img/question.png" alt="" width="35" height="35" /></strong>  </td>
                        <td class="Estilo10"><strong>¿Control Escolar GES permite el control de la documentación entregada y   pendiente por entregar?</strong></td>
                      </tr>
                      <tr>
                        <td class="Estilo10">Hemos observado y escuchado que uno de los m&aacute;s serios problemas en las   instituciones de ense&ntilde;anza, es la documentaci&oacute;n que los alumnos debieran   entregar. Por esta raz&oacute;n, nuestro sistema contempla la funcionalidad para   indicar los documentos que los alumnos entregan, as&iacute; como reportes y funciones   para obtener listados de documentos pendientes de entregar. De forma que la   instituci&oacute;n cuente con apoyos decisivos que coadyuven a evitar estas anomal&iacute;as. <br />
                        <br />
                        </td>
                      </tr>
                    </tbody>
                </table>
                  <table cellspacing="0" cellpadding="0">
                    <tr>
                      <td><table width="100%">
                          <tbody>
                            <tr>
                              <td valign="top" rowspan="2"><strong><img src="img/question.png" alt="" width="35" height="35" /></strong></td>
                              <td><strong>¿Cuál es el tiempo aproximado de implantación?</strong></td>
                            </tr>
                            <tr>
                              <td>Nuestros est&aacute;ndares de operaci&oacute;n indican que para la mayor&iacute;a de   instituciones, un lapso m&aacute;ximo de 4 d&iacute;as es suficiente para instalaci&oacute;n,   configuraci&oacute;n y capacitaci&oacute;n. Sin embargo, el tiempo real depender&aacute; de las   necesidades reales de organizaci&oacute;n y automatizaci&oacute;n de cada centro   educativo.&nbsp;&nbsp;<br />
                                  <br /></td>
                            </tr>
                          </tbody>
                      </table></td>
                    </tr>
                    <tr>
                      <td><table width="100%">
                          <tbody>
                            <tr>
                              <td valign="top" rowspan="2"><strong><img src="img/question.png" alt="" width="35" height="35" /></strong>  </td>
                              <td><strong>Control Escolar GES es una aplicaci&oacute;n de uso general o Ustedes la adaptan   a nuestras necesidades?</strong></td>
                            </tr>
                            <tr>
                              <td>Control Escolar GES es una soluci&oacute;n inform&aacute;tica que puede ser utilizada   en todo tipo de institutos educativos (desde kinder hasta posgrados), la   tecnolog&iacute;a que hemos aplicado permite ajustar la configuraci&oacute;n para adaptarla de   forma muy sencilla a la forma de trabajo de cada instituci&oacute;n (este proceso se   denomina customizaci&oacute;n o personalizaci&oacute;n).<br />
                                  <br />
                                Usted contar&aacute; con nuestra   asesor&iacute;a y con toda la documentaci&oacute;n necesaria para llevar a cabo esta   personalizaci&oacute;n.&nbsp;&nbsp;<br />
                                <br /></td>
                            </tr>
                          </tbody>
                      </table></td>
                    </tr>
                    <tr>
                      <td><table width="100%">
                          <tbody>
                            <tr>
                              <td valign="top" rowspan="2"><strong><img src="img/question.png" alt="" width="35" height="35" /></strong>  </td>
                              <td><strong>Al comprar el producto, lo puedo instalar en un servidor en mi colegio o   debo pagar una renta con Ustedes?</strong></td>
                            </tr>
                            <tr>
                              <td>Se instala en un servidor local ubicado en su instituci&oacute;n, de forma muy   sencilla y nosotros le proporcionamos los lineamientos b&aacute;sicos para establecer   un esquema de seguridad con respaldos y protecci&oacute;n . Con otros sistemas,   probablemente Usted no sabe donde se encuentra la informaci&oacute;n y bajo qu&eacute; medidas   de seguridad se protege.&nbsp;&nbsp;<br />
                                  <br /></td>
                            </tr>
                          </tbody>
                      </table></td>
                    </tr>
                    <tr>
                      <td><table width="100%">
                          <tbody>
                            <tr>
                              <td valign="top" rowspan="2"><strong><img src="img/question.png" alt="" width="35" height="35" /></strong>  </td>
                              <td><strong>Mi instituci&oacute;n est&aacute; en v&iacute;speras de iniciar operaciones / estamos   concluyendo con los tr&aacute;mites de apertura, podemos adquirir desde este momento su   software?</strong></td>
                            </tr>
                            <tr>
                              <td>Parte importante de la planeaci&oacute;n para el arranque de cualquier   organizaci&oacute;n es prever la eficiencia en la gesti&oacute;n. Por esa raz&oacute;n le sugerimos   realizar esta adquisici&oacute;n incluso antes de iniciar operaciones, esto le evitar&aacute;   muchos dolores de cabeza   posteriormente.&nbsp;&nbsp;<br />
                                  <br /></td>
                            </tr>
                          </tbody>
                      </table></td>
                    </tr>
                    <tr>
                      <td><table width="100%">
                          <tbody>
                            <tr>
                              <td valign="top" rowspan="2"><strong><img src="img/question.png" alt="" width="35" height="35" /></strong>  </td>
                              <td><strong>¿Se puede utilizar en instituciones educativas fuera de   México?</strong></td>
                            </tr>
                            <tr>
                              <td>Hemos realizado algunas investigaciones de las condiciones culturales y   normativas de otros pa&iacute;ses latinoamericanos y podemos concluir que Control   Escolar GES se adapta muy bien a los procesos de gesti&oacute;n educativa en esos   pa&iacute;ses.<br />
                                  <br />
                                Adicionalmente Control Escolar GES es el &uacute;nico software en el   mercado que cuenta con un diccionario de regionalismos y localidades, con el   cu&aacute;l podemos intercambiar los t&eacute;rminos mexicanos y colocar en su lugar los de   otros pa&iacute;ses. 
                              </td>
                            </tr>
                          </tbody>
                      </table></td>
                    </tr>
                    <tr>
                      <td><table width="100%">
                          <tbody>
                            <tr>
                              <td valign="top" rowspan="2"><strong><img src="img/question.png" alt="" width="35" height="35" /></strong>  </td>
                              <td><strong>D&oacute;nde puedo ver el precio del software Control Escolar GES en este   sitio?</strong></td>
                            </tr>
                            <tr>
                              <td>Control Escolar GES es una soluci&oacute;n de software de alta tecnolog&iacute;a y la   forma de licenciamiento se controla por niveles educativos (tambi&eacute;n llamados   secciones, especialidades o carreras) y estaciones de trabajo. Bajo este esquema   Usted no necesita preocuparse por la cantidad de alumnos, calificaciones, planes   de estudio, profesores o empleados que puede registrar.<br />
                                  <br />
                                Si est&aacute;   interesado en nuestra soluci&oacute;n y desea conocer el precio <a href="grupoges_informes.php">llene la forma de   contacto</a>, y con gusto le proporcionaremos una cotizaci&oacute;n personalizada y de   acuerdo a sus necesidades.&nbsp;&nbsp;<br />
                                <br /></td>
                            </tr>
                          </tbody>
                      </table></td>
                    </tr>
                    <tr>
                      <td><table width="100%">
                          <tbody>
                            <tr>
                              <td valign="top" rowspan="2"><strong><img src="img/question.png" alt="" width="35" height="35" /></strong>  </td>
                              <td><strong>¿Cada cuánto tiempo aparecen actualizaciones de Control Escolar GES y si   es obligatorio adquirirlas?</strong></td>
                            </tr>
                            <tr>
                              <td>En Grupo GES estamos en constante investigaci&oacute;n y desarrollo de nuevas   caracter&iacute;sticas y tambi&eacute;n de nuevos productos. Apr&oacute;ximadamente cada 3 meses   ponemos a disposici&oacute;n de nuestros clientes renovaciones gratuitas a las cuales   Usted puede acceder en un periodo de un a&ntilde;o a partir de la   adquisici&oacute;n.<br />
                                  <br />
                                Posteriormente las actualizaciones deben ser pagadas; sin   embargo, solo su instituci&oacute;n podr&aacute; evaluar si las mejoras e innovaciones que   hemos implementado le son atractivas y convenientes, de esa manera determinar&aacute;   si una actualizaci&oacute;n es viable, en caso contrario Usted podr&aacute; continuar la   operaci&oacute;n del software de forma permanente e ilimitada sin ning&uacute;n   problema.&nbsp;&nbsp;<br />
                                <br /></td>
                            </tr>
                          </tbody>
                      </table></td>
                    </tr>
                    <tr>
                      <td><table width="100%">
                          <tbody>
                            <tr>
                              <td valign="top" rowspan="2"><strong><img src="img/question.png" alt="" width="35" height="35" /></strong>  </td>
                              <td><strong>¿Existe algún financiamiento para adquirir este   software?</strong></td>
                            </tr>
                            <tr>
                              <td>Contamos con dos opciones para que Usted pueda adquirir nuestros   productos, por PAGO &Uacute;NICO o en PARCIALIDADES sin intereses (no bancario)**. <br />
                                  <br />
                                Llene una <a href="grupoges_informes.php">solicitud de informes</a> y pregunte a nuestros asesores de ventas si su instituci&oacute;n puede acceder al   esquema de PARCIALIDADES sin   intereses&nbsp;&nbsp;<br />
                                <br /></td>
                            </tr>
                          </tbody>
                      </table></td>
                    </tr>
                    <tr>
                      <td><table width="100%">
                          <tbody>
                            <tr>
                              <td valign="top" rowspan="2"><strong><img src="img/question.png" alt="" width="35" height="35" /></strong>  </td>
                              <td><strong>¿Existe alguna opción móvil que me permite levantar reportes de conducta   en cualquier parte del colegio, y luego trasladar esa información a este   sistema?</strong></td>
                            </tr>
                            <tr>
                              <td><p>Control Escolar GES es la &uacute;nica opci&oacute;n que existe en el mercado para   automatizar este tipo de necesidades de informaci&oacute;n movil usando <strong>Control   Escolar GES para Palm</strong>, lo cual adem&aacute;s le permitir&aacute; conocer otros   aspectos importantes como cobranza, carga acad&eacute;mica de profesores, fichas de   alumnos, grupos, poblaci&oacute;n escolar, etc. <br />
                                  <br />
                                <!-- Por favor consulte las   caracter&iacute;sticas del <a href="grupoges_gespalm.php"><strong>Control Escolar GES para   PALM</strong></a>-->.&nbsp;&nbsp;</p>
                                <table width="200" border="0" align="center">
                                  <tr>
                                    <td><div align="center"><span class="Estilo43"><a href="grupoges_escolarges.php"><img src="img/link_back.png" alt="a " width="20" height="20" border="0" />.. P&aacute;gina Inicial</a><a href="grupoges_escolarges.php"> </a></span></div></td>
                                  </tr>
                                </table></td>
                            </tr>
                          </tbody>
                      </table></td>
                    </tr>
                  </table>
                </td>
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

