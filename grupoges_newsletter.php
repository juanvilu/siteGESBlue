<?php
  session_start();

  include("funciones.php");
  
  if( isset($HTTP_GET_VARS["numero"]) )
  	$numero = $HTTP_GET_VARS["numero"];
	
  if( isset($HTTP_GET_VARS["url"]) )
  {
   	$url = $HTTP_GET_VARS["url"];
	
	if( isset($HTTP_GET_VARS["numero"]) )
		$numero = $HTTP_GET_VARS["numero"];
		
	if( isset($HTTP_GET_VARS["id_tipo"]) )
		$id_tipo = $HTTP_GET_VARS["id_tipo"];
		
	if( isset($HTTP_GET_VARS["id_num"]) )
		$id_num = $HTTP_GET_VARS["id_num"];
		
	if( isset($HTTP_GET_VARS["titulo"]) )
		$titulo = $HTTP_GET_VARS["titulo"];
		
	if( isset($HTTP_GET_VARS["fecha"]) )
		$fecha = $HTTP_GET_VARS["fecha"];
  }
    
?><head>
  <title>Control Escolar GES - Newsletter </title>

  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="description" content="Newsletter Grupo GES Escolar GES software de control escolar administración escolar">
  <meta name="Author" content="Grupo GES"> 
  <meta name="keywords" content="newsletter escolar ges administración escolar"> 

<link href="news_general.css" media="screen" rel="stylesheet" type="text/css" />

	<style type="text/css">
	<!--
	.texto img {
		border: none;
	}
	-->
	</style>

	<script language="JavaScript">
	
		function verarticulo( liga, numero, tipo, id_num, titulo, fecha )
		{
			var url;
			
			url = "grupoges_newsletter.php?url=" + liga + "&numero=" + numero+ "&id_tipo=" + tipo + "&id_num=" + id_num + "&fecha=" + fecha + "&titulo=" + titulo;
			document.location.href = url;
		}

	</script>

</head>

<?php


   if( isset( $url ) )
   {
       echo '<body>';

	   echo '<div id="contenedor">';
	   echo ' <div align=center> ';
	   echo '       <table border=0 width="100%" cellpadding=0 cellspacing=0>';
	   echo '         <tr> ';
	   echo '           <td width=280><a href="http://www.grupoges.com.mx"><img style="border:0;" src="images/logo_ges_newsletter.gif" alt="Grupo GES"></a></td>';
	   echo '           <td valign=bottom align="right"><table border=0 cellpadding=0 cellspacing=0 width=100%><tr><td align=right><img style="border:0;" src="images/news_letter_banner.gif" alt="Grupo GES"></td></tr><tr><td align=right class="fecha">Número ' . $numero . ' &nbsp;&nbsp; Fecha de publicación: ' . $fecha . '</td></tr></table></td>';
	   echo '         </tr>';
	   echo '         <tr><td colspan=2 class=fecha><img src="images/pxl.gif" height=2></td></tr>';	   
	   echo '       </table>';
	   echo '   </div>';
	   
  	   $link = mysql_pconnect( $db_host, $db_user, $db_pass) or mysql_error();
	   mysql_select_db( $db_name, $link );
	
 	   mysql_query( "UPDATE ges_newsletter_det SET visitas = visitas + 1 WHERE numero=$numero and id_tipo=$id_tipo and id_num=$id_num " );
   }
   else
   {

	$link = mysql_pconnect( $db_host, $db_user, $db_pass) or mysql_error();
	mysql_select_db( $db_name, $link );
	
 	$qrynewsletter = mysql_query( "SELECT fecha FROM ges_newsletter WHERE numero=$numero" );

	$fecha   = "";

	if( $row = @mysql_fetch_assoc( $qrynewsletter ) )
		$fecha = get_str_datetime( $row["fecha"], 0 );
	 
	@mysql_free_result( $qrynews );

       echo "<body backgroundcolor=#FFFFFF style='background:#FFFFFF;'>";  
       echo "<table width=800px align=center style='background:#FFFFFF; font:13px Verdana, Arial, Helvetica, sans-serif;'><tr><td width=100%>";

	   echo '   <table border=0 width="100%" cellpadding="0" cellspacing="0">';
	   echo '     <tr> ';
	   echo '      <td><a class=ligas href="http://www.grupoges.com.mx"><img style="border:0;" src="images/logo_ges_newsletter.gif" alt="Grupo GES"></a></td>';
	   echo '      <td valign=bottom align="right" class=minitexto><br>Número ' . $numero . ' &nbsp;&nbsp; Fecha de publicación: ' . $fecha . '</td>';
	   echo '    </tr>';
	   echo '     <tr> ';
	   echo '      <td class="fecha">Boletín Electr&oacute;nico</td>';
	   echo '      <td class="taMenu" width="70%">';
	   echo '		<div class="taMenu">';
	   echo "			<ul>";
	   echo "			  <li><a class='menu_newsletter' href='http://www.grupoges.com.mx' title='P&aacute;gina de inicio'>Inicio</a></li>";
//	   echo "			  <li><a href='http://" . $HTTP_SERVER_VARS['SERVER_NAME'] . "/grupoges_newscategorias.php' title='Art&iacute;culos organizados por categor&iacute;as'>Categor&iacute;as</a></li>";
	   echo '			  <li><a class="menu_newsletter" href="grupoges_newsletter_indice.php" title="Listado completo de todos los art&iacute;culos">Indice de Artículos</a></li>';
//	   echo '			  <li><a href="../enlaces.htm" title="Enlaces a recursos y websites relacionados">Archivo histórico</a></li>';
//	   echo '	 		 <li><a href="../acercade.htm" title="Informaci&oacute;n acerca del dise&ntilde;o y administraci&oacute;n del newsletter">Acerca de</a></li>';
	   echo "			</ul>";
 	   echo "		</div>";
	   echo '      </td>';	   
	   echo '    </tr>';	   
	   echo '   	</table>';
	   
	  echo "<br>"; 
   }
 ?>
  <div class="texto">
    <?php
		if( isset( $url ) )
		{
			$numstr = "00" . $numero;
			$numstr = right( $numstr, 3 );	
			
			$url = "newsletter/num" . $numstr . "/" . $url . "/" ;

		    include( $url . "index.php" );		
		}
		else if( getsessionvar("menu_newsletter")==1 )
		{
			// pantalla default
			if( isset($numero) )
			{
			   desplegar_numero( $numero );
			}
		}
		else
		{
		}
	
	 ?>
  </div>
  
<div id="lineainferior"><img src='images/pxl.gif' height="1"></div>
  <div align=center id="infoinferior">www.grupoges.com.mx - 2006 - Todos los derechos reservados.</div>
  
<div align=center id="infoinferior">Humboldt 26, Despacho 2 Col. Centro, Cuernavaca 
  Morelos. Teléfonos (777) 314-4134 y (777) 312-7254</div>  
  <br>
  <br>

<?php
   if( isset( $url ) )
       echo '</div>';
   else
       echo '</td></tr></table>';
 ?>

</div>
<!-- contenedor -->

</body>
</html>


