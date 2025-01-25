<?php
include 'con_db.php';
session_start();
$_SESSION['usuario']=$_POST['usuario'];
$usuario=$_SESSION['usuario'];
$contraseña=htmlspecialchars($_POST['contraseña']);
$consulta = "SELECT COUNT(*) as contar FROM reg_de_usuarios WHERE usuario= '$usuario' and contraseña= '$contraseña'";
$respuesta = mysqli_query($conex, $consulta);
$array = mysqli_fetch_array($respuesta);

if($array['contar']){
   header('location:registrar_ingreso.php');
}else{
    echo '<h2>Datos Incorrectos!</h2>';
}
?>