<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Documento sin t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../../../news_general.css" rel="stylesheet" type="text/css">
</head>

<body>
<div align="center"> 
  <h3>C&oacute;mo insertar una gr&aacute;fica en los reportes personalizados</h3>
  <p align="right" class="autor"><em>Autor: Roberto A. Romero N&aacute;jera</em></p>
  <div align="justify"> 
    <p>Como ya es sabido, Control Escolar GES permite al usuario dise&ntilde;ar 
      sus propios reportes a trav&eacute;s del editor de formatos. Dentro de este 
      editor, adem&aacute;s de los elementos est&aacute;ndar que pueden incorporarse 
      a los formatos tales como etiquetas, campos de datos y figuras, encontramos 
      otro elemento visualmente muy atractivo conocido como gr&aacute;fica.</p>
    <p>Incluir una gr&aacute;fica es un proceso que requiere algunos pasos de 
      preparaci&oacute;n, pero con un poco de esfuerzo lograremos tener nuestras 
      gr&aacute;ficas enriqueciendo nuestros reportes.</p>
    <p align="center"><img src="<?php echo $url;?>demo_graficas.jpg"></p>
    <p align="justify">Veamos un ejemplo de una Boleta de Calificaciones tradicional:</p>
    <p align="justify"><font size="2" face="Arial, Helvetica, sans-serif"><img src="<?php echo $url;?>sin_grafica.jpg" align="bottom"> 
      </font></p>
    <p align="justify">Ahora veamos la misma boleta, pero con una Gr&aacute;fica 
      ya incorporada:</p>
    <p align="justify"><font size="2" face="Arial, Helvetica, sans-serif"><img src="<?php echo $url;?>con_grafica.jpg"></font></p>
  </div>
</div>
<div align="center"> 
  <h3 align="left">Procedimiento para insertar la gr&aacute;fica</h3>
  <div align="left">
    <h4>a) Inicializar el espacio de datos de la gr&aacute;fica.<br>
    </h4>
    <p> Para asegurar que nuestra gr&aacute;fica inicie sin valores ajenos, deberemos 
      incorporar una expresi&oacute;n que incluya la funci&oacute;n &quot;GraficaVacia()&quot;. 
    </p>
  </div>
  <p align="left">Es conveniente colocar esta expresi&oacute;n en la seccion T&iacute;tulo 
    o bien en el Encabezado del primer grupo, de acuerdo al dise&ntilde;o de su 
    formato. </p>
  <p align="left"><img src="<?php echo $url;?>click_seccion_titulo.jpg"></p>
  <p align="left">Despu&eacute;s de elegir la secci&oacute;n, insertaremos la 
    expresi&oacute;n para inicializar la Gr&aacute;fica.</p>
  <p align="left"><img src="<?php echo $url;?>expr_grafica_vacia.jpg"></p>
  <h4 align="left">b) Inicializar el espacio de datos de la gr&aacute;fica.</h4>
  <p align="left">Usted deber&aacute; decidir que tipo de informaci&oacute;n desplegar&aacute; 
    la gr&aacute;fica y en qu&eacute; secci&oacute;n del formato podr&aacute; 
    recolectar los datos. </p>
  <p align="left">Por ejemplo:</p>
</div>
<ul>
  <li> 
    <div align="left"> En un formato que imprime informaci&oacute;n por Alumno, 
      casi siempre podr&aacute; recolectar los datos usando la secci&oacute;n 
      <strong>Detalle</strong>. Nuestro ejemplo es una boleta individual, por 
      lo tanto utilizaremos la secci&oacute;n <strong>Detalle</strong>.</div>
  </li>
  <li> 
    <div align="left"> En un formato que imprime calificaciones por Grupos y desea 
      incorporar una gr&aacute;fica en la &uacute;ltima p&aacute;gina con el promedio 
      de cada grupo, quiz&aacute; pueda recolectar los datos en una secci&oacute;n 
      <strong>Pie de Grupo</strong>.</div>
  </li>
</ul>
<div align="center">
<p align="left">Para lo cual usaremos la funcion<strong>GraficaNuevoValor(), 
    </strong>con la cual se incorporar&aacute; un nuevo valor al espacio de datos 
    de la gr&aacute;fica, su forma de uso es la siguiente:</p>
  <p align="left"><strong>Modelo: GraficaNuevoValor( &lt;etiqueta&gt;,&lt;valor 
    entero&gt;,&lt;valor doble&gt;)</strong>.<br>
    <br>
    Donde:</p>
</div>
<ul>
  <li> 
    <div align="left">&lt;etiqueta&gt; es un letrero que identifica el valor en 
      la Gr&aacute;fica, en nuestro ejemplo ser&aacute;n los c&oacute;digos de 
      las materias.</div>
  </li>
  <li> 
    <div align="left">&lt;valor entero&gt;, si va a representar datos n&uacute;meros 
      enteros indique este valor, de lo contrario indique CERO.</div>
  </li>
  <li> 
    <div align="left"> &lt;valor doble&gt; utilice este par&aacute;metro cuando 
      la gr&aacute;fica presente datos como cantidades, calificaciones u otros 
      valores num&eacute;ricos con decimales.</div>
  </li>
