<?php
 require 'conexion.php';

session_start();

$user = $_POST['usuario'];
$pass = $_POST['password'];

$query = "SELECT COUNT(*) as contar FROM `cuentas` WHERE `usuario_name` = '$user' AND `usuario_clave` = '$pass'";

$consulta = mysqli_query($con, $query);

$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
  $_SESSION["autenticado"]= "SI";
// header ("Location: usuario_validar.php");
  header("Location: home.php");

}else{
  //te manda a la misma pagina (ESTO SE PUEDE MEJORAR)
  echo '<script language="javascript">alert("Error de autentificacion");window.location.href="login.php"</script>';
}
  ?>