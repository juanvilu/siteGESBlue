<head>
<title>Recursamiento.</title>

<link href="news_general.css" media="screen" rel="stylesheet" type="text/css" />

</head>
<body>
<div class="texto"> 
  <h3>Manejo del proceso de recursamiento.</h3>
  <p align="right" class="autor"><em>Autor: Margarita Lozano Neveros</em></p>
  <p align="justify">En las Instituciones Educativas de educaci&oacute;n superior, 
    se observa con mucha frecuencia la necesidad de manejar alumnos que <strong>no 
    aprobaron</strong> asignaturas en ciclos escolares anteriores. Estos alumnos 
    se incorporan a un tratamiento especial que les permite cursar esas asignaturas 
    por segunda o tercera ocasi&oacute;n.<br>
    <br>
    Para dar soluci&oacute;n a esta necesidad <strong>Control Escolar GES</strong> 
    cuenta con la funcionalidad llamada <strong>Recursamiento, </strong>que mostraremos 
    brevemente en este art&iacute;culo.</p>
  <p align="justify"><strong>Escenario Planteado</strong></p>
  <p align="justify">Para comprender el siguiente ejemplo tenemos a una estudiante 
    cuya &uacute;nica asignatura reprobada es &quot;MATEM&Aacute;TICAS I&quot;. 
  </p>
  <p align="justify">En el siguiente ciclo escolar, ella contin&uacute;a sus estudios 
    de forma normal pero debe inscribirse en un grupo especial para volver a tomar 
    la clase de MATEM&Aacute;TICAS I e intentar aprobarla en segunda oportunidad.</p>
  <p align="justify">Ahora veamos el procedimiento...</p>
  <p align="justify"><strong>Paso 1: Ubicar la asignatura reprobada.</strong></p>
  <p align="justify">Desde el men&uacute; <strong>Control Acad&eacute;mico </strong> 
    submen&uacute; <strong>[Registro de Calificaciones Individuales]</strong>, 
    seleccionamos a nuestra alumna, (p.e. BRIBIESCA CENDEJAS BARBARA). Ahora seleccionaremos 
    la asignatura reprobada (MATEMATICAS I) para consultar sus calificaciones 
    y comprobar que efectivamente fue reprobada.</p>
<p><img class="noborder" src="<?php echo $url;?>Historial.jpg"></p>
  <p><strong>Paso 2: Generar el recursamiento.</strong> Posteriormente, sobre 
    el nombre de la asignatura haremos &quot;clic&quot; con el bot&oacute;n derecho 
    del mouse y en el men&uacute; contextual seleccionaremos la opci&oacute;n 
    <strong>[Recursar esta Asignatura]</strong>.</p>
<p><img class="noborder" src="<?php echo $url;?>Recursar.jpg"></p>
  <p>Esto nos dar&aacute; como resultado la creaci&oacute;n de un nuevo elemento 
    &quot;MATEMATICAS I (RECURSAMIENTO 1)&quot;, que podr&aacute; mantener sus 
    propias calificaciones para las sucesivas oportunidades.</p>
  <p><strong>Paso 3: Captura de Calificaciones.</strong></p>  <p> Al concluir el paso anterior ya podremos capturar las nuevas calificaciones 
    para la asignatura. Como se puede apreciar en la imagen se cuenta con un nuevo 
    elemento de MATEMATICAS I.</p>
  <p>Usted podr&aacute; capturar calificaciones directamente a trav&eacute;s de 
    calificaciones individuales, si desea capturar calificaciones por grupo vea 
    el siguiente paso.</p>
<p><img class="noborder" src="<?php echo $url;?>ParaVolveraCapturarLaCali.jpg"></p>
  <p><strong>Paso 4: Inscribir a la Alumna en el grupo en que recursara la materia.</strong></p>
  <p align="justify">Seguramente nuestra alumna, tomar&aacute; la clase &quot;MATEMATICAS 
    I&quot; con un grupo de alumnos diferente al que ella pertenece. Para inscribirla 
    en alg&uacute;n grupo seleccionamos &quot;MATEMATICAS I (RECURSAMIENTO 1)&quot; 
    y usando el men&uacute; contextual (&quot;clic&quot; con el bot&oacute;n derecho) 
    seleccionaremos la opci&oacute;n <strong>[Inscribir para cursar en otro grupo...]</strong> 
    en donde elegiremos el grupo que corresponda.</p>
  <p><strong><img class="noborder" src="<?php echo $url;?>InscribirEnOTroGrupo.jpg"></strong></p>
  <p>Aqu&iacute; estamos indicando que la alumna cursar&aacute; en el grupo A-901.</p>
  <p><strong><img src="<?php echo $url;?>usar_grupo.jpg"></strong></p>
  <p>Finalmente, nuestra alumna formar&aacute; parte del grupo A-901 durante el 
    ciclo escolar actual, donde volver&aacute; a cursar MATEMATICAS I bajo la 
    modalidad de recursamiento. Lo anterior tambi&eacute;n le permitir&aacute; 
    cursar sus materias normales del ciclo actual de forma simult&aacute;nea.</p>
</div>

<div class="valoracion"> 
  <p><a href="http://www.grupoges.com.mx">Consulta las caracter&iacute;sticas 
    completas de <strong>Control Escolar GES</strong> en su versi&oacute;n 4</a>. 
  </p>
</div>
  
</body>