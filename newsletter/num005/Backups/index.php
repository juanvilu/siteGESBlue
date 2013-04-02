<html>
<head>
<title>Control Escolar GES</title>
 
<link href="general.css" media="screen" rel="stylesheet" type="text/css" />

<style type="text/css">

</style>
</head>
<body>

  <h3>&iquest;C&oacute;mo realizar respaldos?</h3>
  <p class="autor"><em>Autor: Jorge E. L&oacute;pez S&aacute;nchez</em></p>
  <h4>La importancia de los respaldos</h4>
  <p>En la actualidad ninguna empresa que cuente con sistemas inform&aacute;ticos 
    como base de su operaci&oacute;n cotidiana puede ignorar la importancia de 
    una buena agenda de respaldos.</p>
  
<p>Muchos de los usuarios hemos aprendido &eacute;sto despu&eacute;s de alguna 
  experiencia &quot;tr&aacute;gica&quot;, cuando un d&iacute;a llegamos a nuestro 
  lugar de trabajo y nuestra computadora simplemente no funciona. Por supuesto, 
  el drama se incrementar&aacute; si en esa computadora ten&iacute;amos -&iexcl;s&iacute;, 
  ten&iacute;amos!- informaci&oacute;n que deb&iacute;amos entregar a alg&uacute;n 
  cliente, bases de datos importantes, archivos personales, etc.</p>
  
<p>Las principales medidas de precauci&oacute;n para evitar p&eacute;rdida de 
  informaci&oacute;n son:</p>

<ul>
  <li> Instalar fuentes de poder ininterrumpibles (UPS o tambi&eacute;n llamados 
    NO-BREAKS), que mantendr&aacute;n la energ&iacute;a en nuestros equipos de 
    c&oacute;mputo cuando sucedan episodios de falla de energ&iacute;a el&eacute;ctrica 
    d&aacute;ndonos al menos la oportunidad de apagar la computadora de forma 
    correcta.</li>
  <li>Obtener asesor&iacute;a de un especialista calificado en instalaciones el&eacute;ctricas 
    que nos asegure que nuestras computadoras est&aacute;n conectadas a l&iacute;neas 
    el&eacute;ctricas con las especificaciones t&eacute;cnicas adecuadas.</li>
  <li>Finalmente, el m&aacute;s importante: realizar respaldos peri&oacute;dicos 
    para asegurar que contamos con una copia de nuestra informaci&oacute;n. </li>
</ul>

  <p>Como usted probablemente ya sabe, Control Escolar GES es un software de gesti&oacute;n 
    para instituciones educativas que apoya en todos los procesos importantes 
    de una instituci&oacute;n educativa (desde las solicitudes de informes, pasando 
    por las inscripciones hasta la titulaci&oacute;n). Por esta raz&oacute;n, 
    la base de datos de Control Escolar GES debe ser considerada un elemento fundamental 
    en la operaci&oacute;n de cualquier instituci&oacute;n y aqu&iacute; mostraremos 
    los pasos para realizar respaldos de manera r&aacute;pida y eficiente.</p>

    <h4>El procedimiento para realizar respaldos</h4>
    
  <p>Control Escolar GES cuenta con una utiler&iacute;a para realizar los respaldos 
    de su base de datos. Se sugiere usar esta utiler&iacute;a porque genera archivos 
    &uacute;nicos y compactados por cada respaldo, en lugar de copiar el archivo 
    completo de la base de datos en cada ocasi&oacute;n -que puede llegar a ser 
    hasta dos veces m&aacute;s grande que el archivo compactado-.</p>
  <p>Busque la Utiler&iacute;a para Respaldos, en el grupo de programas Control 
    Escolar GES.</p>

    
  <p align="left"><img src="<?php echo $url;?>menu_inicio_gesv4.gif"/></p>
  <p>Los respaldos generalmente deben ser realizados por un administrador del 
    sistema, por lo cual se solicitar&aacute; una contrase&ntilde;a para permitir 
    el acceso.</p>
  <p><img src="<?php echo $url;?>logon_as_admin.gif"/></p>

    
  <p>La utiler&iacute;a de respaldo est&aacute; estructurada para permitir Respaldar 
    la Base de Datos y tambi&eacute;n para permitir Restaurar una base de datos 
    desde un respaldo (cuando haya emergencias).</p>

<p>Como se puede apreciar esta utiler&iacute;a detecta autom&aacute;ticamente 
  los par&aacute;metros y configuraci&oacute;n de la base de datos de Control 
  Escolar GES, identificando el nombre del servidor donde est&aacute; alojada 
  la base de datos, la ruta hacia la base misma y el tipo de servidor (que puede 
  ser Windows o Linux).</p>
