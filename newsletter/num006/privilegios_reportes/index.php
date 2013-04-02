<html>
<head>
<title>Control Escolar GES</title>
 
<link href="general.css" media="screen" rel="stylesheet" type="text/css" />

<link href="../../../news_general.css" rel="stylesheet" type="text/css">
</head>
<body>

  
<h3>&iquest;C&oacute;mo agregar niveles de seguridad a sus reportes?</h3>
  <p class="autor"><em>Autor: Jorge E. L&oacute;pez S&aacute;nchez</em></p>
  
<h4>&iquest;Por qu&eacute; es importante la seguridad?</h4>
  
<p>La seguridad en el manejo de la informaci&oacute;n no es tema exclusivo de 
  grandes consorcios ni de empresas multinacionales y cada organizaci&oacute;n 
  sin importar su tama&ntilde;o debe establecer sus propias pol&iacute;ticas respecto 
  a las restricciones o a la privacidad de la informaci&oacute;n que se maneja 
  a su interior.</p>
  
<p>Control Escolar GES permite a las instituciones educativas establecer distintos 
  niveles de seguridad en el manejo de su informaci&oacute;n, por ejemplo:</p>
<ul>
  <li><strong>Seguridad en el ingreso al sistema</strong>. A cada usuario se le 
    asigna un nombre de acceso y una contrase&ntilde;a que se almacena encriptada 
    o codificada.</li>
  <li><strong>Restricciones por usuario al ingresar a cada una de las opciones</strong>. 
    A cada usuario se le asignan ciertos permisos o privilegios para que solo 
    pueda acceder a la informaci&oacute;n relativa a su &aacute;rea y responsabilidad.</li>
  <li><strong>Restricciones a nivel de cada ventana para permitir realizar ciertas 
    funciones</strong>. A pesar de que alg&uacute;n usuario pueda acceder a cierta 
    opci&oacute;n, sus posibilidades pueden estar limitadas a hacer &uacute;nicamente 
    consultas o bien a realizar operaciones m&aacute;s avanzadas.</li>
  <li><strong>Restricciones a nivel de formatos impresos</strong>. Se usan para 
    impedir que usuarios ajenos a las &aacute;reas o departamentos espec&iacute;ficos 
    consulten informaci&oacute;n que est&aacute; fuera de su alcance.</li>
</ul>
<p>A continuaci&oacute;n Usted conocer&aacute; la forma en que los formatos disponibles 
  en un reporte pueden ser protegidos y mantenidos con alto grado de privacidad.</p>

    
<h4>Tipos de reportes</h4>
<p>En Control Escolar GES existen dos tipos de reportes: los que est&aacute;n 
  dise&ntilde;ados de forma cerrada de acuerdo a ciertas condiciones (llamados 
  <em>predeterminados</em>) y los que pueden adaptarse a las necesidades propias 
  de cada usuario o grupo de usuarios (llamados <em>personalizados</em>).</p>
<p>Los r<strong>eportes predeterminados</strong> contienen informaci&oacute;n 
  muy general, no pueden alterarse y tampoco pueden protegerse con restricciones 
  de seguridad. En cambio los reportes personalizados, permiten a los usuarios 
  desarrollar un dise&ntilde;o propio y por lo tanto tambi&eacute;n pueden protegerlos 
  con restricciones de seguridad.</p>
<p>Para este ejemplo tomaremos un reporte sencillo de lista de alumnos. En &eacute;l 
  se observan dos formatos predeterminados (enmarcados con signos mayor qu&eacute; 
  y menor qu&eacute; &lt; &gt; ) y 5 formatos dise&ntilde;ados por alg&uacute;n 
  usuario.</p>
<table width="250" border="0" cellspacing="3" cellpadding="1">
  <tr>
    <td width="100"><img src="<?php echo $url;?>ventana_lista_formatos.jpg"></td>
    <td width="150" class="texto">Recordemos que los formatos predeterminados 
      no pueden protegerse con restricciones de seguridad, y solo nos enfocaremos 
      a los formatos personalizados.</td>
  </tr>
</table>
<p>Por principio, todos los formatos personalizados podr&aacute;n ser vistos por 
  todos los usuarios, pero solamente el administrador del sistema puede crear 
  nuevos formatos, editarlos y eliminarlos. Con lo anterior podemos decir que 
  nuestras listas de alumnos pueden ser vistas por cualquier usuario que ingrese 
  a esta opci&oacute;n.</p>    
    
