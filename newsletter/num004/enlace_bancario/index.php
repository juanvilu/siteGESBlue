<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
<title>Enlace Bancario</title>
<link href="general.css" media="screen" rel="stylesheet" type="text/css" />

</head>
<body>
<div class="texto"> 
  <h3>Enlace Bancario (Pagos Referenciados)</h3>
  <p class="autor"><em>Autor: Maximino Celis Carbajal</em></p>
  <p>En los &uacute;ltimos a&ntilde;os, muchas instituciones han buscado sustituir 
    la recepci&oacute;n de cobros en efectivo por la seguridad que brindan las 
    instituciones bancarias. Bajo esta modalidad los padres de familia o alumnos 
    realizan directamente los pagos en una sucursal bancaria o incluso por banca 
    electr&oacute;nica (internet), lo cual brinda amplia seguridad y extiende 
    la cobertura de recepci&oacute;n de pagos.</p>
  <p>Control Escolar GES esta preparado para facilitar este proceso llamado <strong>&quot;pago 
    referenciado&quot;</strong>, el cual consiste b&aacute;sicamente en:</p>
</div>
<ul>
  <li>
    <div class="texto"> Realizar la impresión de las boletas de pago con informaci&oacute;n 
      que sirva para identificar el pago y la persona que lo realiza. Tambi&eacute;n 
      se pueden incluir el uso de instrumentos de validaci&oacute;n llamados <em>digitos 
      verificadores</em>, que disminuyen el margen de error que pueden ocasionar 
      los empleados bancarios.</div>
  </li>
  <li>
    <div class="texto"> La importación directa de un archivo electr&oacute;nico 
      que el banco proporciona, el cual contiene todos los pagos que han sido 
      recibidos en las distintas sucursales.</div>
  </li>
</ul>
<div class="texto">
  <p>A continuación se explica brevemente el proceso a seguir para la implantación 
    de este mecanismo de pago.</p>
</div>
 
<div class="texto"> 
  <h4>1. Configuración de referencias o l&iacute;neas de captura y d&iacute;gitos 
    verificadores.</h4>
  <p><strong>Recomendamos que esta parte del proceso se realice con el asesoramiento 
    de un asesor de soporte técnico y un ejecutivo bancario, puesto que la referencia 
    o l&iacute;nea de captura es el dato que el cajero de una sucursal bancaria 
    ingresar&aacute; en sus sistemas.</strong></p>
  <p>Desde el menú de Cobranza podrá acceder a la opción <em>Enlace Bancario, 
    </em>que contiene las opciones: IMPRESION de Boletas de Pago y PROCESAMIENTO 
    DE Archivos Bancarios.</p>
  <p align="center"><img src="<?php echo $url;?>enlaceban_config.jpg"></p>
  <p>Para estos efectos, elija la opci&oacute;n <em>Impresi&oacute;n de Boletas 
    de Pago</em> y filtre a los alumnos de alg&uacute;n nivel educativo. </p>
  <p align="center"><img src="<?php echo $url;?>enlaceban_ventanaimpboleta.jpg"></p>
  <p>Antes de imprimir boletas de pago, deber&aacute; configurar la forma en que 
    se generar&aacute; la referencia y el cálculo del digito verificador. Para 
    ello haga clic en el botón de CONFIGURAR REFERENCIA BANCARIA.</p>
  <p align="center"><img src="<?php echo $url;?>enlaceban_configref.jpg"/></p>
  <p>La referencia bancaria puede generarse usando una combinaci&oacute;n de distintos 
    datos, tales como: </p>
</div>
<ul>
  <li> Matr&iacute;cula del alumno.</li>
  <li> Clave, mes y a&ntilde;o del concepto a pagar.</li>
  <li> Fechas de inicio, vencimiento y l&iacute;mite de pronto pago.</li>
  <li>Importe de la cantidad a pagar (puede incluir descuentos o recargos).</li>
  <li>D&iacute;gitos verificadores con algoritmos soportados por distintas instituciones 
    bancarias.</li>
