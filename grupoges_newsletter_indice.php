<?php
  session_start();

  include("funciones.php");
  
?><head>
  <title>Control Escolar GES - Indice de artículos</title>

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

   if( !isset( $url ) )
   {
	 $link = mysql_pconnect( $db_host, $db_user, $db_pass) or mysql_error();
	 mysql_select_db( $db_name, $link );
	
	$qrynewsletter = mysql_query( "SELECT a.*, b.fecha FROM ges_newsletter_det a LEFT JOIN ges_newsletter b ON (b.contenido=a.contenido and b.numero=a.numero) " .	        
	         " WHERE a.contenido='N' and (a.id_tipo!=0 and a.id_tipo!=1 and a.id_tipo!=3 and a.id_tipo!=4) " . 
			 "ORDER BY numero, id_tipo, id_num" );

       echo "<body backgroundcolor=#FFFFFF style='background:#FFFFFF;'>";  
       echo "<table width=800px align=center style='background:#FFFFFF; font:13px Verdana, Arial, Helvetica, sans-serif;'><tr><td width=100%>";

	   echo '   <table border=0 width="100%" cellpadding="0" cellspacing="0">';
	   echo '     <tr> ';
	   echo '      <td><a class=ligas href="http://www.grupoges.com.mx"><img style="border:0;" src="images/logo_ges_newsletter.gif" alt="Grupo GES"></a></td>';
	   echo '      <td valign=bottom align="right" class=minitexto><br>Lista de todos los artículos</td>';
	   echo "    </tr>";
	   echo '     <tr><td colspan=2><div id="lineainferior"><img src="images/pxl.gif" height="1"></div></td></tr>';

	   $numero = -1;

		while( $row = @mysql_fetch_assoc( $qrynewsletter ) )
		{
			$fecha = get_str_datetime( $row["fecha"], 0, 1 );
			$titulo = $row["url"];

			if( $numero != $row["numero"] )
			{
			   $numero = $row["numero"];
			   echo "<tr><td colspan=2 class=hilite_table><br><strong>Número $numero  Fecha $fecha </strong>&nbsp;&nbsp;<a class=ligas href='grupoges_newsletter.php?numero=$numero'>&laquo;&laquo;&nbsp;Ver este bolet&iacute;n</a></td></tr>";
			}

			$liga = "javascript:verarticulo( \"" . $row["url"] . "\", " . $row["numero"] . ", " . $row["id_tipo"] . ", " . $row["id_num"] . ", \"$titulo\", \"$fecha\" );";

			echo "<tr><td colspan=2 class=news_table_row>";
			echo "&nbsp;&nbsp;<a class=ligas_news href='$liga'><img class=noborder src='images/bullet_azul.gif'>&nbsp;" . $row["texto_breve"] . "</a>";
			echo "</td></tr>";			
		}

		@mysql_free_result( $qrynews );	   

	   echo "</table>";
	  echo "<br>"; 
   }
 ?>
  
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