<p>Para activar la protecci&oacute;n a nuestras listas debemos ingresar como Administrador 
  y utilizando el men&uacute; contextual (haciendo &quot;clic&quot; con el bot&oacute;n 
  derecho del mouse) seleccionaremos la opci&oacute;n [<strong>Habilitar restricciones 
  para este reporte</strong>] </p>
<p><img src="<?php echo $url;?>ventana_lista_formatos_menu.jpg" class="noborder"></p>
<p>En el momento que se active la protecci&oacute;n para cualquier reporte, nadie 
  podr&aacute; visualizar sus formatos personalizados, excepto el Administrador. 
</p>
<table width="280" border="0" cellpadding="1" cellspacing="3">
  <tr> 
    <td width="100"><img src="<?php echo $url;?>ventana_lista_formatos_vacia.jpg" class="noborder"></td>
    <td width="150" class="texto">Vea este ejemplo donde un usuario restringido 
      ya no puede visualizar los formatos.</td>
  </tr>
</table>
<p>Para indicar quienes podr&aacute;n ingresar a un formato, ingrese como Administrador 
  y seleccione con el &quot;mouse&quot; el formato que desea administrar y usando 
  el men&uacute; contextual seleccione la opci&oacute;n [<strong>Administrar restricciones 
  para este formato particular...</strong>] </p>
<p>.<img src="<?php echo $url;?>ventana_formato_administrar_restricciones.jpg"></p>
<p>A continuaci&oacute;n aparecer&aacute; la ventana de administraci&oacute;n 
  de Privilegios sobre Formatos personalizados, en donde deber&aacute; elegir 
  a cada usuario que deba acceder al formato y asignarle privilegios.</p>
<table width="100%" border="0" cellpadding="1" cellspacing="3">
  <tr> 
    <td width="100"><img src="<?php echo $url;?>ventana_admon_privs.jpg"></td>
    <td width="150" class="texto"><p>En este ejemplo estamos asignando privilegios 
        al usuario <strong>jorge</strong>.</p>
      <p>Despu&eacute;s de marcar los privilegios guarde los cambios haciendo 
        &quot;clic&quot; en la opci&oacute;n [<strong>Aplicar Cambios</strong>].</p></td>
  </tr>
</table>
<p>Los privilegios que est&aacute;n disponibles son los siguientes:</p>
<ul>
  <li><strong>Visualizar formato</strong>. El usuario podr&aacute; ver y utilizar 
    el formato.</li>
  <li><strong>Editar Formato</strong>. Al asignar este privilegio el usuario podr&aacute; 
    editar y hacer cambios al formato.</li>
  <li><strong>Eliminar Formato</strong>. Este privilegio es muy delicado ya que 
    permitir&iacute;a que el usuario elimine el formato.</li>
  <li><strong>Duplicar Formato</strong>. Al utilizar este privilegio, el usuario 
    podr&aacute; duplicar el formato y generar uno nuevo.</li>
  <li><strong>Exportar el Formato</strong>. Permitir&aacute; generar un archivo 
    que permitir&aacute; transportar el formato a otro sistema.</li>
</ul>
<p align="left">As&iacute; podremos ver que nuestro usuario ahora ya puede visualizar 
  el formato que hemos asignado:</p>
<table width="280" border="0" cellpadding="1" cellspacing="3">
  <tr> 
    <td width="100"><img src="<?php echo $url;?>ventana_lista_formatos_verificar.jpg"/></td>
    <td width="150" class="texto"><img src="<?php echo $url;?>preview_reporte.jpg"/></td>
  </tr>
</table>
<p align="left">De esta forma podr&aacute; proteger cada uno de los formatos que 
  aparecen en los distintos reportes del sistema.</p>

    
<p><a href="http://www.grupoges.com.mx">- Consulta las características de Control 
  Escolar GES en su versión 4.</a><br>
<a href="http://www.grupoges.com.mx/grupoges_experiencias.php">- Vea algunas 
  experiencias de otros usuarios con la implantaci&oacute;n de Control Escolar 
  GES.</a></p>
  </body>
</html>