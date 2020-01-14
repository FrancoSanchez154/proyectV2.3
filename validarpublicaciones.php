<?php 
include 'conexion.php';

session_start();

$titulo=$_REQUEST['titulo'];
$num_pag=$_REQUEST['num_pag'];
$medidas=$_REQUEST['medidas'];
$tapa=$_REQUEST['tapa'];
$editorial=$_REQUEST['editorial'];
$reseña=$_REQUEST['reseña'];
$autor=$_REQUEST['autor'];
$fecha_publicacion=$_REQUEST['fecha_publicacion'];


$nombreimg=$_FILES['imagen']['name'];
$archivo=$_FILES['imagen']['tmp_name'];
$ruta="images";

$ruta=$ruta."/".$nombreimg;

move_uploaded_file($archivo, $ruta);
$query="INSERT INTO post VALUES('','','".$titulo."','".$num_pag."','".$medidas."','".$tapa."','".$editorial."','".$reseña."','".$fecha_publicacion."','".$autor."','".$ruta."') ";

$consulta = mysqli_query($con, $query);//ERA ESTOOOOO <--------------------

if ($query) {
	echo"instertado piola";
	header ("Location: index.php?titulo_post=".$titulo."");
	exit();
}
else{
	echo "no funcionao";
}
 ?>