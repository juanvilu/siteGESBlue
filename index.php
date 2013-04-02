<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sp" lang="sp">
    <head>
    	<meta http-equiv="Content-Type" content="text/html; CHARSET=iso-8859-1" />
    	
    	<meta name="ROBOTS" content="INDEX,FOLLOW">
    	<meta name="description" content="software de control escolar, académico y administrativo de instituciones educativas">
    	<meta name="keywords" Content="control escolar, sistema de control escolar, software de control escolar, software de control academico, sistemas de administracion escolar, calificaciones en internet, control academico, sistemas para escuelas, administracion escolar, boletas, iaestros, profesores, alumnos, horarios escolares, escuelas, sistema para universidades">
    	<meta name="keywords" content="bibliotecas, software de bibliotecas, software administrativo, instituciones educativas, control, escolar, academico, programa de control escolar, software, cobranza, programa, administrativo, niveles, educativos, control academico, desarrollo de software, colegios, ges, gestion escolar, programa, gestión, gestion">
    
       <META HTTP-EQUIV=Pragma CONTENT=no-cache><META HTTP-EQUIV=Cache-Control CONTENT=no-cache><META HTTP-EQUIV=expires CONTENT=0>
    	
    	<title>Grupo GES Sistemas Avanzados</title>
        
    	<style media="all" type="text/css">
        	@import "menu_style.css";
            
            a:visited {	color: #000033; font-weight:bold;}
        	a:link {color: #000033; font-weight:bold; }
            .Estilo1 {color: #000033}
            .Estilo2 {color: #FFFFFF}
            
            /* bordes redondeados0 */
            .box-special{
                 border:solid 1px #4e80bd;
                -webkit-border-radius: 5px;
                   -moz-border-radius: 5px;                
                        border-radius: 5px; 
                
                -webkit-box-shadow: 0px 0px 20px #000000;
                   -moz-box-shadow: 0px 0px 20px #000000;                
                        box-shadow: 0px 0px 20px #000000;
                
                background:-webkit-gradient(linear, 35% 14%, 35% 36%, from(#FFFFFF), to(#14458D));                                                
                background: -moz-linear-gradient(#FFFFFF, #14458D);
                background: linear-gradient(#FFFFFF, #14458D);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFFFFF', endColorstr='#14458D');
                               
            }
            .text-shadow{                
                text-shadow:0px 0px 35px #000000;   
            }
                       
        </style>     
    	
        <script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
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
                $('#imgMoprosoft').fancybox({
                    'autoDimensions': true,
                    'transitionIn'	:	'elastic',
                    'transitionOut'	:	'elastic'
                });
                var d = new Date(), n = d.getMonth();
                
                if( n+1 == 12 ){
                    $.fancybox({
                        autoDimensions: true,
                        href: 'https://dl.dropbox.com/s/7aqu02jrk3pmcr0/tarjetaNavidad2012.png?dl=1'
                    });
                }
            });	 
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
    		
    		<div class="content">
    		  <div style="width:30%; float:left">
    		    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="230" height="683" >
    		      <param name="movie" value="banner_ges.swf" />
    		      <param name="quality" value="high" />
    		      <param name="wmode" value="transparent" />
                  <embed src="banner_ges.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="230" height="683" wmode="transparent"></embed>
    	        </object>
    		    <table width="210" border="0" align="center">
                  <tr>
                    <td><div align="center"><img src="images/Logo-MOPROSOFT.jpg" alt="moprosoft" width="115" height="108" /></div></td>
                  </tr>
                  <tr>
                    <td><div align="center" class="Estilo1">Nos complace informarle que   el d&iacute;a 13 de Julio pasado, hemos sido reconocidos con el Nivel 1 del Est&aacute;ndar de   Calidad MoProSoft (NMX-I-059/02 NYCE), que certifica que nuestras pr&aacute;cticas para   el desarrollo de software se apegan a los mejores est&aacute;ndares a nivel   internacional. 
                    <strong class="Estilo10"><span class="Estilo2">Ver</span> 
                    <a id="imgMoprosoft" href="images/felicitacion.jpg">Ver m&aacute;s..<span class="Estilo32"><span class="Estilo44">.</span></span><span class="Estilo46"><img src="img/link.png" alt="l" width="20" height="20" border="0" /></span></a></strong></div></td>                                                      
                  </tr>
                </table>
    	      </div>
    		  <div style="width:66%; float: left">
    		    <img src="img/tit_controlescolarges_2.jpg" alt="enc_controlescolar" title="enc_controlescolar" width="350" height="40" />	      </div>
    		  <div style="width:20%; float: left">  
    		    <p align="right"><img src="images/img_escolarges.jpg" alt="img_escolarges"  title="img_EscolarGes" width="200" height="148" /></p>
    	      </div>
    		  <div style="width:45%; float: right">
    		    <p align="left"><strong>C</strong>ontrol Escolar GES es un sistema de cómputo que facilita a las Instituciones Educativas el mejoramiento de la eficiencia en sus áreas de operación interna (Control Escolar, Control Docente, Académico, Administrativo-Financiero y de Cobranza).</p>
    		    <div style="width:97%; float:left"> 
    		      <div align="right"><strong><span><span class="Estilo32"><span class="Estilo44"><a href="grupoges_escolarges.php" >Ver m&aacute;s...</a></span></span></span><span class="Estilo46"><a href="grupoges_escolarges.php"><img src="img/link.png" alt="l" width="20" height="20" border="0" /></a></span> </strong></div>
    		    </div>
    		  </div>
               <p><a href="grupoges_facturacion.php"><img src="images/banner_fac_electr.jpg" alt="" width="500" height="87" border="0" /></a></p>
               <div style="float:left; width:70%; text-align:center"></div>
              
    		  <div style="width:66%; float: left">
    		    <img src="img/tit_webges_2.jpg" alt="enc_webges" title="enc_webges" />	      </div>
    		  <div style="width:20%; float: left">
    		    <p><img src="images/img_webges.jpg" alt="img_webges" title="img_WebGes" /></p>
    	      </div>
    <div style="width:45%; float: right">
    		    <p>Es un software especializado en creaci&oacute;n de plataformas educativas por  Internet. Proporciona un espacio interactivo entre los principales actores del  proceso educativo: alumnos, profesores&nbsp; y  padres. Permite consultas y operaciones v&iacute;a Web de la  informaci&oacute;n acad&eacute;mica, docente, administrativa y financiera que se genera al  interior de una instituci&oacute;n educativa. </p>
    		    <div style="width:97%; float:left"> 
    		      <div align="right"><strong><a href="grupoges_webges.php">Ver m&aacute;s...<img src="img/link.png" alt="l" width="20" height="20" border="0" /></a></strong></div>
    		    </div>
    		  </div>
    		  
        <div style="width:65%; float: left"><img src="img/enc_bibliotek.jpg" alt="enc_bibliotek" title="enc_bibliotek" width="500" height="40" /></div>
    		   <div style="width:20%; float: left"><img src="images/img_bibliotek.jpg" alt="img_bibliotek" title="img_Bibliotek" width="200" height="148" /></div>
    		  <div style="width:45%; float: right">
    		    <p class="Estilo10"><strong>BiblioTEK</strong> es un servicio Web que transforma las bibliotecas   escolares en espacios din&aacute;micos de ense&ntilde;anza, donde los usuarios pueden   colaborar entre ellos y optimizar el uso de los recursos bibliotecarios (libros,   computadoras, CDs, DVDs, audiovisuales, etc.).<strong class="Estilo10"> <a href="grupoges_escolarges.php">Ver m&aacute;s.</a><span class="Estilo32"><span class="Estilo44"><a href="grupoges_escolarges.php">.</a></span></span><a href="grupoges_bibliotek.php"><span class="Estilo46"><img src="img/link.png" alt="l" width="20" height="20" border="0" /></span></a></strong></p>
    	      </div>
    	<div style="width:70%; float:left">
    	  <table width="549" height="143" border="0" align="center" bordercolor="#999999">
            <tr>
              <td><div align="right"><a href="grupoges_demoonline.php"></a><a href="grupoges_bibliotek.php"><img src="images/bibliotek.jpg" alt="img_bibliotek"  title="ico_Bibliotek" width="246" height="95" border="0" /></a></div></td>
              <td><div align="left"><a href="grupoges_descargas.php"><img src="images/dowload.jpg" alt="img_dowloads"  title="Dowloads EscolarGes"width="246" height="95" border="0" /></a></div></td>
            </tr>
            <tr>
              <td><div align="right"><a href="grupoges_demoonline.php"><img src="images/demos.jpg" alt="demos_online" title="Demos_EscolarGes"width="246" height="95" border="0" /></a></div></td>
              <!--<td><a href="grupoges_informes.php"><img src="images/contactanos.jpg" alt="img_contacto" title="ico_Contacto"width="246" height="95" border="0" /></a></td>  -->
              <td>
                <a href="grupoges_informes.php">
                    <div class="box-special" style="display: inline-block;height: 92px;padding: 3px; width: 242px;position: relative;">
                        <div style="display: block;font-size: 1.6em;">Cont&aacute;ctanos</div>
                        <div style="color: white; margin-top: 10px;">
                            <div class="text-shadow">Cuernavaca (777) 312-7254 y (777) 243-5191.</div><!--(777) 314-4134 -->
                            <div class="text-shadow">CD. M&eacute;xico (55) 1-204-7003</div>
                            <div class="text-shadow">Monterrey (81) 1-107-0595</div>
                            <div class="text-shadow">Guadalajara (33) 1-031-0695</div>
                        </div>
                        <!--<div style="display: inline-block; position:absolute;left:70%;top:50%;"> <img src="images/tel_contacto.png" width="38" /> </div>-->
                    </div>
                </a>
              </td>
            </tr>
          </table>
    	</div>	  
    	</div>
    		<div class="content-bottom"></div>
        <div style="width:100%; float:left; background-image:url(images/copyright.png); background-repeat:no-repeat">
          <!--
          Modificación para repetir el pie de página al estilo template_header.php
          <table width="757" height="43" border="0" align="center">
            <tr>
              <td width="343"><div align="right"><span class="Estilo10"><strong>Grupo GES Sistemas Avanzados </strong>&copy; 2010 | </span> </div></td>
              <td width="157"><div align="center" class="Estilo31"><a href="grupoges_quienessomos.php" class="pie Estilo6">Informaci&oacute;n para Contacto</a></div></td>
              <td width="243"><span class="Estilo9"><span class="Estilo10">|</span></span><span> <a href="grupoges_informes.php" class="pie">Solicitar Informes</a></span><span> | </span><span> <a id="lnkPoliticaPrivacidad" href="grupoges_politica_privacidad.php" class="pie">Aviso de Privacidad</a></span></td>
            </tr>
          </table>
          <p class="Estilo9">&nbsp;</p>
          -->
          <?php
            include "template_foo.php";
          ?>
          
        </div>
        
        <!-- LiveZilla Chat Button Link Code (ALWAYS PLACE IN BODY ELEMENT) -->
        <div style="display:none;">
            <a href="javascript:void(window.open('http://www.grupoges.com.mx/livezilla/chat.php?intgroup=dmVudGFz&amp;intid=ZWxpemFiZXRo&amp;pref=user&amp;hg=P1NvcG9ydGU_','','width=590,height=725,left=0,top=0,resizable=yes,menubar=no,location=no,status=yes,scrollbars=yes'))">
                <img id="chat_button_image" src="http://www.grupoges.com.mx/livezilla/image.php?id=01&amp;type=overlay&amp;hg=P1NvcG9ydGU_" width="26" height="100" border="0" alt="LiveZilla Live Help"/>
            </a>
        </div>
        <!-- http://www.LiveZilla.net Chat Button Link Code --><!-- LiveZilla Tracking Code (ALWAYS PLACE IN BODY ELEMENT) -->
        <div id="livezilla_tracking" style="display:none"></div>
        <script type="text/javascript">
            var script = document.createElement("script");
                script.async=true;
                script.type="text/javascript";
            var src = "http://www.grupoges.com.mx/livezilla/server.php?request=track&output=jcrpt&intgroup=dmVudGFz&intid=ZWxpemFiZXRo&pref=user&hg=P1NvcG9ydGU_&fbpos=10&fbml=0&fbmt=0&fbmr=0&fbmb=0&fbw=26&fbh=100&fboo=1&nse="+Math.random();
            setTimeout("script.src=src;document.getElementById('livezilla_tracking').appendChild(script)",1);
        </script>
        <noscript>
            <img src="http://www.grupoges.com.mx/livezilla/server.php?request=track&amp;output=nojcrpt&amp;intgroup=dmVudGFz&amp;intid=ZWxpemFiZXRo&amp;pref=user&amp;hg=P1NvcG9ydGU_&amp;fbpos=10&amp;fbml=0&amp;fbmt=0&amp;fbmr=0&amp;fbmb=0&amp;fbw=26&amp;fbh=100&amp;fboo=1" width="0" height="0" style="visibility:hidden;" alt=""/>
        </noscript><!-- http://www.LiveZilla.net Tracking Code -->    
      </div>
    
    </body>
</html>

