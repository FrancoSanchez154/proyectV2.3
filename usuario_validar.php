<?php
require 'conexion.php';
session_start();

$user = $_POST['usuario'];
$pass = $_POST['password'];

/* Si desea obtener el nombre y correo sería , teniendo en cuenta el nombre de las tablas */
$consulta="Select id_usuario from cuentas where `usuario_name` = '$user' AND `usuario_clave` = '$pass'";
$resultado=mysqli_query($con,$consulta);
/* Si Hay Resultados*/
if(mysqli_num_rows($resultado)>0){
    $fila = $resultado->fetch_array(MYSQLI_ASSOC);
    /* Asignamos A Sessión el valor de la columna Name*/
    $_SESSION['id_usuario']= $fila['id_usuario'];
    echo $_SESSION['id_usuario'];
}
else{
    echo "NO HAY RESULTADOS";
}
// de donde lo saque:
// https://es.stackoverflow.com/questions/80803/como-soluciono-catchable-fatal-error-object-of-class-mysqli-result-could-not-be
?>