<p align="left"><img src="<?php echo $url;?>ventana_1.gif"/></p>
  
  
<p>Para realizar un respaldo permanezca en la primera pesta&ntilde;a y permita 
  que la utiler&iacute;a genere autom&aacute;ticamente un nombre para el archivo 
  de respaldo. Autom&aacute;ticamente los archivos se generar&aacute;n con un 
  nombre compuesto con la fecha actual y la extensi&oacute;n &quot;.BAK&quot; 
  (p.e. respaldo_18_may_2007.bak) en una carpeta llamada &quot;respaldos&quot; 
  ubicada dentro de la carpeta de sistema (p.e. c:\escolar\respaldos).</p>
<p><img src="<?php echo $url;?>seccion_1.gif"/></p>
<p>Si desea indicar libremente la ubicaci&oacute;n y nombre del respaldo, seleccione 
  la opci&oacute;n &quot;Permitirme indicar el nombre del archivo&quot;.</p>

    
<p>Cuando est&eacute; listo para iniciar el respaldo haga &quot;clic&quot; en 
  la opci&oacute;n [Proceder al Respaldo &gt;&gt;]</p>
<p align="left"><img src="<?php echo $url;?>proceso_respaldo.gif"/></p>

    
<p>La duraci&oacute;n del proceso de respaldo es variable de acuerdo a la cantidad 
  de informaci&oacute;n que contenga la base de datos. Cuando el proceso finalice 
  se indicar&aacute; as&iacute;:</p>
<h4><img src="<?php echo $url;?>fin_respaldo.gif"/></h4>    
    
<p>Nota: Su informaci&oacute;n ser&aacute; segura solamente cuando esos archivos 
  de respaldo sean copiados regularmente a un medio seguro como un disco alterno, 
  cds, dvds, unidades zip o cintas de respaldo.</p>
<p>En esta imagen se observa la carpeta de respaldos, mostrando varios archivos 
  de respaldo generados previamente. Estos archivos pueden ser compactados con 
  las aplicaciones WinZip o WinRAR para disminuir aun m&aacute;s su tama&ntilde;o.</p>
<p><img src="<?php echo $url;?>carpeta_escolar_respaldos.gif"></p>
<p>Una ventaja adicional de la utiler&iacute;a de respaldos, es que puede ser 
  ejecutada desde cualquier estaci&oacute;n de trabajo conectada de Control Escolar 
  GES, por lo cual no existe la necesidad de trasladarse f&iacute;sicamente al 
  servidor de base de datos.</p>
<h4>&iquest;C&oacute;mo restaurar una base de datos a partir de un archivo de 
  respaldo? </h4>
<p>Cuando ocurra alguna emergencia Usted podr&aacute; tomar un archivo de respaldo 
  desde alg&uacute;n medio donde haya almacenado sus respaldos y con ese archivo 
  generar una nueva base de datos, a este proceso se le conoce como <strong>restauraci&oacute;n</strong>.</p>
<p>Primero deber&aacute; activar la segunda pesta&ntilde;a de la Utiler&iacute;a 
  para Respaldos, ah&iacute; deber&aacute; indicar el nombre del archivo respaldado.</p>
<p align="left"><img src="<?php echo $url;?>clic_restaurar.gif"></p>
<p align="left">Si lo desea puede utilizar el bot&oacute;n auxiliar para seleccionar 
  un archivo de respaldo de forma visual.</p>
<p align="left"><img src="<?php echo $url;?>seleccionar_backupfile.gif"></p>
<p align="left">Cuando haya tecleado el nombre del archivo (o seleccionado), haga 
  &quot;clic&quot; en la opci&oacute;n [ <strong>Restaurar este Archivo &gt;&gt;</strong>] 
  lo cual iniciar&aacute; inmediatamente el proceso de restauraci&oacute;n.</p>
<p align="left"><img src="<?php echo $url;?>proceso_restauracion.gif"></p>
<p align="left">Al concluir aparecer&aacute; un aviso de confirmaci&oacute;n, 
  con lo cual su base de datos estar&aacute; lista para ser usada de forma normal.</p>
<p align="left"><img src="<?php echo $url;?>fin_restaura.gif"/></p>

    
<p><a href="http://www.grupoges.com.mx">- Consulta las características de Control 
  Escolar GES en su versión 4.</a><br>
<a href="http://www.grupoges.com.mx/grupoges_experiencias.php">- Vea algunas 
  experiencias de otros usuarios con la implantaci&oacute;n de Control Escolar 
  GES.</a></p>
  </body>
</html>