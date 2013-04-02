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
	
 <script language='Javascript'>
		
		function validardatos() 
		{
           var error = 0;
		   	   
		   if ( document.informes.empresa.value == ""  ) 
		   {
		      error = 1;
			  alert (' Debe introducir el nombre de la institución o empresa');
		   } 
		   
		   if( error == 0 )
		   {
				if ( (document.informes.realname.value == "") || (document.informes.cargo.value == "")  )  {
				   error = 1;
				   alert (' Debe introducir el nombre y cargo de la persona que solicita informes'); 	}
		   }
		   
		   if( error == 0 )
		   {
				if (document.informes.email.value == "")  {
				   error = 1;
				   document.informes.email.focus();
				   alert ('Es indispensable el correo electrónico de la persona que solicita informes para establecer comunicación'); 	}
		   }			
			
		   if( error == 0 )
		   {
				if ( (document.informes.niveles.value == "") || (document.informes.descripcion_niveles.value == "")  )  
				{
				   error = 1;
				   alert ('El número y descripción de niveles es indispensable y básico para proporcionarle informes.'); 	
				   document.informes.niveles.focus();
				}
		   }
		   
		   if( error == 0 )
		   {
				if ( document.informes.direccion.value == "")  
				{
				   error = 1;
				   informes.direccion.focus();
				   alert ('La dirección es necesaria para enviar la solicitud de informes.'); 
				}
		   }
		   
		   if( error == 0 )
		   {
				if ( document.informes.colonia.value == "")  
				{
				   error = 1;
				   document.informes.colonia.focus();
				   alert ('La Colonia es necesaria para enviar la solicitud de informes.'); 
				}
		   }
		   
		   if( error == 0 )
		   {
				if ( document.informes.cp.value == "")  
				{
				   error = 1;
				   documentinformes.cp.focus();
				   alert ('Llene el Código Postal (P.O. Box) para enviar la solicitud de informes.'); 
				}
		   }		   		   

		   if( error == 0 )
		   {
				if ( document.informes.ciudad.value == "")  
				{
				   error = 1;
				   documentinformes.ciudad.focus();
				   alert ('La ciudad de su ubicación es necesaria para enviar la solicitud de informes.'); 
				}
		   }		   		   
		   
		   if( error == 0 )
		   {
				if ( document.informes.telefono.value == "")  
				{
				   error = 1;
				   document.informes.telefono.focus();
				   alert ('El teléfono para contactarlo es indispensable para enviar la solicitud de informes.'); 
				}
		   }		   		   

		   if( error == 0 )
		   {
 		       document.informes.action = "grupoges_enviarinfo.php";
			   if( document.informes.comoseentero.value=='feria_expo' ){
	               document.informes.recipient.value='etrujillo@grupoges.com.mx';
			   }
               document.informes.submit();
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
	<div class="content">
	<form name="informes" action="grupoges_enviarinfo.php" method="GET" enctype="text/plain">
    <input type="hidden" name="recipient" value="jlopez@grupoges.com.mx">
    <input type="hidden" name="cc" value="etrujillo@grupoges.com.mx, susana@grupoges.com.mx, lpastrana@escolarhitech.com.mx">
    <input type="hidden" name="redirect" value="gracias_sce.htm">
    <input type="hidden" name="subject" value="Control Escolar GES - informes">
    <input type=hidden name="env_report" value="REMOTE_HOST,REMOTE_ADDR,HTTP_USER_AGENT">
	  <div style="width:30%; float: left">
		    <h5 align="center"><img src="images/banner_informes.jpg" alt="banner_solicitudinformes" title="SolicitudInformes" width="800" height="180" /></h5>
      </div>
		 
	  <div style="width:99%; float: left">
	    <div class="info_frame" id="datos_identificacion">
	      
	      <p class="Estilo43"><img src="img/enc_informes.jpg" alt="" width="500" height="40" /></p>
		 
        
		</div>
	    <table width="0%" border="0" cellpadding="0" cellspacing="0" bgcolor="#D1E9F3" class="F">
          <tr> </tr>
          <tr> </tr>
          <tr> </tr>
          <tr>
            <td class="F"></td>
            <td align="right" class="F">&nbsp;</td>
            <td width="7px" class="F" rowspan="8">&nbsp;</td>
            <td class="F" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td class="F"></td>
            <td width="34%" align="right" class="F">&iquest;Cu&aacute;l es su inter&eacute;s 
              respecto al sistema <strong>Control Escolar GES</strong>?:</td>
            <td class="F" valign="top"><select name="tipocliente" size="1" style="font-size:11px;">
                <option value="Empleado" selected="selected">Trabajo al interior de una instituci&oacute;n 
                  educativa que desea sistematizarse</option>
                <option value="Director">Soy el Director de la Instituci&oacute;n</option>
                <option value="JefeAdministrativo">Soy el Jefe Administrativo 
                  de la Instituci&oacute;n</option>
                <option value="JefeServiciosEscolares">Soy el Jefe de Servicios 
                  Escolares/Acad&eacute;micos</option>
                <option value="Encargado de sistemas">Encargado de sistemas de 
                  la instituci&oacute;n</option>
                <option value="Consultor">Soy consultor que busca apoyar a una 
                  instituci&oacute;n</option>
                <option value="ProspectoDistribuidor">Soy un proveedor de servicios 
                  inform&aacute;ticos que desea informes para distribuidor</option>
                <option value="Otro">Otro (especificar en descripci&oacute;n de 
                  Niveles Educativos)</option>
            </select></td>
          </tr>
          <tr>
            <td class="F"></td>
            <td width="34%" align="right" class="F">Nombre de la Instituci&oacute;n o Empresa:</td>
            <td class="F"><input type="text" size="50" name="empresa" /></td>
          </tr>
          <tr>
            <td class="F"></td>
            <td width="34%" align="right" class="F">Persona para contacto:</td>
            <td><input type="text" size="40" name="realname" /></td>
          </tr>
          <tr>
            <td class="F"></td>
            <td width="34%" align="right" class="F">Cargo del contacto:</td>
            <td><input type="text" size="40" name="cargo" /></td>
          </tr>
          <tr>
            <td class="F"></td>
            <td width="34%" align="right" class="F">Correo electr&oacute;nico:</td>
            <td><input type="text" size="50" name="email" /></td>
          </tr>
          <tr>
            <td class="F"></td>
            <td width="30%" align="right" valign="top" class="F">N&uacute;mero de Niveles Educativos:</td>
            <td><input type="text" size="5" name="niveles" value="3" />
              Nota: Para centros de ense&ntilde;anza superior, 
              indique el n&uacute;mero de carreras que se imparten.</td>
          </tr>
          <tr>
            <td class="F"></td>
            <td width="34%" align="right" valign="top" class="F"><p align="right">Descripci&oacute;n de los Niveles 
              Educativos<br />
              P.e. Kinder, Primaria, Secundaria, etc.</p>
                <p align="right">Indique aqu&iacute; otros datos que nos sirvan para
                  complementar su solicitud.<br />
                          <br />
              </p></td>
            <td  width="55px"valign="top"><textarea name="descripcion_niveles" cols="60" rows="6"></textarea></td>
          </tr>
          <tr>
            <td class="F"></td>
            <td align="right" valign="top" class="F">&iquest;C&oacute;mo se enter&oacute; de nuestros servicios?:</td>
            <td width="7px" class="F" rowspan="8">&nbsp;</td>
            <td valign="top"><select name="comoseentero" size="1" id="comoseentero" style="font-size:11px;">
              <option value="Internet" selected="selected">Buscando en Internet</option>
              <option value="HiTECH">Escolar HiTECH</option>
              <option value="Google">Google</option>
              <option value="Por recomendacion">Por recomendaci&oacute;n</option>
              <option value="Revista">Anuncio en una revista</option>
              <option value="Peri&oacute;dico">Articulo en un peri&oacute;dico</option>
              <option value="feria_expo">Feria o Expo</option>
              <option value="Otro">Otro</option>
            </select></td>
          </tr>
          <tr>
            <td class="F"></td>
            <td align="right" valign="top" class="F">&nbsp;</td>
            <td valign="top">&nbsp;</td>
          </tr>
        </table>
	    <br />
        <div class="info_frame_blank" id="datos_ubicacion">
          <p class="Estilo43"><img src="img/enc_informes_2.jpg" alt="" width="500" height="40" /></p>
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#D1E9F3" bgcolor="#D1E9F3">
            <tr>
              <td align="right" class="Estilo10">&nbsp;</td>
              <td width="12" class="F" rowspan="8">&nbsp;</td>
              <td class="F">&nbsp;</td>
            </tr>
            <tr>
              <td width="270" align="right" class="Estilo10">Direcci&oacute;n (Calle y n&uacute;mero) *</td>
              <td width="494" class="F"><input name="direccion" type="text" id="direccion" size="60" maxlength="60" />              </td>
            </tr>
            <tr>
              <td width="270" align="right" class="Estilo10">Colonia o Barrio *</td>
              <td class="F"><input name="colonia" type="text" id="colonia" size="35" maxlength="60" />              </td>
            </tr>
            <tr>
              <td width="270" align="right" class="Estilo10">C&oacute;digo postal *</td>
              <td class="F"><input name="cp" type="text" id="cp" size="8" maxlength="8" />              </td>
            </tr>
            <tr>
              <td width="270" align="right" class="Estilo10">Ciudad o Poblaci&oacute;n *</td>
              <td class="F"><input name="ciudad" type="text" id="ciudad" size="35" maxlength="60" />              </td>
            </tr>
            <tr>
              <td width="270" align="right" class="Estilo10">Estado o Provincia*</td>
              <td class="F"><select name="estado" size="1" id="estado">
                  <option value="Ags" selected="selected">Aguascalientes</option>
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
                  <option value="---">---------</option>
                  <option value="OUTMEX">Fuera de M&eacute;xico</option>
                </select>              </td>
            </tr>
            <tr>
              <td width="270" align="right" class="Estilo10">Pa&iacute;s *</td>
              <td class="F"><select name="pais" size="1" id="pais" onchange="validarpais();">
                  <option value="Mexico" selected="selected">M&eacute;xico</option>
                  <option value="Argentina">Argentina</option>
                  <option value="Chile">Chile</option>
                  <option value="Colombia">Colombia</option>
                  <option value="Costa Rica">Costa Rica</option>
                  <option value="Ecuador">Ecuador</option>
                  <option value="ElSalvador">El Salvador</option>
                  <option value="Guatemala">Guatemala</option>
                  <option value="Honduras">Honduras</option>
                  <option value="Panama">Panam&aacute;</option>
                  <option value="Peru">Per&uacute;</option>
                  <option value="Otro">Otro (favor de indicar)</option>
                </select>              </td>
            </tr>
            <tr>
              <td width="270" align="right" class="Estilo10">Tel&eacute;fono (incluya clave o c&oacute;digo 
                de &aacute;rea) *</td>
              <td class="F"><input type="text" size="30" maxlength="60" name="telefono" />              </td>
            </tr>
            <tr class="Estilo10">
              <td colspan="2">&nbsp;</td>
            </tr>
          </table>
        </div>
	  </div>
	  <div class="Estilo10" style="width:99%; float:left">
     
      
      <p align="center"><font size="2" face="Arial">
        
	  </font></p>
	  <table width="457" height="21" border="0" align="center">
        <tr>
          <td><div align="center"><font size="2" face="Arial">
            <input name="button" type="button" onclick="validardatos();" value="Enviar mi Solicitud" />
          </font></div></td>
        </tr>
      </table>
	  </form>
            <p>&nbsp;</p>
            
			
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
</body>
</html>

