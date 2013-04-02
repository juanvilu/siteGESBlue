
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sp" lang="sp">

<head>
<link href="general.css" media="screen" rel="stylesheet" type="text/css" />

<style type="text/css">

-->
</style>
</head>
<body>
<h3>Uso de funciones avanzadas en el Editor de Formatos</h3>
<p class="autor"><em>Enrique Trujillo García</em></p>
<p>Como ya lo hemos mencionado en los artículos anteriores de nuestro boletín, 
  una de las grandes ventajas de <strong>Control Escolar GES</strong> es su potente 
  editor de formatos, con el cual podemos realizar casi todo tipo de documentos 
  tanto oficiales como internos. En esta ocasi&oacute;n mostraremos un ejemplo 
  del uso de funciones avanzadas dentro de dicho editor de formatos.</p>
  La din&aacute;mica de las instituciones educativas exige que los profesores 
se involucren en situaciones externas a su actividad fundamental, muchas veces 
deben ejercer un papel de informadores de la situación financiera de los alumnos 
respecto a los pagos de colegiaturas y sus respectivos adeudos. Es por ello que 
en este apartado veremos como generar una lista de asistencia que incluya informaci&oacute;n 
respecto a los adeudos de los alumnos de un grupo. 
<p>Para incluir el adeudo de cada alumno utilizaremos la funci&oacute;n avanzada<strong> 
  ObtenerAdeudo</strong>, que nos permite incorporar en cualquier reporte la cantidad 
  del adeudo que presenta un alumno. </p>
<p>Todas las funciones avanzadas deben utilizarse de acuerdo a una sintaxis, es 
  decir, la forma correcta de operar seg&uacute;n cada una de ellas:</p>
<p align="left"><strong>Sintaxis: </strong> <em>ObtenerAdeudo(&lt;ID del alumno&gt;, 
  &lt;tipo de adeudo&gt;, [opcionalmente: &lt;año&gt;, &lt;mes&gt;, &lt;concepto&gt;] 
  ).</em> </p>
  <ul>
    <li> 
      
    <p align="left"><strong>ID alumno</strong> - Número de Alumno (id interno). 
  <li> 
      
    <p align="left"><strong>Tipo de Adeudo </strong>- 'CANT' si desea saber la 
      cantidad del adeudo o 'DET' si desea conocer todo los diferentes conceptos 
      con adeudo. 
  <li> 
      
    <p align="left"><strong>Año, Mes y Concepto</strong>. Indique estos datos 
      si desea filtrar por algún concepto espec&iacute;fico, por ejemplo la inscripci&oacute;n 
      o reinscripci&oacute;n. 
  </li>
  </ul>
  
    
<p>En este ejemplo incorporaremos esta funci&oacute;n usando una expresi&oacute;n 
  con la sintaxis b&aacute;sica con la cual solo nos proporcionar&aacute; la cantidad 
  de Adeudo (en caso de que no exista adeudo la cantidad de adeudo ser&aacute; 
  CERO).</p>
<p><img border="0" src="<?php echo $url;?>obtener_adeudo1.jpg"> <br>
  <br>
  <img border="0" src="<?php echo $url;?>obtener_adeudo2.jpg"><br>
</p>
<p>El resultado de esta expresi&oacute;n en cualquier reporte sería el siguiente.</p>
<p><img border="0" src="<?php echo $url;?>reporte_obtener_adeudo.jpg"> </p>
<p>Con ello tenemos la ventaja de utilizar un documento orientado al profesor 
  incluyendo un dato &quot;especial&quot; que le permite informar a alg&uacute;n 
  alumno si cuenta con adeudo.</p>
<h4>Ejemplo de otras funciones avanzadas:</h4>
<ul>
  <li><strong>CalculaEdad</strong>( &lt;fecha de nacimiento&gt; ). Permite obtener 
    la edad de alg&uacute;n alumno o profesor o empleado, con base en su fecha 
    de nacimiento.</li>
  <li><strong>IMGFILE = &lt;archivo de imagen&gt;.</strong> Permite incorporar 
    una imagen desde un archivo gr&aacute;fico externo en formato BMP o JPG.</li>
  <li><strong>BARCODE</strong> <strong>= &lt;dato para calcular el c&oacute;digo&gt;</strong>. 
    Permite incorporar un c&oacute;digo de barras bajo el est&aacute;ndar EAN13. 
  </li>
</ul>
<div class="valoracion">
  <p>Vea como incorporar un c&oacute;digo de barras dentro de un formato impreso.</p>
  <p><a href="http://www.grupoges.com.mx/grupoges_newsletter.php?url=codigo_barras&numero=3&id_tipo=2&id_num=3&fecha=22/Ene/2007">- 
    Bolet&iacute;n electr&oacute;nico edici&oacute;n No. 3</a> <br>
<a href="http://www.grupoges.com.mx/grupoges_experiencias.php">- Vea algunas 
  experiencias de otros usuarios con la implantaci&oacute;n de Control Escolar 
  GES.</a>	
  </p>
</div>
</body>
</html>