</ul>
<div align="center"> 
  <p align="left"><font size="2" face="Arial, Helvetica, sans-serif"><img src="<?php echo $url;?>detalle.jpg"></font></p>
  <h4 align="left">c) Presentar la gr&aacute;fica.</h4>
  <p align="left">Para presentar la gr&aacute;fica se deber&aacute; insertar en 
    alguna secci&oacute;n del reporte (p.e. Pie de p&aacute;gina, Pie de grupo 
    o Sumario) la expresi&oacute;n especial: <strong>'GRAFICA'.</strong></p>
  <p align="left">Esta expresi&oacute;n crear&aacute; y mostrar&aacute; la gr&aacute;fica.</p>
  <p align="left">La sintaxis de la expresi&oacute;n especial GRAFICA es la siguiente:</p>
  <p align="left">Modelo: <strong>GRAFICA=X:ETIQUETA,&lt;VALOR_DOBLE o VALOR_ENTERO&gt;,[3D].</strong></p>
  <p align="left">Donde:</p>
  <ul>
    <li> 
      <div align="left"> con 'X:ETIQUETA', indicamos que graficaremos con base 
        en los valores del espacio de datos de la gr&aacute;fica y desplegaremos 
        r&oacute;tulos utilizando las etiquetas que hemos incorporado con la funci&oacute;n 
        <strong>GraficaNuevoValor()</strong>.</div>
    </li>
    <li> 
      <div align="left"> 
        <div align="left">Con 'VALOR_DOBLE' o 'VALOR_ENTERO' indicaremos el tipo 
          de dato que deseamos graficar. En nuestro ejemplo, al utilizar la funci&oacute;n 
          <strong>GraficaNuevoValor()</strong> utilizamos un valor de tipo DOBLE.</div>
      </div>
    </li>
    <li>
      <div align="left">Opcionalmente puede utilizar el indicador 3D, para indicar 
        que muestre la gr&aacute;fica en tres dimensiones (3D).</div>
    </li>
  </ul>
</div>
<div align="justify"> 
  <h4 align="left">d) Dar el tama&ntilde;o adecuado a la gr&aacute;fica.</h4>
  <p align="left">En las propiedades de la expresi&oacute;n se debera de modificar 
    los valores de ancho y alto, con base en el tama&ntilde;o que se requiera 
    y tomando en cuenta el n&uacute;mero de conceptos que tendra la Gr&aacute;fica, 
    considere que si una gr&aacute;fica debe mostrar m&aacute;s de 10 conceptos 
    tendr&aacute; que contar con un tama&ntilde;o adecuado.</p>
  <p align="center"><font size="2" face="Arial, Helvetica, sans-serif"><img src="<?php echo $url;?>ancho_alto.jpg"></font></p>
  <h4 align="left">e) Cambiar el tipo de gr&aacute;fica.</h4>
  <p align="left">Seleccione la expresi&oacute;n 'GRAFICA' y haciendo &quot;clic&quot; 
    derecho despliegue el men&uacute; contextual. </p>
  <p align="center"><font size="2" face="Arial, Helvetica, sans-serif"><img src="<?php echo $url;?>contextual_mascara.jpg"></font></p>
  <p align="left">Seleccione la opci&oacute;n &quot;Definir mascara de salida&quot; 
    y teclee alguno de los siguientes valores: </p>
</div><ul>
  <li> 
    <div align="left"><strong>HORIZ_BAR</strong>. Este es el tipo de gr&aacute;fica 
      est&aacute;ndar. </div>
  </li>
  <li> 
    <div align="left"><strong>LINEAR</strong>. Con este mostrar&aacute; una gr&aacute;fica 
      de l&iacute;neas.</div>
  </li>
  <li>
    <div align="left"><strong>PIE</strong>. Para mostrar las llamadas gr&aacute;ficas 
      de pastel o pie. Cada porci&oacute;n del pastel corresponder&aacute; a un 
      porcentaje de la cantidad global que se graficar&aacute;.</div>
  </li>
</ul>
<div align="center">
  <table width="95%" border="0" cellspacing="5" cellpadding="5">
    <tr> 
      <td><font size="2" face="Arial, Helvetica, sans-serif"><img src="<?php echo $url;?>barras.jpg"></font></td>
      <td><font size="2" face="Arial, Helvetica, sans-serif"><img src="<?php echo $url;?>linear.jpg"></font></td>
    </tr>
  </table>
  <h4 align="left">Consejos para realizar una buena gr&aacute;fica</h4>
  <div align="justify" class="valoracion"> 
    <p align="justify">Una gr&aacute;fica es la representaci&oacute;n visual de 
      un conjunto de datos que facilita la comprensi&oacute;n y su r&aacute;pido 
      an&aacute;lisis. Las gr&aacute;ficas pueden mostrar relaciones, comparaciones 
      y distribuciones de un conjunto de datos.</p>
    <p align="justify">Una gr&aacute;fica bien hecha debe cumplir con los siguientes 
      elementos: </p>
    <ul>
      <li> 
        <div align="left">Complementa al texto.</div>
      </li>
      <li> 
        <div align="left"> No duplica el mensaje que presenta el texto.</div>
      </li>
      <li> 
        <div align="left"> No muestra un exceso de informaci&oacute;n.</div>
      </li>
      <li> 
        <div align="left">Es f&aacute;cil de entender, no necesita explicaci&oacute;n 
          adicional. Sus elementos son f&aacute;ciles de leer.</div>
      </li>
    </ul>
  </div>
  <h4></h4>
  <p align="justify">&nbsp;</p>
</div>
</body>
</html>
