<?php
  session_start();

  include("funciones.php");    
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
		   var rowerror = "";
		   var inputerror = "";
		   var msgerror = "";
		   	   
		   if ( informes.empresa.value == ""  ) 
		   {
		      error = 1;
			  rowerror = "rowempresa";
			  inputerror = "empresa";
			  msgerror = "Debe introducir el nombre de la organización o empresa";
		   } 
		   
		   if( error == 0 )
		   {
				if (informes.nombrecontacto.value == "")
				{
				   error = 1;
				   rowerror = "rowcontacto";
				   inputerror = "nombrecontacto";
				   msgerror = " Debe introducir el nombre de la persona que solicita informes";
				}
		   }

		   if( error == 0 )
		   {
				if (informes.cargocontacto.value == "")
				{
				   error = 1;
				   rowerror = "rowcargocontacto";
				   inputerror = "cargocontacto";
				   msgerror = " Debe introducir el cargo de la persona que solicita informes";
				}
		   }

		   
		   if( error == 0 )
		   {
				if (informes.email.value == "")  
				{
				   error = 1;
				   rowerror = "rowemail";
				   inputerror = "email";
				   msgerror = "Es indispensable el correo electrónico de la persona que solicita informes para establecer comunicación";
				}
		   }	
		   
		   if( error == 0 )
		   {
				if ( informes.telefono.value == "")  
				{
				   error = 1;
				   rowerror = "rowtelefono";
				   inputerror = "telefono";
				   msgerror = "El teléfono para contactarlo es indispensable para enviar la solicitud de informes.";
				}
		   }		   		
			
		   if( error == 0 )
		   {
				if ( informes.zonacobertura.value == "")  
				{
				   error = 1;
				   rowerror = "rowzona";
				   inputerror = "zonacobertura";
				   msgerror = "Por favor indica el área de cobertura que le gustaría tener.";
				}
		   }
		   
		   if( error == 0 )
		   {
				if ( informes.experiencia.value == "")  
				{
				   error = 1;
				   rowerror = "rowexperiencia";
				   inputerror = "experiencia";
				   msgerror = "Por favor cuéntenos acerca de su experiencia comercializando software.";
				}
		   }
		   
		   if( error == 0 )
		   {
 		       document.informes.submit();
		   } 
		   else
		   {
		   	   var iderror = document.getElementsByName( rowerror );
			   var txt_error = document.getElementsByName( inputerror );
			   
			   if( iderror.length > 0 )
			   {
				   iderror[0].style.backgroundColor = "yellow";	
			   }
			   
			   if( txt_error.length > 0 )
			   {
				   txt_error[0].focus();	
			   }			   
			   
		   	   alert( msgerror );
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
		$menu = 1;
		
		include "template_menu.php";
	?>
	<div class="content">
	<form name="informes" action="enviarinfo_distrib.php" method="GET" enctype="text/plain">
    <input type="hidden" name="redirect" value="http://www.grupoges.com.mx/gracias_info_distrib.htm">
    <input type="hidden" name="subject" value="Control Escolar GES - informes para distribuidor"> 
    
	  <div style="width:30%; float: left">
		    <h5 align="center"><img src="images/banner_informes.jpg" alt="banner_solicitudinformes" title="SolicitudInformes" width="800" height="180" /></h5>
      </div>
		 
	  <div style="width:99%; float: left">
      <div class="info_frame" id="datos_identificacion">
	      
        <div style="width:90%; float:left"><span class="Estilo43"><img src="img/enc_informes.jpg" alt="" width="500" height="40" /></span> </div>
		 
        
	  </div>
	    <table width="<?php echo getsessionvar("max_table_width")-15;?>" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor=black bgcolor="#D1E9F3">
   <tr>
	    <td>
		<table border="0" cellpadding="0" cellspacing="0" width="100%" class=F>
            <tr> 
              <td bgcolor="#FFFFFF"></td>
              <td colspan="3"> <table width="100%" BORDER=0 CELLPADDING=0 CELLSPACING=0>
                  <tr> 
                    <td width="20">&nbsp;</td>
                    <td class="Subtitulos">&nbsp;</td>
                  </tr>
                </table></td>
            </tr>
            <tr id=rowempresa name=rowempresa> 
              <td bgcolor="#FFFFFF" class=F></td>
              <td width="34%" align="right" class=F>Nombre de la Empresa o Persona 
                F&iacute;sica *</td>
              <td>&nbsp;</td>
              <td class=F><input type="text" size="50" name="empresa"></td>
            </tr>
            <tr id=rowcontacto name=rowcontacto> 
              <td bgcolor="#FFFFFF" class=F></td>
              <td width="34%" align="right" class=F>Nombre del contacto principal 
                *</td>
              <td>&nbsp;</td>
              <td><input name="nombrecontacto" type="text" id="nombrecontacto" size="40"></td>
            </tr>
            <tr id=rowcargocontacto name=rowcargocontacto> 
              <td width="10" bgcolor="#FFFFFF" class=F></td>
              <td width="34%" align="right" class=F>Cargo del contacto en la empresa 
                *</td>
              <td>&nbsp;</td>
              <td><input name="cargocontacto" type="text" id="cargocontacto" size="40"></td>
            </tr>
            <tr id=rowemail name=rowemail> 
              <td bgcolor="#FFFFFF" class=F></td>
              <td width="34%" align="right" class=F>Correo electrónico *</td>
              <td>&nbsp;</td>
              <td><input type="text" size="50" name="email"></td>
            </tr>
            <tr> 
              <td bgcolor="#FFFFFF" class=F></td>
              <td align="right" valign="top" class=F>Estado *</td>
              <td>&nbsp;</td>
              <td valign="top"><select name="estado" size="1" id="estado">
                  <option value="Ags" selected>Aguascalientes</option>
                  <option value="Bcn">Baja California</option>
                  <option value="Bcs">Baja California Sur</option>
                  <option value="Cam">Campeche</option>
                  <option value="Chis">Chiapas</option>
                  <option value="Chi">Chihuahua</option>
                  <option value="Coah">Coahuila</option>
                  <option value="Col">Colima</option>
                  <option value="DF">Distrito Federal</option>
                  <option value="Dur">Durango</option>
                  <option value="Gto">Guanajuato</option>
                  <option value="Gro">Guerrero</option>
                  <option value="Hgo">Hidalgo</option>
                  <option value="Jal">Jalisco</option>
                  <option value="Mex">M&eacute;xico, Estado de</option>
                  <option value="Mich">Michoac&aacute;n</option>
                  <option value="Mor">Morelos</option>
                  <option value="Nay">Nayarit</option>
                  <option value="NL">Nuevo Le&oacute;n</option>
                  <option value="Oax">Oaxaca</option>
                  <option value="Pue">Puebla</option>
                  <option value="QRO">Quer&eacute;taro</option>
                  <option value="QR">Quintana Roo</option>
                  <option value="Slp">San Luis Potos&iacute;</option>
                  <option value="Sin">Sinaloa</option>
                  <option value="Son">Sonora</option>
                  <option value="Tamps">Tamaulipas</option>
                  <option value="Tlax">Tlaxcala</option>
                  <option value="Tab">Tabasco</option>
                  <option value="Ver">Veracruz</option>
                  <option value="Yuc">Yucat&aacute;n</option>
                  <option value="Zac">Zacatecas</option>
                  <option value="OUTMEX">Fuera de M&eacute;xico</option>
                </select></td>
            </tr>
            <tr> 
              <td bgcolor="#FFFFFF" class=F></td>
              <td align="right" valign="top" class=F>Pa&iacute;s *</td>
              <td>&nbsp;</td>
              <td valign="top"><select name="pais" size="1" id="pais">
                  <option value="Mexico" selected>M&eacute;xico</option>
                  <option value="Colombia">Colombia</option>
                  <option value="Costa Rica">Costa Rica</option>
                  <option value="Ecuador">Ecuador</option>
                  <option value="ElSalvador">El Salvador</option>
                  <option value="Guatemala">Guatemala</option>
                  <option value="Honduras">Honduras</option>
                  <option value="Panama">Panam&aacute;</option>
                  <option value="Peru">Per&uacute;</option>
                  <option value="Otro">Otro (favor de indicar)</option>
                </select></td>
            </tr>
            <tr id=rowtelefono name=rowtelefono> 
              <td bgcolor="#FFFFFF" class=F></td>
              <td align="right" valign="top" class=F>Teléfono (incluya clave o 
                c&oacute;digo de &aacute;rea) *</td>
              <td>&nbsp;</td>
              <td valign="top"><input name="telefono" type="text" id="telefono" size="30" maxlength="60"></td>
            </tr>
            <tr id=rowzona name=rowzona>
              <td bgcolor="#FFFFFF" class=F></td>
              <td align="right" valign="top" class=F>&nbsp;</td>
              <td>&nbsp;</td>
              <td valign="top"><input type="checkbox" name="boletin" id="boletin" value="checkbox" style='border-width:0px'>
                &iquest; Desea ser suscrito a nuestro bolet&iacute;n electr&oacute;nico 
                ? <br>
                <br>              </td>
            </tr>
            <tr id=rowzona name=rowzona> 
              <td bgcolor="#FFFFFF" class=F></td>
              <td align="right" valign="top" class=F>Zona o &Aacute;rea de Cobertura 
                *</td>
              <td>&nbsp;</td>
              <td valign="top"><textarea name="zonacobertura" cols="55" rows=4 id="zonacobertura"></textarea></td>
            </tr>
            <tr name=rowexperiencia id=rowexperiencia> 
              <td bgcolor="#FFFFFF" class=F></td>
              <td align="right" valign="top" class=F>Experiencia anterior comercializando 
                software *<br>
                (puede incluir aplicaciones que sean desarrollos propios )</td>
              <td>&nbsp;</td>
              <td valign="top"><textarea name="experiencia" cols="55" rows=4 id="experiencia"></textarea></td>
            </tr>
            <tr> 
              <td height="14" bgcolor="#FFFFFF" class=F></td>
              <td align="right" valign="top" class=F>Alg&uacute;n otro dato que 
                nos ayude a enter sus necesidades</td>
              <td>&nbsp;</td>
              <td valign="top"><textarea name="otros" cols="55" rows=4 id="otros"></textarea></td>
            </tr>
            <tr>
              <td height="14" bgcolor="#FFFFFF" class=F></td>
              <td align="right" valign="top" class=F>&nbsp;</td>
              <td>&nbsp;</td>
              <td valign="top">&nbsp;</td>
            </tr>
          </table>	    </td>
	</tr>
    </table>

   
    <div align="center";>  <input type="button" value="Enviar mi Solicitud" onClick="validardatos();"> </div>
     </font></p>
</form>
	   
            <p>&nbsp;</p>
            
			
			<div align="center" class="Estilo43"><em> <img src="img/link_back.png" alt="k" width="20" height="20" /></em><a href="index.php">...P&aacute;gina Inicial</a></div>
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
    <span class="Estilo30"></span>
</body>
</html>

