<head>
<title>Uso de Secciones en el reporteador</title>

<link href="news_general.css" media="screen" rel="stylesheet" type="text/css" />

</head>
<body>
<div class="texto"> 
  <h3>Develando el uso del editor de formatos.</h3>
  <p align="right" class="autor"><em>Autor: Roberto Antonio Romero N&aacute;jera</em></p>
  <p align="justify">Una de las caracter&iacute;sticas m&aacute;s aplaudidas a 
    lo largo del tiempo por los usuarios de <strong>Control Escolar GES</strong> 
    ha sido el editor de formatos, pues permite la obtenci&oacute;n de una gran 
    variedad de estilos de documentos (desde dise&ntilde;os simples hasta algunos 
    de gran complejidad). </p>
  <p align="justify">En esta ocasi&oacute;n traemos para Ustedes, un breve tutorial 
    orientado a <em>administradores de sistemas</em>, que explica el uso y las 
    caracter&iacute;sticas de las diferentes secciones que se pueden utilizar 
    en el dise&ntilde;o de un formato.</p>
  <h4><strong>Partes que componen un formato</strong></h4>
  <p>Cualquier formato que Usted quiera dise&ntilde;ar puede estar conformado 
    por las siguientes secciones:</p>
</div>

<ul>
  <li><strong>Encabezado</strong>. Secci&oacute;n que aparece en la parte superior 
    de todas las p&aacute;ginas que ser&aacute;n impresas (el mismo contenido 
    aparecer&iacute;a en todas las hojas). Por ejemplo si un documento requiere 
    que aparezca el nombre del documento, n&uacute;mero de p&aacute;gina, etc. 
    en todas las hojas del reporte, se usa esta secci&oacute;n para tal efecto.<br>
    <br>
  </li>
  <li> <strong>T&iacute;tulo</strong>. Secci&oacute;n que aparece solamente en 
    la primera hoja, y se coloca despu&eacute;s de la secci&oacute;n Encabezado 
    (si existe). Es &uacute;til en el caso de un documento que deba llevar cierta 
    informaci&oacute;n solo en la primera hoja. Por ejemplo si una boleta o certificado 
    debe tener alg&uacute;n dato solo en la primera p&aacute;gina (p.e. el nombre 
    del alumno, el logo de la escuela, etc.) deber&aacute; incluirse una secci&oacute;n 
    de <strong>T&iacute;tulo</strong>.<br>
    <br>
  </li>
  <li> <strong>Detalle</strong>. Esta es la principal secci&oacute;n de un formato, 
    ya que ah&iacute; se muestran los registros o la informaci&oacute;n que ser&aacute; 
    la &quot;m&eacute;dula&quot; del reporte; por ejemplo en una lista de alumnos 
    cada alumno representa un registro de informaci&oacute;n.<br>
    <br>
  </li>
  <li> <strong>Pie de p&aacute;gina</strong>. Esta secci&oacute;n aparece en la 
    parte inferior de todas las p&aacute;ginas. Puede usarse para poner el n&uacute;mero 
    de p&aacute;gina, ciclo escolar, etc.<br>
    <br>
  </li>
  <li> <strong>Sumario</strong>. Secci&oacute;n que ser&aacute; colocada al final 
    de la informaci&oacute;n generada por la secci&oacute;n Detalle. Por ejemplo, 
    cuando un reporte necesita incluir totales al final del documento, o poner 
    un resumen de materias aprobadas y reprobadas en un kardex, etc.<br>
    <br>
  </li>
  <li> <strong>Grupo</strong> (m&aacute;ximo 3 niveles de agrupamiento). Esta 
    secci&oacute;n agrupar&aacute; los registros o la informaci&oacute;n que se 
    procesa por el Detalle, abriendo un nuevo nivel de subclasificaci&oacute;n. 
    Cada Grupo proporciona su propio espacio para Encabezado de Grupo y Pie de 
    Grupo. Por ejemplo, un k&aacute;rdex se puede agrupar por las asignaturas 
    de un grado. </li>
