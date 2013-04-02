<head>
<title>Uso de variables en el reporteador</title>

<link href="news_general.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div class="texto">
  <h3>Uso de variables en el editor de formatos.</h3>
    
  <p align="right" class="autor"><em>Autor: Roberto Antonio Romero N&aacute;jera</em></p>
  <p align="justify"> <strong>Control Escolar GES</strong> cuenta con una herramienta 
    muy poderosa que es su editor de formatos; con el, los usuarios pueden obtener 
    desde documentos muy sencillos que solo muestren etiquetas y campos simples, 
    hasta aquellos documentos que son capaces de realizar diversas operaciones 
    aritm&eacute;ticas o manejo de datos.</p>
  <p align="justify">En los documentos complejos, muchas veces se hace necesario 
    el uso de un recurso de manejo de informaci&oacute;n llamado uso de variables.<br>
  </p>
  <h4 align="justify"><strong>&iquest;Qu&eacute; es una variable?</strong></h4>
  <p>Una variable se define como todo dato que puede cambiar en el transcurso de 
    la ejecuci&oacute;n de un programa (en este caso de un documento). En Control 
    Escolar GES, Usted tiene la posibilidad de usar dos tipos de variables: las 
    <strong>num&eacute;ricas</strong> que podr&aacute;n contener solo valores 
    num&eacute;ricos y las <strong>alfanum&eacute;ricas</strong> que pueden contener 
    combinaci&oacute;n de n&uacute;meros, letras y s&iacute;mbolos.</h4>
  <p align="justify"><strong>a) Num&eacute;ricas.</strong> Una variable num&eacute;rica 
    se manejar&aacute; con la funci&oacute;n VarNum y la sintaxis es la siguiente:<br>
    <br>
    
  <div class="texto"><strong>VARNUM( &lt;&iacute;ndice&gt;, [acci&oacute;n], [valor_num&eacute;rico_para_almacenar] 
    )</strong><br>
    <ul>
      <li>Indice. Las variables se identifican con un n&uacute;mero que puede 
        ser desde 1 hasta 100.<br>
      </li>
      <li>Acci&oacute;n = 0 (cero) para consultar el valor previamente almacenado, 
        1 (uno) para almacenar un nuevo valor y 3 (tres) para incrementar el valor. 
        Por default es 0 (cero). <br>
      </li>
      <li>Valor_num&eacute;rico_para_almacenar = Es el n&uacute;mero que ser&aacute; 
        almacenado o incrementado en la variable. Solo deber&aacute; indicarse 
        cuando acci&oacute;n es 1 (uno) &oacute; 3 (tres).<br>
      </li>
    </ul>

    
  </div>
    
  <p align="justify"><strong>b) AlfaNum&eacute;ricas.</strong> Por otra parte 
    las variables num&eacute;ricas se controlan con la funci&oacute;n VarAlfa 
    y la sintaxis es la siguiente:<br>
    <br>
  <div class="texto"><strong>VARALFA( &lt;&iacute;ndice&gt;, [acci&oacute;n], 
    [valor_textual_para_almacenar] )</strong><br>
    <ul>
      <li>Indice. N&uacute;mero de la variable (desde 1 hasta 100).<br>
      </li>
      <li>Acci&oacute;n = 0 (cero) para consultar un valor previamente almacenado, 
        1 (uno) para almacenar un nuevo dato y 3 (tres) para concatenar el valor. 
        Por default es 0 (cero). <br>
      </li>
      <li>Valor_textual_para_almacenar = S&oacute;lo cuando acci&oacute;n es 1 
        (uno) &oacute; 3 (tres), es el valor textual que ser&aacute; almacenado 
        en la variable. </li>
    </ul>
  </div>
    
  <p> Para las variables num&eacute;ricas solo deber&aacute; proporcionar datos 
    tipo num&eacute;rico (enteros o de punto flotante -monetarios-) y las alfanum&eacute;ricas 
    datos tipo alfanum&eacute;rico.</p>
  <h4><strong>&iquest;C&oacute;mo saber el tipo de dato que contiene un campo?</strong></h4>
  <p>En el editor Usted tendr&aacute; disponibles diversos campos al momento de 
    dise&ntilde;ar un formato y es muy importante saber el tipo de dato de un 
    campo si queremos almacenarlo en una variable. La forma de saber el tipo de 
    dato de un campo es usando la funci&oacute;n TYPEOF(), la cual indicar&aacute; 
    que tipo de dato es. </p>
  <p>Ejemplo:<br>
    TYPEOF( CAMPOXYZ ) = Float / Integer / String o Date = (flotante, entero, 
    texto o fecha).</p>
  <p align="justify">Esta es una forma pr&aacute;ctica y r&aacute;pida de saber 
    el tipo de dato de un campo, no incluya la expresi&oacute;n en el dise&ntilde;o 
    final del reporte.<br>
    <br>
    Se puede usar la opci&oacute;n [<strong>Validar Expresi&oacute;n</strong>] 
    de la ventana de insertar expresiones, para saber de una forma r&aacute;pida 
    el tipo de dato:</p>
  <p align="justify"><img src="<?php echo $url;?>comprobacion.jpg" width="474" height="92"><br>
  </p>
  <h4 align="justify"><strong>Conversi&oacute;n de tipo de dato</strong></h4>
  <p align="justify"> Si Usted desea almacenar el contenido de un campo de tipo 
    alfanum&eacute;rico en una variable num&eacute;rica, deber&aacute; convertirlo 
    a tipo num&eacute;rico (float o integer). Para ello se usa la funci&oacute;n 
    NUM(). </p>
  <p align="justify">Ejemplo:<br>
    VARNUM(1,1,NUM(CALIF_BIM1))<br>
    <br>
    De forma similar ocurre con las variables alfanum&eacute;ricas, si deseamos 
    almacenar en ellas valores num&eacute;ricos primero deberemos convertirlas 
    a tipo texto usando la funci&oacute;n STR(). </p>
  <p align="justify">Ejemplo: <br>
    VARALFA(1,1,STR(ADEUDO))</p>
  <h4 align="justify"><strong>Usando una expresi&oacute;n compleja para almacenar 
    datos en una variable</strong></h4>
  <p align="justify">Se puede almacenar datos derivados de campos o constantes 
    directas, pero tambi&eacute;n es posible usar expresiones complejas para almacenar 
    datos. </p>
  <p align="justify">En el siguiente ejemplo, almacenaremos en una variable alfanum&eacute;rica 
    la etiqueta <strong>Hombre</strong> o <strong>Mujer</strong>, de acuerdo al 
    contenido del campo SEXO (que contiene F o M para el g&eacute;nero de una 
    persona). </p>
  <p align="center"> VARALFA(1,1,IF(SEXO='F','Mujer','Hombre')) <br></p>
  <h4><strong>Ejemplo b&aacute;sico para comprender el uso de variables</strong></h4>
  <p>Se tiene como objetivo numerar una lista de alumnos, para lo cual, en el 
    dise&ntilde;o del reporte dentro de la secci&oacute;n encabezado de p&aacute;gina 
    agregamos la expresi&oacute;n: VARNUM(1,1,0), asignando a la variable num&eacute;rica 
    1 (uno) el valor cero. Esto se llama &quot;inicializaci&oacute;n&quot; y nos 
    permite tener la certeza de que la variable que llevar&aacute; el conteo de 
    alumnos siempre iniciar&aacute; en CERO.</p>
  <p align="justify"><img src="<?php echo $url;?>varencabezado.jpg" width="606" height="184"><br>
    <br>
    Dentro del mismo formato, iremos a la secci&oacute;n detalle donde colocaremos 
    la expresi&oacute;n VARNUM(1,3,1), que incrementar&aacute; por uno el valor 
    de la variable por cada registro procesado. </p>
  <p align="justify">Ah&iacute; mismo podremos colocar la expresi&oacute;n VARNUM(1) 
    que nos permitir&aacute; consultar el dato de la variable.</p>
  <p align="justify"><img src="<?php echo $url;?>vardetalle.jpg" width="606" height="167"></p>
  <p align="justify">En reportes complejos, con muchas variables, modificaciones 
    y consultas es importante verificar el orden de las expresiones, ya que las 
    instrucciones se ejecutar&aacute;n en secuencia (una tras otra) en el orden 
    que fueron insertadas sin importar la posici&oacute;n en la que est&eacute;n 
    colocadas en el formato. </p>
  <p align="justify">Para poder verificar el orden de las expresiones se debe 
    hacer &quot;clic&quot; derecho en la parte inferior de la ventana de cualquier 
    secci&oacute;n y seleccionar la opci&oacute;n [<strong>Modificar Orden de 
    Expresiones...</strong>].</p>
  <p align="justify"><img src="<?php echo $url;?>ordenexp.jpg" width="415" height="91"></p>
  <p align="justify">Si el orden de las expresiones estuviera incorrecto, se puede 
    utilizar los botones de ordenamiento hasta que logremos el orden deseado.</p>
  <p align="justify"><img src="<?php echo $url;?>ventana_orden.jpg" width="305" height="204"></p>
  <p align="justify">Un orden inadecuado puede dar lugar a datos imprecisos.</p>
  <p align="justify">Ejemplo del reporte con el orden de sus expresiones correcto:</p>
  <p align="justify"><img src="<?php echo $url;?>rep_orden_ok.jpg" width="593" height="226"></p>
  <p align="justify">Ejemplo del mismo reporte pero con el orden incorrecto:<br>
    <br>
    <img src="<?php echo $url;?>rep_orden_bad.jpg" width="593" height="228"> </p>
  <p align="justify">Cuando se manejan muchas expresiones usando variables, es 
    de suma importancia cuidar este aspecto. Como se aprecia en la siguiente imagen:</p>
  <p align="justify"><img src="<?php echo $url;?>avanzado.jpg" width="656" height="307"></p>
  <p align="justify">A continuaci&oacute;n se propone un ejemplo de c&oacute;mo 
    contar la poblaci&oacute;n de mujeres y hombres existente en un grupo de alumnos.</p>
  <p align="justify">1) En el encabezado se inicializan dos variables num&eacute;ricas, 
    una para contar a los hombres y otra a las mujeres; se les asigna el valor 
    cero.<br>
    <br>
    VARNUM(2,1,0) y VARNUM(3,1,0).</p>
  <p align="justify">2) En la secci&oacute;n detalle se colocan las expresiones:</p>
  <p align="justify">VARNUM(2,3,IF(SEXO='F',1,0)) Para contar a las mujeres. <br>
    VARNUM(3,3,IF(SEXO='M',1,0)) Para contar a los hombres.</p>
  <p align="justify">3) Finalmente, en el pie de p&aacute;gina o en el sumario 
    se consultan las variables y se suman para saber el total de alumnos:</p>
  <p align="justify"><img src="<?php echo $url;?>sumario.jpg" width="667" height="202"></p>
  <p align="justify">Y el reporte mostrar&iacute;a el siguiente resultado:</p>
  <p align="justify"><img class="noborder" src="<?php echo $url;?>reporte_alumnos.jpg" width="725" height="344"></p>
  <p align="justify">Este es una aproximaci&oacute;n b&aacute;sica al uso de variables, 
    pero Control Escolar GES tiene la solidez necesaria para dar soporte a dise&ntilde;os 
    m&aacute;s complejos. </p>
<div class="valoracion">
  <p><a href="http://www.grupoges.com.mx">Consulta las caracter&iacute;sticas 
    de Control Escolar GES en su versi&oacute;n 4</a>. </p>
</div>	
</div>
</body>