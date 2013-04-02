<head>
<title>WebAdmin.</title>

<link href="news_general.css" media="screen" rel="stylesheet" type="text/css" />

</head>
<body>

  
<h3>&iquest;C&oacute;mo realizar sincronizaci&oacute;n con WebAdmin?</h3>
  <p align="right" class="autor"><em>Autor: Margarita Lozano Neveros</em></p>
  
<p align="justify">Control Escolar GES para Internet (WebGES) es fundamentalmente 
  una aplicaci&oacute;n de consulta, que a trav&eacute;s de Internet pone a disposici&oacute;n 
  de los usuarios (alumnos, padres, profesores, etc.) la informaci&oacute;n de 
  su inter&eacute;s. Las operaciones diarias de gesti&oacute;n y operaci&oacute;n 
  son desarrolladas normalmente a trav&eacute;s de la aplicaci&oacute;n Control 
  Escolar GES.</p>

<p align="justify">Si la instituci&oacute;n educativa, por su propia conveniencia 
  decide <strong>&quot;hospedar&quot; su aplicaci&oacute;n Web con alg&uacute;n 
  proveedor externo,</strong> necesariamente deber&aacute; usar una base de datos 
  alterna para almacenar la informaci&oacute;n que ser&aacute; mostrada en Internet. 
  En este caso se utiliza el software MySQL Server como gestor de base de datos. 
</p>
<p align="justify">La base de datos secundaria deber&aacute; ser alimentada con 
  informaci&oacute;n procesada en la base de datos principal de Control Escolar 
  GES, mediante un sencillo proceso llamado <strong>Sincronizaci&oacute;n</strong>.<br>
  <br></p>
<h4>Sincronizaci&oacute;n de WebGES montado con MySQL.</h4>
<p>Para iniciar el proceso de sincronizaci&oacute;n debemos realizar dos sencillos 
  pasos:</p>
<p><strong>Paso 1:</strong> Solicitar la utiler&iacute;a WebAdmin y crear un acceso 
  directo al escritorio.</p>
<p><img class='noborder' src="<?php echo $url;?>IconoWebAdmin.jpg" width="87" height="86" /></p>
<p><strong>Paso 2:</strong> Crear una conexi&oacute;n a la Base de Datos MySQL 
  por ODBC; si Usted no tiene experiencia en este tipo de configuraci&oacute;n 
  solicite el apoyo de un asesor de Grupo GES.</p>
<p>Ahora accederemos a la aplicaci&oacute;n WebAdmin.</p>
<p><strong>Paso 3: </strong>Desde el submen&uacute; <strong>[Ad</strong><strong>ministraci&oacute;n]</strong>, 
  haga &quot;clic&quot; en la opci&oacute;n <strong>[Sincronizar base de datos 
  WEB...]</strong>.</p>
<p align="left"><img src="<?php echo $url;?>ConMySQL.jpg" width="474" height="194"><br><br>
De esta forma se abrira la ventana de Sincronizaci&oacute;n. 
<p><img src="<?php echo $url;?>VentanaSincronizarVacio.jpg" width="625" height="455"></p>
<p align="left"><strong>Paso 4:</strong> Ahora escriba el Alias del BDE Local, 
  que generalmente ser&aacute; ESCOLAR. El BDE es el mecanismo por el cual se 
  accede a las bases de datos.</p>
<div align="justify" class="texto"> 
  <p><img src="<?php echo $url;?>seleccionarAlias.jpg" width="644" height="42"></p>
</div>
<p><strong>Paso 5:</strong> Seleccionar el ciclo escolar que desee sincronizar. 
  Autom&aacute;ticamente se mostrar&aacute; el ciclo escolar de trabajo actual 
  de Control Escolar GES.</p>

<div align="justify" class="texto"> <img src="<?php echo $url;?>seleccionarCiclo.jpg" width="665" height="37"></div>
<p><strong>Paso 6:</strong> Luego deber&aacute; marcar las opciones que desee 
  sincronizar y dar clic en la opci&oacute;n <strong>[Iniciar Sincronizaci&oacute;n...]</strong>. 
  Usted podr&aacute; sincronizar información de catálogos e información preprocesada:</p>
<ul>
  <li><strong>Cat&aacute;logos</strong>. Informaci&oacute;n básica para procesos 
    más elaborados.</li>
  <li><strong>Informaci&oacute;n preprocesada</strong>. Información que ya ha 
    pasado por un proceso de elaboración y posiblemente de interpretación tales 
    como Adeudos, Estados de Cuenta, etc.</li>
</ul>
<div align="justify" class="texto"> 
  <p><img src="<?php echo $url;?>tipoSincronizacion.jpg" width="658" height="370"></p>
  <p>Inmediatamente se iniciar&aacute; el proceso de sincronizaci&oacute;n de 
    una o m&aacute;s opciones; el avance de la sincronizaci&oacute;n se mostrar&aacute; 
    en el panel del lado derecho.</p>
  <p><img src="<?php echo $url;?>SincronizacionFinalizada.jpg" width="694" height="506"></p>
</div>
<div align="justify" class="texto"> 
  <p><strong>Recomendaciones:</strong></p>
</div>
<ul>
  <li>La sincronizaci&oacute;n de informaci&oacute;n deber&aacute; realizarse 
    tan frecuente como la Instituci&oacute;n lo considere necesario y solo para 
    aquellas opciones que sufren cambios constantes, como pagos y calificaciones.</li>
  <li>Adem&aacute;s, durante la sincronizaci&oacute;n se recomienda que los usuarios 
    no est&eacute;n accesando a la aplicaci&oacute;n Control Escolar GES.</li>
</ul>
<p><a href="http://www.grupoges.com.mx/grupoges_webges.php">Consulta las caracter&iacute;sticas de 
  Control Escolar GES para Internet </a>. </p>
  
  </body>