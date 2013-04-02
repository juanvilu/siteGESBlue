<link href="../../../news_general.css" rel="stylesheet" type="text/css"> 

<body>
<div class="texto"> 
  <h3><span style="font-family: Tahoma">Captura de Observaciones en Calificaciones</span></h3>
  <p class="autor"><em>Autor: Enrique Trujillo García</em></p>
  <p>En las instituciones educativas es común que los profesores tengan la libertad 
    de exponer sus comentarios respecto al desempe&ntilde;o acad&eacute;mico o 
    personal de un alumno. Tales comentarios son presentados a trav&eacute;s de 
    las boletas o informes de evaluaci&oacute;nes y se constituyen como una excelente 
    forma de comunicaci&oacute;n entre los docentes, alumnos y padres de familia.</p>
  <p>Estos comentarios son independientes de la calificaci&oacute;n o nota y pueden 
    ser emitidos para reconocer o motivar al alumno o bien, a manera de corrección 
    disciplinaria. </p>
</div>

<div class="texto">
  <p><em>Control Escolar GES</em> cuenta con los medios necesarios para que las 
    instituciones puedan implementar esta característica de una forma muy sencilla. 
    Aqu&iacute; le mostramos como hacerlo:</p>
</div>
<ol>
  <li> 
    <div class="texto"> Es indispensable que dentro de la ventana de propiedades 
      de los planes de estudios, se habilite la opción de &quot;<em>Permitir Captura 
      de Observaciones en calificaciones</em>&quot;, como aqu&iacute; se ve:<br>
      <br>
      <img border="0" src="<?php echo $url;?>plan_estudios.jpg"><br>
      <br>
    </div>
  </li>
  <li> 
    <div class="texto">Despu&eacute;s de lo anterior, durante la captura de calificaciones 
      podremos visualizar una columna en donde se podra registrar el comentario 
      del profesor (como es l&oacute;gico, cada alumno deber&aacute; tener su 
      respectiva observaci&oacute;n).<br>
      <br>
      <img border="0" src="<?php echo $url;?>registro_calificaciones_observaciones.jpg"> 
      <br>
      <br>
      Nota Importante: Se podr&aacute;n indicar comentarios de hasta 255 caracteres 
      de extensi&oacute;n<br>
      <br>
    </div>
  </li>
  <li> 
    <div class="texto"> 
      <div align="left">Para incorporar las observaciones o comentarios a los 
        reportes de <em>Control Escolar GES</em> utilizaremos la expresion <em>ObtenerObsCalif</em> 
        que se inserta como una expresi&oacute;n en el dise&ntilde;ador de formatos. 
        La sintaxis es:<br>
        <br>
        <em>ObtenerObsCalif( &lt;numero de alumno&gt;, &lt;plan de estudios&gt;, 
        &lt;tipo de evaluaci&oacute;n&gt;, &lt;etapa de estudios&gt;, &lt;clave 
        de asignatura&gt;, &lt;oportunidad de cursamiento&gt;, &lt;criterio de 
        evaluaci&oacute;n&gt;)</em><br>
        <br>
        Para simplificar la explicaci&oacute;n de la sintaxis diremos que esta 
        expresi&oacute;n deber&aacute; transformarse utilizando campos disponibles 
        en los reportes, de la siguiente forma:<br>
        <br>
        <em>ObtenerObsCalif( NUMEROALUMNO, ID_PLAN, ID_TIPOEVAL, ID_ETAPA, CLAVEASIGNATURA, 
        TIPOEXAMEN, &quot;A&quot; o &quot;B&quot; o &quot;C&quot; ... etc )</em><br>
        <br>
        Los datos o campos anteriores est&aacute;n disponibles en todos los reportes 
        relativos a informaci&oacute;n de calificaciones y el &uacute;nico dato 
        que deberemos indicar manualmente es el <em>criterio de evaluaci&oacute;n</em>.<br>
        <br>
      </div>
       A continuación se muestra una expresión incorporada dentro de la seccion 
      Detalle de una Boleta de Calificaciones:<br>
      <br>
      <img border="0" src="<?php echo $url;?>expresion_observaciones.jpg"><br><br>
      <img border="0" src="<?php echo $url;?>detalle_observaciones.jpg"> <br><br>
    </div>
  </li>
  <li> 
    <div class="texto"> El resultado se podr&aacute; obtener directamente en la 
      boleta o informe de calificaciones.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
     <br><br>
      <img src="<?php echo $url;?>boleta_observaciones.jpg">
    </div>
  </li>
</ol>
<div class="valoracion">
  <p><a href="http://www.grupoges.com.mx">Consulta las caracter&iacute;sticas 
    de Control Escolar GES en su versi&oacute;n 4</a>. <br>
  </p>
</div>
</body>
</html>


