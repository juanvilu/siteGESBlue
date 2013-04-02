<html>
<head>

<title>Etiquetas de Texto en diferentes ángulos.</title>

<link href="news_general.css" media="screen" rel="stylesheet" type="text/css">

</head>

<body>
<h3>Tutorial: Elementos de Texto en diferentes &aacute;ngulos<br>
</h3>
<p class="autor">Autor: Roberto A. Romero N&aacute;jera</p>
<p>El dise&ntilde;o de formatos impresos nos exige ciertas habilidades b&aacute;sicas 
  para organizar la informaci&oacute;n de forma que &eacute;sta sea comprensible 
  para los lectores potenciales, en algunas ocasiones por limitaciones de espacio 
  o por necesidades del propio dise&ntilde;o ser&aacute; necesario colocar alg&uacute;n 
  texto con cierta inclinaci&oacute;n. </p>
<p>Aqu&iacute; podr&aacute; ver un ejemplo acerca del uso de texto o etiquetas 
  de forma tradicional, es decir, en sentido horizontal.</p>
<p align="left"><img src="<?php echo $url;?>Formato1.jpg"></p>
<p> Ahora podr&aacute; ver otro ejemplo donde se han anexado algunas leyendas 
  en sentido vertical, con una inclinaci&oacute;n de 90 grados.</p>
<p align="left"><img src="<?php echo $url;?>Formato2.jpg"></p>
<p>Con esto se logra que los formatos sean f&aacute;cilmente comprensibles para 
  sus lectores que en este caso son padres de familia, tutores o los propios alumnos.</p>
<h4>&iquest;C&oacute;mo colocar elementos textuales con inclinaci&oacute;n?</h4>
<p>Por favor observe que esta caracter&iacute;stica solo funciona con etiquetas 
  de texto y campos de datos, no as&iacute; con expresiones.</p>
<strong>Paso 1:</strong> Al editar un reporte agregaremos una etiqueta de texto 
o un campo de datos y por medio del men&uacute; contextual (usando el bot&oacute;n 
derecho del Mouse), seleccionaremos la opci&oacute;n de mascara de salida. 
<p align="center"><img src="<?php echo $url;?>mascara.jpg"  class="noborder"></p>
<p align="left"><strong>Paso 2:</strong> En la ventana de mascara de salida se 
  indicar&aacute; la inclinaci&oacute;n de la etiqueta mediante un valor num&eacute;rico 
  para los grados de rotaci&oacute;n. Este valor deber&aacute; ir seguido por 
  un asterisco (*) que hace la indicaci&oacute;n de grados; Ejemplo: 90* (como 
  en la siguiente imagen).</p>
<p align="center"><img src="<?php echo $url;?>dato_mascara.jpg" class="noborder"> </p>
<p><strong>Paso 3:</strong> En cuanto a los atributos del campo, se sugiere no 
  modificar las propiedades de ancho y alto, dejando ancho autom&aacute;tico habilitado 
  (auto). Las dem&aacute;s propiedades pueden ser cambiadas a voluntad.</p>
<p align="center"><img src="<?php echo $url;?>atributos.jpg" class="noborder"></p>
<p align="left"> Siguiendo estos sencillos pasos su elemento debe funcionar correctamente.</p>
<p> <strong>Ejemplos de diferentes inclinaciones:</strong></p>
<table width="75%" border="0" align="center">
  <tr> 
    <td height="23"> <div align="center">60 grados</div></td>
    <td><div align="center">90 grados</div></td>
  </tr>
  <tr> 
    <td height="167"> <div align="center"> 
        <p><img src="<?php echo $url;?>60.jpg" width="231" height="144"></p>
      </div></td>
    <td><div align="center"> 
        <p><img src="<?php echo $url;?>90.jpg" width="210" height="163"></p>
      </div></td>
  </tr>
  <tr> 
    <td height="41">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td><div align="center">270 grados</div></td>
    <td><div align="center">300 grados</div></td>
  </tr>
  <tr> 
    <td><div align="center"><img src="<?php echo $url;?>270.jpg" width="197" height="157"></div></td>
    <td><div align="center"><img src="<?php echo $url;?>300.jpg" width="214" height="159"></div></td>
  </tr>
</table>
<p></p>
<p></p>
<p></p>
<p class="autor" align="left">&nbsp; </p>
  </body>
</html>