</ul>
<p>Todas las secciones se pueden crear una vez, excepto el Grupo que puede crearse 
  hasta tres veces.</p>
<p>Cuando iniciamos la edici&oacute;n de un formato, &eacute;ste aparecer&aacute; 
  sin secciones como aqu&iacute; se muestra. Para agregar secciones utilice la 
  barra de herramientas de dise&ntilde;o que le permitir&aacute; agregar, eliminar 
  y dise&ntilde;ar el contenido de cada secci&oacute;n.</p>
<p><img src="<?php echo $url;?>agregar-eliminar_secciones.jpg" class="noborder"></p>
<p><img src="<?php echo $url;?>barra_secciones.jpg" class="noborder"></p>
<h4><strong>Antes de iniciar el dise&ntilde;o de un formato.</strong></h4>
<p>Lo primero que se debe tener en cuenta antes de crear un formato es el volumen 
  potencial de utilizaci&oacute;n. Por ejemplo, si pretende dise&ntilde;ar una 
  lista de alumnos de un grupo, piense que esa lista podr&aacute; ser impresa 
  de forma masiva (para decenas o cientos de grupos) y no solo para un grupo. 
  Si dise&ntilde;a una boleta o un certificado de conclusi&oacute;n de estudios, 
  dise&ntilde;e el formato pensando en imprimirlo masivamente y no solo para un 
  alumno.</p>
<p>Esto significar&aacute; que Usted debe decidir cuidadosamente las secciones 
  que deber&aacute; utilizar en un formato, si inserta una secci&oacute;n T&iacute;tulo 
  recuerde que solo se imprimir&aacute; en la primera hoja.</p>
<h4><strong>Principales componentes de las Secciones.</strong></h4>
<p>Al agregar cualquier secci&oacute;n, Usted deber&aacute; proceder a agregar 
  componentes en ella y deber&aacute; interactuar con la siguiente ventana de 
  edici&oacute;n:</p>
<p><img src="<?php echo $url;?>caracteristicas.jpg" class="noborder"></p>
<ol>
  <li> En &quot;<strong>Edici&oacute;n&quot;</strong> se dise&ntilde;a el documento; 
    en <strong>&quot;Previsualizaci&oacute;n&quot;</strong> nos muestra como ser&iacute;a 
    el resultado final sin necesidad de salir de esta ventana.</li>
  <li> Elementos que se pueden incrustar en el dise&ntilde;o del documento: <br>
    <br>
    <ul>
      <li> Las <strong>etiquetas</strong> son leyendas est&aacute;ticas que pueden 
        contener cualquier tipo de informaci&oacute;n.</li>
      <li> Los <strong>campos</strong> permiten mostrar la informaci&oacute;n 
        como el nombre de un alumno, calificaciones, adeudos, etc.</li>
      <li> Las <strong>Expresiones</strong> se usan para hacer c&aacute;lculos, 
        operaciones aritm&eacute;ticas y textuales, para el manejo de variables 
        y ejecutar funciones de diversa naturaleza.</li>
      <li> Las <strong>Figuras</strong> son rect&aacute;ngulos, c&iacute;rculos 
        y l&iacute;neas verticales y horizontales.</li>
    </ul>
    <br>
  </li>
  <li><strong> </strong> Con estos controles se modifica la posici&oacute;n, formato 
    y alineaci&oacute;n de un elemento. En el caso de una etiqueta o expresi&oacute;n, 
    adem&aacute;s se puede cambiar la fuente, tama&ntilde;o, etc.</li>
  <li> <strong> </strong> En el &aacute;rea de edici&oacute;n se incrustan y manipulan 
    los elementos. Lo que contenga es lo que realmente se mostrar&aacute; en el 
    documento resultante.</li>
  <li> <strong> </strong> Controla la altura de la secci&oacute;n de acuerdo al 
    dise&ntilde;o contemplado. A mayor valor, m&aacute;s &aacute;rea ocupar&aacute; 
    la secci&oacute;n y por lo tanto desplazar&aacute; a las dem&aacute;s secciones 
    que se encuentren por debajo de ella.</li>
  <li> <strong> </strong> Con esta opci&oacute;n podemos ocultar la secci&oacute;n; 
    esto puede ser necesario seg&uacute;n las necesidades de cada documento. Por 
    ejemplo, alguna secci&oacute;n podr&iacute;a contener c&aacute;lculos, pero 
    no es necesario mostrarla en el documento resultante y por eso solo se oculta.</li>
  <li> Cuando se agregan elementos o se hacen modificaciones, es necesario guardar 
    los cambios, para ello utilice la opci&oacute;n Guardar. La opci&oacute;n 
    Salir ser&aacute; necesaria cuando debamos abandonar la edici&oacute;n de 
    esta secci&oacute;n.</li>
  <li>Solo disponible en la secci&oacute;n de Grupo. Si se activa esta opci&oacute;n, 
    antes de iniciar el encabezado de grupo autom&aacute;ticamente se aplicar&aacute; 
    un salto de p&aacute;gina (vea el tema <a href="#agrupamientos">Agrupamientos</a>).</li>
