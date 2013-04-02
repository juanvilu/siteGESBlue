<?php
  session_start();

  include("funciones.php");
  
  $customer_name = "";
  
  if( isset($_GET["customername"]) )
  {
     $customer_name = $_GET["customername"];
  }
    
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
    .TR_TABLA {   height: 22px;
}
    .Estilo1 {
	font-size: 13px;
	font-weight: bold;
}
    </style>
	
<script language="Javascript">

		function validardatos() 
		{
           var error = 0;
		   	   
		   if ( document.licencia.nombre_escuela.value == ""  ) 
		   {
		      error = 1;
			  alert (' Debe introducir el nombre de la institución');
		   } 
		   	   
		   if( error == 0 )
		   {
				if (document.licencia.domicilio_escuela.value == "")  {
				   error = 1;
				   document.licencia.domicilio_escuela.focus();
				   alert ('Es indispensable el domicilio de la institución que solicita la licencia'); 	}
		   }			
			
		   if( error == 0 )
		   {
				if (document.licencia.cp_escuela.value == "")  {
				   error = 1;
				   alert ('El código postal de la institución es necesario.'); 	
				   licencia.cp_escuela.focus();
				}
		   }

		   if( error == 0 )
		   {
				if ( document.licencia.municipio_escuela.value == "" )
				{
				   error = 1;
				   document.licencia.municipio_escuela.focus();
				   alert ('El municipio o localidad de la institución es necesario.'); 
				}
		   }

		   if( error == 0 )
		   {
				
				if( document.licencia.pais.value == "México" )
				{
					if( document.licencia.estado_escuela.value == "")  
					{
						error = 1;
						document.licencia.estado_escuela.focus();
						alert ('Es necesario indicar el estado donde se localiza la institución.'); 
					}
				}
				else
				{
				   // Provincia
				   if ( document.licencia.provincia.value == "")
				   {
					   error = 1;
					   document.licencia.provincia.focus();
					   alert ('Deberá indicar el departamento, provincia o región.'); 
				   }			
				}
		   }

		   if( error == 0 )
		   {
				if ( document.licencia.telefono_escuela.value == "")  
				{
				   error = 1;
				   document.licencia.telefono_escuela.focus();
				   alert ('El teléfono es indispensable para enviar la solicitud.'); 
				}
		   }
		   
		   if( error == 0 )
		   {
				if ( (document.licencia.nombre_contacto.value == "") || (document.licencia.email_contacto.value == "")  )  
				{
				   error = 1;
				   document.licencia.nombre_contacto.focus();
				   alert (' Debe introducir el nombre y el email de la persona que solicita la licencia'); 	
				}
		   }
		   
		   if( error == 0 )
		   {
				if ( document.licencia.email_confirma.value == "" ) 
				{
				   error = 1;
				   document.licencia.email_confirma.focus();
				   alert (' Debe introducir el email y también la confirmación.'); 	
				}
				else if ( document.licencia.email_confirma.value != licencia.email_contacto.value)
				{
				   error = 1;
				   document.licencia.email_confirma.focus();
				   alert ('El email no coincide vuelva a teclearlos por favor.'); 
				}
		   }		   

		   if( error == 0 )
		   {
 		       document.licencia.method = "POST";
			   document.licencia.submit();
		   } 
		}
		
		function deshabilitar_edo_otro()
		{
			var edo_mexican = document.getElementsByName("estado_mexicano");
			var edo_otro = document.getElementsByName("tr_provincia_extranjera");
			
			if( edo_otro.length > 0 )
			{
				var div_property; // for displaying purposes

				if (navigator.appName == "Microsoft Internet Explorer" ) 
					div_property = "block";
				else
					div_property = "table-row";		
				
				edo_otro[0].style.display = "none";
				edo_mexican[0].style.display = div_property;
			}
		}
		
		function habilitar_edo_otro()
		{
			var edo_mexican = document.getElementsByName("estado_mexicano");
			var edo_otro = document.getElementsByName("tr_provincia_extranjera");
			
			if( edo_otro.length > 0 )
			{
				var div_property; // for displaying purposes
				
				edo_mexican[0].style.display = "none"; // quitar estado mexicano
				
				if (navigator.appName == "Microsoft Internet Explorer" ) 
					div_property = "block";
				else
					div_property = "table-row";
				
				edo_otro[0].style.display = div_property;
			}
		}
		
		function cambia_estado_escuela()		
		{
			if( document.licencia.pais.value == "México" )
				deshabilitar_edo_otro();
			else
				habilitar_edo_otro();
		}		
		
	</script>
	
