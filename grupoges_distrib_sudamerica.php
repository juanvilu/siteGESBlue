<?php
session_start();

  $id_empresa = 0;
  $id_area = 0;
  
  if( isset($_GET["id_area"]) ) // comprobar si viene el parametro
  {
      $id_area = $_GET["id_area"];	
  }
$cur_area = "";
  
  if( $id_area == 1 )
     $cur_area = "mx_noroeste";
  else if( $id_area == 2 )
     $cur_area = "mx_norte";
  else if( $id_area == 3 )
     $cur_area = "mx_noreste";
  else if( $id_area == 4 )
     $cur_area = "mx_centrooccidente";
  else if( $id_area == 5 )
     $cur_area = "mx_centrosur";
  else if( $id_area == 6 )
     $cur_area = "mx_sur";
  else if( $id_area == 7 )
     $cur_area = "mx_oriente";
  else if( $id_area == 8 )
     $cur_area = "mx_peninsula";
  else if( $id_area == 21 )
     $cur_area = "guatemala";	 
  else if( $id_area == 22 )
     $cur_area = "honduras";
  else if( $id_area == 23 )
     $cur_area = "elsalvador";
  else if( $id_area == 24 )
     $cur_area = "nicaragua";
  else if( $id_area == 25 )
     $cur_area = "costarica";	 
  else if( $id_area == 26 )
     $cur_area = "panama";

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; CHARSET=iso-8859-1" />
	<title>Grupo GES Sistemas Avanzados</title>

	<style media="all" type="text/css">
	@import "menu_style.css";
    a:link {	color: #000033; font-weight:bold;}
    a:visited {	color: #000033; font-weight:bold;}
    </style>
	
 <script language='javascript'>
		
		function goLink( link )
		{
			document.location.href = link;
		}
	 
	 </script>
	
</head>
<body class="body">

<?php
  include "template_header.php";  // wrapper1
?>

  <div class="wrapper">

	<?php
		$menu = 5;
		
		include "template_menu.php";
	?>
	
	<div class="content">
	  <div style="width:97%; float: left">
		    <h5 align="center"><img src="images/banner_comprar.jpg" alt="" width="800" height="180" /></h5>
      </div>
		 
	  <div class="Estilo10" style="width:100%; float:left">  	
            <p>La familia Control Escolar GES se comercializa de forma directa por Grupo         GES y a trav&eacute;s de una creciente red de distribuidores en M&eacute;xico y Latinoam&eacute;rica.</p>
      </div>
	  <div class="Estilo10" style="width:100%; float:left">
	    <div align="center">
		<table width="100%" height="453" border="0" cellpadding="0" cellspacing="0">
			<tr>
			  <td valign="top"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="540" height="415">
                <param name="movie" value="map_distrib.swf" />
                <param name="quality" value="high" />
				<param name="flashvars" value="cur_area=<?php echo $cur_area; ?>">
                <embed src="map_distrib.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="540" height="415"></embed>
		      </object></td>
			  <td valign="top" width="100%">			 
			  <div id=borderdistribs style="<?php echo "display:" . (($id_area!=0) ? "block" : "none"); ?>; background: url(images/div_distribs.png) no-repeat; width: 260px; height: 430px; padding: 5px 5px 5px 5px; ">
				 <div id=distribuidores 
				     style="background: transparent; padding: 5px 10px 10px 5px; border: 1px #000; width: 246px; height: 400px; overflow : auto; scrollbar-base-color:#369; scrollbar-highlight-color:#5569b4; ">
			   
			<?php
			
				if( $id_area != 0 )
				{
					
    $db_host = "www.grupoges.com.mx"; 
    $db_user = "geswww";      //"root";
    $db_pass = "escolarges"; // "";
    $db_name = "ges";  // "escolar";				
				
					$pais = "";
					$zona = "";

					if( $id_area == 1 )
					{
						$pais = "México";
						$zona = "Zona Noroeste";
					}
					if( $id_area == 2 )
					{
						$pais = "México";
						$zona = "Zona Norte";
					}
					if( $id_area == 3 )
					{
						$pais = "México";
						$zona = "Zona Noreste";
					}
					else if( $id_area == 4 )
					{
						$pais = "México";
						$zona = "Zona Centro Occidente";
					}
					else if( $id_area == 5 )
					{
						$pais = "México";
						$zona = "Zona Centro Sur";
					}
					else if( $id_area == 6 )
					{
						$pais = "México";
						$zona = "Zona Sur";
					}
					else if( $id_area == 7 )
					{
						$pais = "México";
						$zona = "Zona Oriente";
					}
					else if( $id_area == 8 )
					{
						$pais = "México";
						$zona = "Zona Península";
					}	
					else if( $id_area == 21 )
					{
						$pais = "Guatemala";
						$zona = "";
					}
					else if( $id_area == 22 )
					{
						$pais = "Honduras";
						$zona = "";
					}
					else if( $id_area == 23 )
					{
						$pais = "El Salvador";
						$zona = "";
					}															
					else if( $id_area == 24 )
					{
						$pais = "Nicaragua";
						$zona = "";
					}
					else if( $id_area == 25 )
					{
						$pais = "Costa Rica";
						$zona = "";
					}
					else if( $id_area == 26 )
					{
						$pais = "Panamá";
						$zona = "";
					}
					
				    $link = mysql_connect( $db_host, $db_user, $db_pass) or mysql_error();
				    mysql_select_db( $db_name, $link );				
				  
					$qryres = mysql_query( "SELECT id_sistema, id_area, id_index, empresa, logotipo, adicionales, website " .
										 " FROM ges_distribuidores WHERE id_sistema=1 and id_area=$id_area ORDER BY id_index" );

				  if( $pais != "" )
				      echo "<p><strong>$pais</strong>";
					  
				  if( $zona != "" )
				    echo "&nbsp;/&nbsp;<font size=-1>$zona</font>";

				  echo "</p>";

				  while( $row = @mysql_fetch_assoc( $qryres ) )
				  {
					  echo "<p class=F style='font: 9px;'>";
					  
					  $url = $row["website"];
					  
/*					  if ($row["logotipo"] <> "" )
					  {
						 if( getsessionvar("mobile") == 0 )
							echo "<img src='" . $row["logotipo"] . "'>";
						 else
							echo "<img src='" . $row["logotipo"] . "' width=79>";
					  }  */
						 
					  if( $url != "" )
					     echo "<strong><a href='$url'>" . $row["empresa"] . "</a></strong><br>";
					  else
					     echo "<strong>" . $row["empresa"] . "</strong><br>";
					  
					  echo $row["adicionales"] . "<br>";
					  if( $url != "" )
					     echo "Sitio Web: <strong><a href='$url'>$url</a></strong>";
					  
					  echo "</p>";
				  }										 										 
					
				}
				
				echo "<p class=F style='font: 10px;'><a href='http://localhost/grupoges/grupoges_infodistrib.php'><strong>Buscamos socios de negocio en esta región!!</strong></a></p>";
			
			 ?> 
			    </div>   				 
			  </div>			  </td>
			</tr>
		</table>
		</div>
	  </div>
			  <div class="Estilo10" style="width:100%; float:left">
		    <p>Gracias a la excelente calidad de nuestro producto, hemos conformado alianzas           de negocios con empresas mexicanas proveedores de tecnolog&iacute;a inform&aacute;tica: </p>
		    <p><a href="grupoges_infodistrib.php"><strong>¿Le interesa ser distribuidor? Haga clic aquí..</strong></a><em><a href="grupoges_infodistrib.php"><strong>.</strong></a><img src="img/link.png" alt="" width="20" height="20" /></em></p>
		    <p><br />
		      </p>
			  </div>
    </div>
		<div class="content-bottom"></div>
    <div style="width:100%; float:left; background-image:url(images/copyright.png); background-repeat:no-repeat">
      <table width="757" height="43" border="0" align="center">
        <tr>
          <td width="343"><div align="right"><span class="Estilo10"><strong>Grupo GES Sistemas Avanzados </strong>&copy; 2010 | </span> </div></td>
          <td width="157"><div align="center" class="Estilo32"><a href="grupoges_quienessomos.php">Informaci&oacute;n para Contacto</a></div></td>
          <td width="243"><span class="Estilo9"><span class="Estilo10">|</span></span><span class="Estilo32"> <a href="grupoges_informes.php">Solicitar Informes</a></span></td>
        </tr>
      </table>
      <p class="Estilo9">&nbsp;</p>
    </div>
    <span class="Estilo30"></span></div>
</div>
</body>
</html>