</ol>

<h4><strong>Posicionamiento de las secciones básicas en un formato</strong></h4>
<p>Aqu&iacute; se muestra un esquema ilustrativo del posicionamiento de las secciones 
  dentro de un documento imaginario de 3 p&aacute;ginas. Se omite la secci&oacute;n 
  Grupo por que requiere de un trato especial, pues solo con base a las necesidades 
  de cada formato, se decide si se hace uso de esta secci&oacute;n.</p>
<p align="center"><img src="<?php echo $url;?>distribucion_secciones.jpg"></p>
<h4><strong><a name="agrupamientos"></a>El uso de agrupamientos</strong></h4>
<p>Agrupando proporcionaremos mayor legibilidad a los documentos con mucha informaci&oacute;n; 
  por ejemplo, si dise&ntilde;amos un formato que imprima a todos los alumnos 
  de la instituci&oacute;n SIN AGRUPAMIENTOS obtendremos una larga serie de alumnos 
  un tanto confusa. Sin embargo, al a&ntilde;adir agrupamientos por NIVEL o CLASE 
  ayudaremos a hacer m&aacute;s legible la informaci&oacute;n.</p>
<p>Para un mejor entendimiento mostraremos un documento SIN AGRUPAMIENTOS y otro 
  UTILIZANDO TRES AGRUPAMIENTOS; se trata de una boleta de calificaciones en la 
  cual se intenta mostrar asignaturas tanto de espa&ntilde;ol como de ingl&eacute;s 
  y adem&aacute;s contiene asignaturas oficiales y no oficiales.</p>
<p><strong>Antes:<br>
  </strong>Al estar toda la informaci&oacute;n secuencial impide la legibilidad 
  y parece estar en desorden, aunque de origen si est&eacute; ordenada por alg&uacute;n 
  criterio.</p>
<p><img src="<?php echo $url;?>ejemplo_antes.jpg" class="noborder"></p>
<p><strong>Despu&eacute;s:<br>
  </strong>Ahora se muestra exactamente la misma informaci&oacute;n, pero usando 
  tres niveles de agrupamiento. </p>
<ul>
  <li>Por Alumno (usando el campo NUMEROALUMNO).</li>
  <li>Por Plan de estudios -ingl&eacute;s o espa&ntilde;ol- (usando el campo ID_PLAN).</li>
  <li>Por Tipo de Asignatura -oficial o extraoficial- (usando el campo OFICIAL).</li>
</ul>
<p><img src="<?php echo $url;?>ejemplo_3secciones.jpg" class="noborder"></p>
<p><a href="http://www.grupoges.com.mx">Consulte las caracter&iacute;sticas de 
  Control Escolar GES en su versi&oacute;n 4</a>. </p>
</body>