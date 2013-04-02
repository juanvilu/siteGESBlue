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
                <td width="157" bgcolor="#CCCCCC"><div align="center"><span class="Estilo46"><span class="Estilo45"><a href="grupoges_faq_cobranza.php">Control de Cobranza...</a></span></span></div></td>
                <td width="167"><div align="center"><span class="Estilo46"><span class="Estilo45"><a href="grupoges_faq_asistencia.php">Control de Asistencia...</a></span></span></div></td>
                <td width="154"><div align="center"><span class="Estilo46"><span class="Estilo45"><a href="grupoges_faq_tecnicas.php">Preguntas T&eacute;cnicas... </a></span></span></div></td>
              </tr>
            </table>
		  </div>
		  <p>&nbsp;</p>
		  <div class="Estilo10" style="width:95%; float: left">
		    <table cellspacing="0" cellpadding="0">
              <tr>
                <td><br />
                  <table border="0" width="97%">
                    <tbody>
                      <tr>
                        <td><table width="100%">
                            <tbody>
                              <tr>
                                <td valign="top" rowspan="2"><strong><img src="img/question.png" alt="d" width="35" height="35" /></strong>  </td>
                                <td><strong>¿Puedo controlar y dar seguimiento a los alumnos   becados?</strong></td>
                              </tr>
                              <tr>
                                <td>Al igual que con los cobros, Usted podr&aacute; definir todos los tipos de   becas que sean necesarias. (p.e. becas del 10%, becas del 20%, becas completas,   etc.).&nbsp;As&iacute;mismo tendr&aacute; opci&oacute;n de dar seguimiento a sus becas, ya que es posible   limitar su aplicaci&oacute;n a un periodo de tiempo espec&iacute;fico que podr&aacute; ser ampliado o   disminuido seg&uacute;n el comportamiento acad&eacute;mico del alumno.&nbsp;Adicionalmente las   becas podr&aacute;n definirse en expresiones porcentuales o monetarias.&nbsp;&nbsp;</td>
                              </tr>
                            </tbody>
                        </table></td>
                      </tr>
                    </tbody>
                </table></td>
              </tr>
              <tr>
                <td><table width="100%">
                    <tbody>
                      <tr>
                        <td valign="top" rowspan="2"><strong><img src="img/question.png" alt="d" width="35" height="35" /></strong>  </td>
                        <td><strong>Tenemos intenci&oacute;n de notificar a los padres de familia de los adeudos que   pudieran tener &iquest;Su sistema es capaz de emitir estas   notificaciones?</strong></td>
                      </tr>
                      <tr>
                        <td>Por supuesto que s&iacute;, al vencer los pagos que Usted haya programado podr&aacute;   generar de inmediato estados de adeudos y emitir notificaciones a los alumnos o   padres de familia deudores.&nbsp;Recuerde que Control Escolar GES, tiene la capacidad   de permitirle redactar sus propios documentos en el formato que mejor le   agrade.&nbsp;&nbsp;<br />
                            <br /></td>
                      </tr>
                    </tbody>
                </table></td>
              </tr>
              <tr>
                <td><table width="100%">
                    <tbody>
                      <tr>
                        <td valign="top" rowspan="2"><strong><img src="img/question.png" alt="d" width="35" height="35" /></strong>  </td>
                        <td><strong>¿Los recargos son generados automáticamente?</strong></td>
                      </tr>
                      <tr>
                        <td>S&iacute;. Al vencer los pagos programados, el sistema le generar&aacute; los recargos   de los alumnos.&nbsp;Los recargos pueden ser especificados por porcentajes o   cantidades fijas, por d&iacute;a, por semana, por mes, etc.&nbsp;A&uacute;n en los casos m&aacute;s   complicados de generaci&oacute;n de recargos, Control Escolar GES cuenta con el   mecanismo que permite desarrollar un sub-programa para calcularlos sin la   intervenci&oacute;n del usuario.&nbsp;&nbsp;&nbsp;<br />
                            <br /></td>
                      </tr>
                    </tbody>
                </table></td>
              </tr>
              <tr>
                <td><table width="100%">
                    <tbody>
                      <tr>
                        <td valign="top" rowspan="2"><strong><img src="img/question.png" alt="d" width="35" height="35" /></strong>  </td>
                        <td><strong>En mi instituci&oacute;n es vital contar con dos cajas operando al mismo tiempo   para disminuir los tiempos de atenci&oacute;n &iquest;Puedo instalarlas?</strong></td>
                      </tr>
                      <tr>
                        <td>Control Escolar GES cuenta tiene la capacidad de operar con cualquier   n&uacute;mero de cajas o puntos de cobranza, al mismo tiempo. Con esta funci&oacute;n, su   instituci&oacute;n tendr&aacute; la ventaja de disminuir las filas de tiempo de atenci&oacute;n   durante los d&iacute;as &quot;pico&quot; proporcionando un servicio de valor agregado a sus   clientes.&nbsp;&nbsp;<br />
                            <br /></td>
                      </tr>
                    </tbody>
                </table></td>
              </tr>
              <tr>
                <td><table width="100%">
                    <tbody>
                      <tr>
                        <td valign="top" rowspan="2"><strong><img src="img/question.png" alt="d" width="35" height="35" /></strong>  </td>
                        <td><strong>Necesito llevar el control de inventario en ciertos art&iacute;culos que mi   instituci&oacute;n vende &iquest;Existe alguna forma de simplificarlo en su   sistema?</strong></td>
                      </tr>
                      <tr>
                        <td>Una de las caracter&iacute;sticas que se incorporaron a partir de la versi&oacute;n   3.5, es el <strong>control b&aacute;sico de inventarios</strong>. Es una opci&oacute;n muy   sencilla que permite ingresar al sistema los productos que se venden, indicarles   la existencias, capturar las compras, devoluciones, etc. La salida de los   productos (por venta) se realiza cuando los alumnos hacen el pago de los   productos y dicho pago es ingresado en el sistema. &nbsp; 
                        <br />
                        <br /></td>
                      </tr>
                    </tbody>
                </table></td>
              </tr>
              <tr>
                <td><table width="100%">
                    <tbody>
                      <tr>
                        <td valign="top" rowspan="2"><strong><img src="img/question.png" alt="d" width="35" height="35" /></strong>  </td>
                        <td><strong>¿Qué cobros puedo realizar además de colegiaturas e   inscripciones?</strong></td>
                      </tr>
                      <tr>
                        <td>Con nuestro sistema, Usted podr&aacute; realizar todos los cobros que quiera,   incluyendo todo su cat&aacute;logo de conceptos y seguir agregando conceptos conforme   su instituci&oacute;n lo vaya   necesitando.&nbsp;&nbsp;&nbsp;<br />
                            <br /></td>
                      </tr>
                    </tbody>
                </table></td>
              </tr>
              <tr>
                <td><table width="100%">
                    <tbody>
                      <tr>
                        <td valign="top" rowspan="2"><strong><img src="img/question.png" alt="d" width="35" height="35" /></strong>  </td>
                        <td><strong>Puede emitir autom&aacute;ticamente el comprobante de pago? Utilizamos formatos   preimpresos se pueden adaptar la impresi&oacute;n a &eacute;stos?</strong></td>
                      </tr>
                      <tr>
                        <td>Control Escolar GES es un sistema amistoso de utilizar y f&aacute;cilmente   configurable. Por supuesto que puede emitir autom&aacute;ticamente los comprobantes de   pago (Recibos y Facturas), y tiene un poderoso editor de formatos en modo   gr&aacute;fico que se utiliza para adecuar el comprobante a sus propios formatos   preimpresos.&nbsp;&nbsp;<br />
                            <br /></td>
                      </tr>
                    </tbody>
                </table></td>
              </tr>
              <tr>
                <td><table width="100%">
                    <tbody>
                      <tr>
                        <td valign="top" rowspan="2"><strong><img src="img/question.png" alt="d" width="35" height="35" /></strong>  </td>
                        <td><strong>Al termino de la cobranza diaria se puede emitir la p&oacute;liza   contable?</strong></td>
                      </tr>
                      <tr>
                        <td>Al incorporar su cat&aacute;logo de cuentas e indicar en cada concepto de cobro   la cuenta que resulta afectada autom&aacute;ticamente tendr&aacute; disponible una p&oacute;liza   contable.&nbsp;&nbsp;<br />
                            <br /></td>
                      </tr>
                    </tbody>
                </table></td>
              </tr>
              <tr>
                <td><table width="100%">
                    <tbody>
                      <tr>
                        <td valign="top" rowspan="2"> <strong><img src="img/question.png" alt="d" width="35" height="35" /></strong> </td>
                        <td><strong>El sistema contabiliza todas las operaciones de Ingresos y Egresos para   que se trasladen aun sistema de contabilidad posteriormente?</strong></td>
                      </tr>
                      <tr>
                        <td>Cada concepto tanto de ingreso como egreso es contabilizado al momento   de cobrar. Por cada sesi&oacute;n tendr&aacute; disponible una p&oacute;liza precontabilizada, esta   p&oacute;liza puede ser trasladada mediante archivos de texto o Excel a otros sistemas   encargados de contabilizarla.&nbsp;&nbsp;<br />
                            <br /></td>
                      </tr>
                    </tbody>
                </table></td>
              </tr>
              <tr>
                <td><table width="100%">
                    <tbody>
                      <tr>
                        <td valign="top" rowspan="2"> <strong><img src="img/question.png" alt="d" width="35" height="35" /></strong> </td>
                        <td><strong>Es posible automatizar la cobranza a trav&eacute;s de alg&uacute;n   banco?</strong></td>
                      </tr>
                      <tr>
                        <td><p>Control Escolar GES permite configurar su cobranza y adem&aacute;s generar   boletas de pago bancarias incluyendo referencias electr&oacute;nicas de pago que   incluyen d&iacute;gitos verificadores para incrementar la confiabilidad de los pagos. <br />
                            <br />
                          Nuestro sistema cuenta con soporte para utilizar los algoritmos de   verificaci&oacute;n de cobranza, que se usan en los principales bancos de M&eacute;xico y   Latinoam&eacute;rica (BBVA, Santander, Scotia Bank, etc.). Con base en esto, Usted   podr&aacute; cargar en su sistema los archivos electr&oacute;nicos de los pagos diarios y   registrar su cobranza de forma autom&aacute;tica.&nbsp;&nbsp;</p>
                          <table width="200" border="0" align="center">
                            <tr>
                              <td><div align="center"><span class="Estilo43"><a href="grupoges_escolarges.php"><img src="img/link_back.png" alt="a " width="20" height="20" border="0" />...P&aacute;gina Inicial</a><a href="grupoges_escolarges.php"> </a></span></div></td>
                            </tr>
                          </table>                          </td>
                      </tr>
                    </tbody>
                </table></td>
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

