<?php
require('funciones.php');
$id=0;
$citar=0;
if(isset($_GET["id"])) $id = $_GET["id"];

if(isset($_GET["citar"])) $citar =$_GET["citar"];

$row = array("id" => $id);

if($citar==1)
{
	require('configuracion.php');
	$sql = "SELECT titulo, mensaje, identificador AS id FROM foro WHERE id='$id'";
	$rs = mysql_query($sql, $con);
	if(mysql_num_rows($rs)==1) $row = mysql_fetch_assoc($rs);
	$row["titulo"] = "Re:".$row["titulo"];
	$row["mensaje"] = "".$row["mensaje"]."";
	if($row["id"]==0) $row["id"]=$id;
}
$template = implode("", file('formulario.html'));
include('header.html');
mostrarTemplate($template, $row);
include('footer.html');
?>