</ul>
<div class="texto"> 
  <p>Control Escolar GES identifica cada uno de estos datos por un c&oacute;digo. 
    A continuación se ejemplifica graficamente la configuración con 3 referencias:</p>
  <p align="center"><img src="<?php echo $url;?>enlaceban_confiejem.jpg"  /></p>
  <h4>2. Impresión de boletas bancarias.</h4>
  <p>Una vez terminada la configuración del contenido y calculo de la referencia, 
    podrá hacer la impresión de las fichas de dep&oacute;sito bancarias. Aqu&iacute; 
    le mostramos el ejemplo de una boleta de pago:</p>
  <p align="center"><img src="<?php echo $url;?>enlaceban_impboleta.jpg" /></p>
  <p>El diseño del formato de la boleta debe hacerse de acuerdo a las necesidades 
    y preferencias del colegio, en acuerdo con los lineamientos del banco.</p>
  <h4>3. Importar archivo bancario.</h4>
  <p>Control Escolar GES puede leer los archivos emitidos por el banco que se 
    encuentren en formato ASCII o CSV (separado por comas), pero se requiere indicar 
    su contenido separ&aacute;ndolo por columnas. El banco deber&aacute; proporcionar 
    a la instituci&oacute;n una descripci&oacute;n del contenido de cada columna 
    que integre el archivo. Probablemente tambi&eacute;n se indicar&aacute; la 
    longitud de cada columna y el tipo de dato que contiene.</p>
  <p>Para configurar preparar la lectura y aplicaci&oacute;n de los archivos bancarios, 
    ingrese al submenú Enlace Bancario y luego seleccionarla <em>Procesamiento 
    de Archivos Bancarios</em>. </p>
  <p>En la ventana que se mostrará deber&aacute; indicar el nombre del archivo 
    previamente descargado desde la pagina web o aplicaci&oacute;n bancaria.</p>
  <p align="center"><img src="<?php echo $url;?>enlaceban_import1.jpg"></p>
  <p>Despues de seleccionar el archivo haga &quot;clic&quot; en PROCESAR ARCHIVO. 
    Esto lo llevará a la pantalla de importación del archivo bancario, pero la 
    primera vez que lo utilice deberá configurar primero el contenido de las columnas 
    usando la opci&oacute;n &quot;CONFIGURAR COLUMNAS&quot;.</P>
  <p align="center"><img src="<?php echo $url;?>enlaceban_import2.jpg"></p>
  <p>En esta pantalla deberá indicar el nombre, longitud y tipo de campo como 
    se muestra en la ventana de ejemplo.</p>
  <p align="center"><img src="<?php echo $url;?>enlaceban_import3.jpg"></p>
  <p>Igualmente importante es indicar las <strong>columnas llave</strong> que 
    nos sirven para identificar al alumno y el pago. En una referencia bancaria 
    bien constituida, ambas llaves se identificar&aacute;n con la columna REFERENCIA 
    BANCARIA. Guarde los cambios que realice para que se vean aplicados al salir 
    de esta ventana.</p>
  <p>El siguiente paso es revisar si el sistema puede interpretar el contenido 
    del archivo bancario, este proceso se llama verificaci&oacute;n de integridad. 
    El sistema recorrerá cada rengl&oacute;n del archivo bancario y mostrará los 
    siguientes status:</p>
</div>
<ul>
  <li>
    <div class="texto"> <strong>Listo para procesar</strong>. Si localiza la referencia 
      en la base de datos del sistema.</div>
  </li>
  <li>
    <div class="texto"><strong>Alumno no encontrado</strong>. Si con base en la 
      configuraci&oacute;n de columna de identificaci&oacute;n no lograra ubicar 
      al alumno que realiz&oacute; el pago.</div>
  </li>
  <li>
    <div class="texto"><strong>Pago no ubicado</strong>. Si el pago que est&aacute; 
      siendo reportado por el banco no puede ser localizado en el sistema.</div>
  </li>
  <li>
    <div class="texto"><strong>Pago previamente aplicado</strong>. Si el pago 
      ya fue importado anteriormente.</div>
  </li>
</ul>
<div class="texto">
  <p align="center"><img src="<?php echo $url;?>enlaceban_import4.jpg"></p>
  <p>Una vez terminada la verificación estaremos en condiciones de importar los 
    pagos, para ello usaremos la opci&oacute;n <strong>Importar Dep&oacute;sitos 
    Bancarios</strong>. 
  <p align="center"><img src="<?php echo $url;?>enlaceban_import5.jpg"></p>
  <p>Despu&eacute;s de hacer &quot;clic&quot; en la opci&oacute;n <strong>Importar 
    Dep&oacute;sitos...</strong> se mostrará una ventana desde la cual deber&aacute; 
    elegir la forma en que se aplicar&aacute;n los pagos que ser&aacute;n importados. 
    Puede usar la numeraci&oacute;n normal de una caja que est&eacute; abierta 
    en el momento para el usuario que est&aacute; haciendo el proceso o bien, 
    una descarga directa por una numeraci&oacute;n libre dada por el usuario de 
    forma arbritraria.</P>
  <p align="center"><img src="<?php echo $url;?>enlaceban_import6.jpg"></p>
  <p>Haga clic en el boton continuar y el proceso de importación comenzará. El 
    sistema irá cargando -en cuestión de segundos- cada uno de los registros que 
    componen el archivo bancario. Una vez terminado el proceso se mostrará el 
    siguiente mensaje:</p>
  <p align="center"><img src="<?php echo $url;?>enlaceban_import7.jpg"></p>
  <H5>Con el proceso de importar archivos usted optimizará el tiempo de carga 
    de los pagos y adem&aacute;s podrá obtener reportes de ingresos y adeudos 
    de manera rápida, exacta y actualizada.</H5>
</div>
  
<p><a href="http://www.grupoges.com.mx">Consulta las caracter&iacute;sticas de 
  Control Escolar GES en su versi&oacute;n 4</a>. </p>

  </body>

</html>


