<head>
<title>Manejo de Literales</title>

<link href="news_general.css" media="screen" rel="stylesheet" type="text/css" />

<link href="../../../news_general.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="texto"> 
  <h3>&iquest;C&oacute;mo ejecutar Scripts de actualizaci&oacute;n a la Base de 
    Datos?</h3>
    
  <p align="right" class="autor"><em>Autor: Margarita Lozano Neveros</em></p>
  <p align="justify">Grupo GES cuenta con diversas utilerias que le permiten obtener 
    el m&aacute;ximo provecho de sus aplicaciones; una de ellas es el programa 
    <strong>Scripts40</strong>, que est&aacute; disponible para su descarga en 
    el sitio ftp://www.grupoges.com.mx, en la carpeta Utilerias (SCRIPTS40.ZIP).</p>
  <p align="justify">Una vez que descargamos el archivo Scripts40.zip del sitio, 
    lo debemos extraer (utilizando alg&uacute;n programa como <strong>WinZip</strong> 
    o <strong>WinRAR</strong>) en cualquier directorio de nuestra PC; y mediante 
    la creaci&oacute;n de un acceso directo al escritorio, tendremos acceso f&aacute;cil 
    a la utiler&iacute;a dando doble clic en el &iacute;cono correspondiente.</p>
</div>
 
<div class="texto">
  <p align="center"><img src="<?php echo $url;?>EnElEscritorio.jpg" width="113" height="115" /></p>
  <p align="left">Cabe mencionar que dicho programa se debera ejecutar en una 
    computadora en donde se haya instalado previamente la aplicaci&oacute;n Control 
    Escolar GES; adem&aacute;s es conveniente que durante la aplicaci&oacute;n 
    de scripts, no se encuentren utilizando el sistema otros usuarios.</p>
  <p>Una vez que ingresemos a la ventana principal de la Utileria veremos dos 
    pesta&ntilde;as: <strong>Ejecutar Script de Modificaci&oacute;n</strong> y 
    la de <strong>Insertar Script SQL</strong>.</p>
  <p align="center"><img src="<?php echo $url;?>VentanaPrincipal.jpg" width="595" height="408" /></p>
  <h3 align="left"><strong>Ejemplo de Ejecuci&oacute;n de un Script de Modificaci&oacute;n.</strong></h3>
  <p align="left"><strong>CASO 1:</strong></p>
  <p>Esta opci&oacute;n nos permite ejecutar scripts para corregir alguna informaci&oacute;n 
    que hayamos capturado erroneamente en nuestras tablas o actualizar algun procedimiento 
    de la base de datos. Para estos casos Grupo GES les proporcionar&aacute; los 
    scripts, generalmente mediante archivos de texto (ASCII) que usted podr&aacute; 
    abrir desde el block de notas.</p>
  <p><img src="<?php echo $url;?>EjecutandoUnScript.jpg" width="536" height="138"></p>
  <p>Para ejecutar dicho script debemos copiarlo a nuestra &aacute;rea de texto 
    y hacer &quot;clic&quot; en el bot&oacute;n <strong>Ejecutar Instrucci&oacute;n</strong>. 
    <img src="<?php echo $url;?>EjecutarInstruccion.jpg" width="142" height="31" class="noborder"> 
  </p>
</div>
<p align="center"><img src="<?php echo $url;?>EjecutarScript1.jpg" width="592" height="407" /></p>
<p align="left">Cuando el script, se haya ejecutado correctamente el sistema lo 
  informar&aacute; como se muestra en la imagen anterior.</p>
<p align="left">La opci&oacute;n <img src="<?php echo $url;?>Siguiente.jpg" width="120" height="36" class="noborder"> 
  nos permitir&aacute; ejecutar otro script.</p>
<p align="left"><strong>CASO 2:</strong></p>
<p align="left">Ocasionalmente Grupo GES le proporcionar&aacute; archivos preparados 
  con varios scripts que se podr&aacute;n ejecutar de forma autom&aacute;tica. 
</p>
<p align="left">Estos archivos podr&aacute;n ser ejecutados utilizando la opci&oacute;n 
  <img src="<?php echo $url;?>EjecutarDesdeUnArchivo.jpg" class="noborder">.</p>
<div class="texto"></div>
<p align="center"><img src="<?php echo $url;?>EjecutarScript2.jpg" width="594" height="407" /></p>
<div class="texto">
  <p>En el archivo.txt los scripts deben estar ordenados de la siguiente forma 
    (en la imagen podemos observar que se van a ejecutar 5 scripts y todos estan 
    separados mediante un numero y un par&eacute;ntesis que cierra).</p>
  <p align="center"><img src="<?php echo $url;?>EjecutandoVariosScripts.jpg" width="442" height="292" /></p>

  <p>La utiler&iacute;a <strong>Scripts40</strong> procesar&aacute; autom&aacute;ticamente 
    todos los scripts que se encuentren en el archivo seleccionado.</p>
  <h3>Scripts de Consulta.</h3>

  <p><strong>La opci&oacute;n de Insertar Script SQL</strong>. Nos permite mediante 
    el Lenguaje de Consulta Estructurado (SQL) ejecutar <strong>consultas</strong> 
    (no realizan ninguna actualizaci&oacute;n ni modificaci&oacute;n), con el 
    fin de recuperar informaci&oacute;n de inter&eacute;s de nuestra Base de Datos 
    de una forma sencilla; como en el siguiente ejemplo:</p>
</div>
<p align="center"><img src="<?php echo $url;?>InsertarScriptSQL.jpg" width="595" height="408" ></p>
<div class="texto">Esta utiler&iacute;a tiene una funci&oacute;n muy importante, 
  pero tambi&eacute;n puede llegar a suponer un riesgo de seguridad, por favor 
  evite que esta utiler&iacute;a se encuentre accesible libremente para los usuarios. 
</div>
<p><a href="http://www.grupoges.com.mx">Consulta las caracter&iacute;sticas de 
  Control Escolar GES en su versi&oacute;n 4</a>. </p>
  
  </body>