<?php
session_start();
include 'con_db.php';
$usuario= $_SESSION['usuario'];
$loguin = date('d-m-Y H:i:s');
$consulta = "INSERT INTO registro_de_ingreso (usuario, loguin) VALUES ('$usuario','$loguin')";
$resultado = mysqli_query($conex,$consulta);

if($resultado){
echo 'Loguin registrado correctamente!';
header ('location:home.php');
}else{
echo 'Loguin no registrado!';
}
?>