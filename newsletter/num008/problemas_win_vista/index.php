<HEAD><TITLE>Control Escolar GES</TITLE>
</HEAD>
<BODY>
<DIV class=texto>
  <H3>Ajustes en Windows Vista</H3>
<P class=autor><EM>Autor: Maximino Celis Carbajal</EM></P>
<P>El sistema operativo Windows Vista lanzado el a&ntilde;o pasado, ha modificado 
  varias cosas respecto a las versiones anteriores, ahora es muy estricto e implement&oacute; 
  restricciones para usuarios, permisos, uso de carpetas y control de aplicaciones. 
</P>
<P>Dependiendo de la versi&oacute;n de Windows Vista, Usted podr&aacute; identificar 
  alg&uacute;n problema con la configuraci&oacute;n de la aplicaci&oacute;n Control 
  Escolar GES; por tal raz&oacute;n hemos escrito este art&iacute;culo donde encontrar&aacute; 
  la forma de solucionar este inconveniente. Sin embargo, cabe mencionar que la 
  gran mayor&iacute;a de usuarios trabajan con total normalidad, as&iacute; que 
  le sugerimos modificar la configuraci&oacute;n solo cuando sea necesario.</P>
<P>A continuación se mencionan dos cambios que deber&aacute; realizar cuando sea 
  necesario corregir el problema de configuraci&oacute;n.</P>

<H4>Asignar privilegios en el Editor de Registro de Windows</H4>

<P>Control Escolar GES necesita colocar algunas l&iacute;neas de configuraci&oacute;n 
  en el Registro de Windows, por tanto Windows Vista podr&iacute;a bloquear esos 
  intentos y Usted deber&aacute; asignar permisos. Para la asignación de permisos 
  en el editor de registros, realice los siguientes pasos:</P>

<P><strong>Paso 1</strong>.- Seleccione la opción de inicio de la barra de tareas.</P>

<P align=center><IMG height=35 width=255 src="<?php echo $url;?>winvista_1.jpg"></P>

<P><strong>Paso 2</strong>.- Teclee “regedit” en la opción de ejecutar programas 
  y presione la tecla [<strong>Enter</strong>] para acceder al registro.</P>

<P align=center><IMG height=126 width=264 src="<?php echo $url;?>winvista_2.jpg"></P>

<P><strong>Paso 3</strong>.- Despliegue la opción HKEY_LOCAL_MACHINE haciendo 
  &quot;clic&quot; en el símbolo del triángulo que antecede a esta opción.</P>

<P align=center><IMG height=222 width=205 src="<?php echo $url;?>winvista_3.jpg"></P>

<P><strong>Paso 4</strong>.- En el nivel LOCAL MACHINE, navegue hasta la clave 
  SOFTWARE/BORLAND y del menú emergente, elija la opción [Permisos].</P>

<P align=center><IMG height=494 width=254 src="<?php echo $url;?>winvista_5.jpg"></P>

<P><strong>Paso 5</strong>.- Seleccione el grupo USUARIOS y en los permisos de 
  usuarios seleccione [Control Total].</P>

<P align=center><IMG height=463 width=377 src="<?php echo $url;?>winvista_6.jpg"></P>

<P><strong>Paso 6</strong>. Haga clic en la opción [<em><strong>Aceptar</strong></em>] 
  para guardar los cambios y cierre la pantalla del editor de registros.</P>

<H4>Configuración del gestor de conexiones a bases de datos de Control Escolar 
  GES (BDE).</H4>
El segundo cambio que deberemos hacer es modificar la carpeta default para creaci&oacute;n 
de archivos de datos temporales de Control Escolar GES, la cual generalmente está 
colocada apuntando hacia C:\. Recordaremos que Windows Vista no permite a ninguna 
aplicaci&oacute;n crear archivos en C:\. 
<P><strong>Paso 1</strong>.- Ingresar al Panel de Control y seleccionar el icono 
  del BDE Administrator.</P>

<P align=center><IMG height=168 width=672 src="<?php echo $url;?>winvista_7.jpg"></P>

<P><strong>Paso 2</strong>.- Seleccione la pestaña de Configuración y navegue 
  hasta la opci&oacute;n Drivers / Native / PARADOX.</P>

<P><strong>Paso 3</strong>.- Al seleccionar la opción PARADOX en los parámetros 
  de definici&oacute;n que se despliegan del lado derecho de la ventana, Usted 
  observar&aacute; que el parámetro NET DIR esta direccionado a C:\. Como ya se 
  dijo, esta ruta est&aacute; restringida en Windows Vista por lo que ser&aacute; 
  necesario direccionarlo a otra carpeta no restringida, p.e. C:\ESCOLAR.</P>

<P align=center><IMG height=198 width=376 src="<?php echo $url;?>winvista_8.jpg"></P>

<P><strong>Paso 4</strong>.- Aplique los cambios oprimiendo las teclas Control 
  + A y en la ventana emergente haga clic en [OK] para confirmar.</P>

<P align=center><IMG height=210 width=607 src="<?php echo $url;?>winvista_9.jpg"></P>
<P align=left>Nota: Control Escolar GES no utiliza Paradox como base de datos, 
  sin embargo, el BDE genera peque&ntilde;os archivos temporales en ese formato.</P>
<P align=left>Ahora podr&aacute; ejecutar Control Escolar GES sin problemas, al 
  igual que en versiones anteriores de Windows.</P>

<DIV class=valoracion>
<P class="piepagina"><A href="http://www.grupoges.com.mx/">Consulta las características de Control 
Escolar GES en su versión 4.</A></P>
</DIV></BODY></HTML>