</head>
<body class="body" onLoad="javascript:deshabilitar_edo_otro();">

<?php
  include "template_header.php";  // wrapper1
?>

  <div class="wrapper">

<?php
		$menu = 1;
		
		include "template_menu.php";
	?>
	<div class="content">
	<form name="licencia" action="enviarinfo_licencias.php" method="POST">
	
	  <div style="width:30%; float: left">
		    <h5 align="center"><img src="images/banner_licencia.jpg" alt="" width="800" height="180" /></h5>
      </div>
		 
	  <div style="width:99%; float: left">
	    <div class="info_frame" id="datos_identificacion">
	      
	      <p class="Estilo43"><img src="img/enc_informes.jpg" alt="" width="500" height="40" /></p>
		 
        
	  </div>
	    <table width="780" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#D1E9F3" class="F">
          <tr bgcolor="#FFFFFF">
            <td colspan="4"><strong>Los siguientes datos ser&aacute;n utilizados para generar su licencia, verifique minuciosamente que sean correctos. </strong></td>
          </tr>
          <tr bgcolor="#FFFFFF">
            <td colspan="4" bgcolor="#D1E9F3">&nbsp;</td>
          </tr>
          <tr class='TR_TABLA'>
            <td class="F"></td>
            <td width="34%" align="right" class="F">Nombre de la Instituci&oacute;n *</td>
            <td align="center" rowspan="24">&nbsp;&nbsp;</td>
            <td class="F"><input name="nombre_escuela" type="text" id="nombre_escuela" size="60" maxlength="100" value="<?php echo $customer_name;?>" /></td>
          </tr>
          <tr class='TR_TABLA'>
            <td class="F"></td>
            <td align="right" class="F">Clave Escolar</td>
            <td><input name="clave_escolar" type="text" id="clave_escolar" size="20" maxlength="20"  value="" /></td>
          </tr>
          <tr class='TR_TABLA'>
            <td height="23" class="F"></td>
            <td align="right" class="F">R.F.C. (C&eacute;dula Fiscal o Registro Tributario) </td>
            <td class="F"><input name="rfc_escolar" type="text" id="rfc_escolar" size="20" maxlength="20" /></td>
          </tr>
          <tr class='TR_TABLA'>
            <td class="F"></td>
            <td width="34%" align="right" class="F">Direcci&oacute;n (Calle, n&uacute;mero, Esquina, 
              Colonia, etc.) *</td>
            <td class="F"><input name="domicilio_escuela" type="text" id="domicilio_escuela" size="60" maxlength="60" />            </td>
          </tr>
          <tr class='TR_TABLA'>
            <td class="F"></td>
            <td width="34%" align="right" class="F">C&oacute;digo postal *</td>
            <td class="F"><input name="cp_escuela" type="text" id="cp_escuela" size="8" maxlength="8" />            </td>
          </tr>
          <tr class='TR_TABLA'>
            <td class="F"></td>
            <td align="right" class="F">Ciudad / Municipio: *</td>
            <td class="F"><input name="municipio_escuela" type="text" id="municipio_escuela" size="25" maxlength="25" />
              Nota: Es equivalente a Localidad o Municipalidad en otros pa&iacute;ses.</td>
          </tr>
          <tr class='TR_TABLA'>
            <td class="F"></td>
            <td width="34%" align="right" class="F">Pa&iacute;s *</td>
            <td class="F"><select name="pais" size="1" id="pais" onchange='javascript:cambia_estado_escuela();'>
                <option value="M&eacute;xico" selected="selected">M&eacute;xico</option>
                <option value="Chile">Chile</option>
                <option value="Colombia">Colombia</option>
                <option value="Peru">Per&uacute;</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Ecuador">Ecuador</option>
                <option value="ElSalvador">El Salvador</option>
                <option value="Honduras">Honduras</option>
                <option value="Argentina">Argentina</option>
                <option value="Otro">Otro</option>
              </select>            </td>
          </tr>
          <tr class='TR_TABLA' id='estado_mexicano' name='estado_mexicano'>
            <td class="F"></td>
            <td width="34%" align="right" class="F">Estado (para M&eacute;xico) *</td>
            <td class="F"><select name="estado_escuela" id="estado_escuela">
                <option value="" selected="selected">Seleccione un estado --</option>
                <option value="Ags">Aguascalientes</option>
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
                <option value="Qro">Quer&eacute;taro</option>
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
              </select>            </td>
          </tr>
          <tr class='TR_TABLA' id='tr_provincia_extranjera' name='tr_provincia_extranjera' style='display:none'>
            <td class="F"></td>
            <td align="right" class="F">Departamento, Provincia o Regi&oacute;n *:</td>
            <td class="F"><input name="provincia" type="text" id="provincia" size="40" maxlength="50" /></td>
          </tr>
          <tr class='TR_TABLA'>
            <td class="F"></td>
            <td width="34%" align="right" class="F">Tel&eacute;fono (incluya c&oacute;digo de &aacute;rea) *</td>
            <td class="F"><input name="telefono_escuela" type="text" id="telefono_escuela" size="30" maxlength="60" />            </td>
          </tr>
          <tr>
            <td class="F"></td>
            <td align="right" class="F"></td>
            <td class="F">&nbsp;</td>
          </tr>
          <tr>
            <td class="F"></td>
            <td colspan="3" align="left" class="subtitulos Estilo1">&nbsp;Datos 
              de la persona que suministra la informaci&oacute;n</td>
          </tr>
          <tr bgcolor="#D1E9F3">
            <td colspan="4"><img border="0" src="images/pxl.gif" height="10" width="1" /></td>
          </tr>
          <tr class='TR_TABLA'>
            <td class="F"></td>
            <td width="34%" align="right" class="F">Persona para contacto *</td>
            <td><input name="nombre_contacto" type="text" id="nombre_contacto" size="40" /></td>
          </tr>
          <tr class='TR_TABLA'>
            <td class="F" width="10"></td>
            <td width="34%" align="right" class="F">Cargo del contacto</td>
            <td><input name="cargo_contacto" type="text" id="cargo_contacto" size="40" /></td>
          </tr>
          <tr class='TR_TABLA'>
            <td class="F"></td>
            <td width="34%" align="right" class="F">Correo electr&oacute;nico *</td>
            <td><input name="email_contacto" type="text" id="email_contacto" size="50" /></td>
          </tr>
          <tr class='TR_TABLA'>
            <td class="F"></td>
            <td align="right" class="F">Confirme el correo electr&oacute;nico *</td>
            <td class="F"><input name="email_confirma" type="text" id="email_contacto22" size="50" /></td>
          </tr>
          <tr class='TR_TABLA'>
            <td class="F"></td>
            <td align="right" class="F">Horario para Contactar</td>
            <td class="F"><input name="horario_contacto" type="text" id="horario_contacto" size="40" /></td>
          </tr>
          <tr >
            <td class="F"></td>
            <td width="34%" align="right" class="F"></td>
            <td class="F">&nbsp;</td>
          </tr>
          <tr bgcolor="#FFFFFF">
            <td colspan="4" align="center"><input name="button" type="button" onclick="validardatos();" value="Enviar mi Solicitud" /></td>
          </tr>
          <tr bgcolor="#FFFFFF">
            <td class="F"></td>
            
          </tr>
          <tr bgcolor="#FFFFFF">
            <td colspan="4">&nbsp;</td>
          </tr>
          <tr bgcolor="#FFFFFF">
            <td colspan="4">Nota: La solicitud ser&aacute; analizada y validada de Lunes a 
              Viernes, de 9:00am a 5:00pm (hora del Centro de M&eacute;xico).</td>
          </tr>
      </table>
	    <div class="Estilo10" style="width:99%; float:left">
      </div>
	  <p align="center">&nbsp;</p>
</form>
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

