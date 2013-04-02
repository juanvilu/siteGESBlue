
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sp" lang="sp">

<head>
<link href="general.css" media="screen" rel="stylesheet" type="text/css" />

<style type="text/css">

-->
</style>
</head>
<body>


  <div class="texto"> 
    
  <h3>Administraci&oacute;n de Inventarios de Productos </h3>
    
  <p class="autor"><em>Autor: Enrique Trujillo García</em></p>
  <p>En las instituciones educativas la venta de productos como uniformes, libros 
    y &uacute;tiles escolares es una situaci&oacute;n que se presenta regularmente 
    al inicio de un nuevo ciclo escolar, no obstante puede estar presente durante 
    todo el a&ntilde;o. <br>
    <br>
    Desde su versi&oacute;n 3.5, Control Escolar GES incorpora un mecanismo denominado 
    <em>Administraci&oacute;n de Inventarios de Productos</em> que simplifica 
    el manejo y proporciona un control de existencias b&aacute;sico de tales productos. 
    A continuación abundaremos en los conceptos y veremos algunos ejemplos para 
    casos practicos:</p>
  <h4>¿Qué es un producto?</h4>
  <p> Un <em>producto</em> es un <em>concepto de cobro</em> especial que permite 
    realizar un manejo sistematizado de su almac&eacute;n. Con los productos se 
    pueden manejar existencias, entradas y salidas, asignación de precios y por 
    supuesto realizar ventas. </p>
  <h4>¿Qué es un paquete?</h4>
  <p> Un paquete agrupa varios productos y hace posible dar salida simult&aacute;nea, 
    evitando realizar movimientos repetitivos. Por ejemplo: Paquete de útiles 
    escolares, Paquete de Libros o Paquete de Uniformes.</p>
  <h3>Configuraci&oacute;n de Productos y Paquetes</h3>
  <p> Para ingresar a la creaci&oacute;n de<em> Productos</em> seleccionemos la 
    opci&oacute;n Creaci&oacute;n de Productos y Paquetes, del men&uacute; Cobranza.</p>
  <p align="center"><img border="0" src="<?php echo $url;?>opcion_menu.gif"></p>
  <p>Dentro de esa opci&oacute;n observaremos los productos que hayamos creado 
    asi como las existencias y precio de venta.</p>
    
  <p align="center"><img border="0" src="<?php echo $url;?>configuracion_prod.gif"></p>
  <p align="justify">A partir de esta ventana podremos realizar nuestro manejo 
    de inventarios utilizando las opciones &quot;Movimientos y Existencias&quot; 
    y &quot;Movimientos M&uacute;ltiples&quot;.</p>  
  <p>En esa misma opci&oacute;n podremos armar paquetes. Se pueden crear tantos 
    paquetes como la instituci&oacute;n requiera y a cada paquete le agregaremos 
    los productos necesarios.</p>
    <p align="center"><img border="0" src="<?php echo $url;?>configuracion_paq.gif"></p>
  <h3>Manejo de Movimientos de Almac&eacute;n</h3>
  <p>Utilizando la opci&oacute;n &quot;Movimientos y Existencias&quot; desde la 
    configuraci&oacute;n de productos, ingresaremos al Control de Inventarios 
    donde podremos registrar los movimiento b&aacute;sicos de almac&eacute;n tales 
    como Entradas (generadas por adquisiciones), Devoluci&oacute;n de Compra, 
    Salidas y Devoluciones al proveedor. Aqu&iacute; vemos la ventana de Control 
    de Inventarios, que contiene lo mismo que una tarjeta de almac&eacute;n tradicional.</p>
  <p align="center"><img border="0" src="<?php echo $url;?>kardex_prod.gif"></p>
  <p align="justify">Tambi&eacute;n pueden realizarse movimientos de almac&eacute;n 
    m&uacute;ltiples que involucren varios productos al mismo tiempo.</p>
  <p align="center"><img src="<?php echo $url;?>agregar_movimiento.gif"></p>
  <p align="justify">Los precios de venta pueden asignarse libremente, incluso 
    permite ajustarse a los cambios que puedan existir durante el ciclo escolar.</p>
  <p align="center"><img src="<?php echo $url;?>precio_prod.gif"></p>
  <p align="justify">Para efectos de control y seguimiento, se pueden obtener 
    distintos reportes para la revisi&oacute;n de existencias y an&aacute;lisis 
    de movimientos hist&oacute;ricos.</p>
  <p align="center"><img src="<?php echo $url;?>repotes_productos.gif"></p>
  <h3 align="justify">Venta de productos de Almac&eacute;n</h3>
  <p align="justify">La venta formal de productos se realiza desde alguno de los 
    puntos de cobro de la instituci&oacute;n, pudiendo ser la caja general o alguna 
    caja que se habilite para efectos de cobro de productos de almac&eacute;n 
    exclusivamente. <br>
    <br>
    Los productos se cobran espor&aacute;dicamente, es decir, no forman parte 
    de los planes de pago. En la siguiente imagen observamos la ventana cl&aacute;sica 
    de Registro de Ingresos (cobranza), en donde, para vender un producto debemos 
    seleccionar la opci&oacute;n <strong>&quot;Agregar cobro espor&aacute;dico...&quot;</strong>.<br>
    <br>
    <img border="0" src="<?php echo $url;?>ingresos_prod.gif"></p>
  <p align="justify">Despu&eacute;s de hacer &quot;clic&quot; en <strong>&quot;Agregar 
    cobro espor&aacute;dico...&quot;</strong>, aparecer&aacute; una nueva ventana 
    donde seleccionaremos el producto o productos que deseamos vender. En esta 
    misma ventana podremos seleccionar un paquete para agilizar la venta de varios 
    productos.</p>
  <p align="center"><img src="<?php echo $url;?>cobro_productos.gif"></p>
  <p align="justify">El proceso de registro del cobro es similar a los cobros 
    por colegiaturas u otros conceptos tradicionales.
  </p>
  <p align="center"><img src="<?php echo $url;?>opcion_registrar.gif"></p>
  <h4>Recomendaciones</h4>
  <div align="justify" class="valoracion"> 
    <p align="justify">Sugerimos configurar una caja especial para la venta de 
      productos, con el fin de mantener una separaci&oacute;n totalmente diferenciada 
      respecto a los cobros tradicionales.</p>
    <p align="justify">Antes de iniciar el ciclo escolar realice un inventario 
      f&iacute;sico para cargar las existencias iniciales de los productos.<br>
    </p>
    </div>
  </div>

  </body>
</html>


