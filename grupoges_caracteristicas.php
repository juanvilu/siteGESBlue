<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
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
		    <h5 align="center"><img src="images/banner_escolarges.jpg" alt="banner_escolarges" title="banner_EscolarGes" width="800" height="180" /></h5>
	      </div>
		  <div style="width:50%; float: left"><img src="img/enc_caracteristicas.jpg" alt="" width="500" height="40" /></div>
		  <p>&nbsp;</p>
		  <div style="width:95%; float: left">
		    <p class="Estilo10"><strong>Control Escolar GES</strong> es un software planeado y desarrollado con   la finalidad de simplificar los procesos de atenci&oacute;n en cualquier Instituci&oacute;n   Educativa. Despu&eacute;s de la instalaci&oacute;n y su correcta configuraci&oacute;n, este sistema   le proporciona las herramientas para dar atenci&oacute;n de forma m&aacute;s eficiente a los   tr&aacute;mite internos. </p>
	        <p class="Estilo10">A continuaci&oacute;n le presentamos una lista de las caracter&iacute;sticas m&aacute;s   importantes que han sido incorporadas en este sistema:
            </p>
	        </div>
		  <div style="width:99%; float: left">
		    <div align="center">
		      <table width="200" border="0" align="center">
                <tr>
                  <td>
                    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="640" height="480">
                        <param name="movie" value="images/caracteristicas.swf" />
                        <param name="quality" value="high" /> 
                        <param name="wmode" value="transparent" />                 
                        <embed src="images/caracteristicas.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="640" height="480" wmode="opaque"></embed>
                      </object>
                  </td>
                </tr>
              </table>
		      <table width="200" border="0" align="center">
                <tr>
                  <td><div align="center" class="Estilo10"><strong><img src="img/link_back.png" alt="y" width="20" height="20" /><a href="grupoges_escolarges.php" class="Estilo43">...P&aacute;gina Inicial</a></strong></div></td>
                </tr>
              </table>
	        </div>
		  </div>
		  <div style="width:95%; float: left"></div>
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

