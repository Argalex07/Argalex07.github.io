<?php
//Incluimos el archivo connection
include('connection.php');

$conect = connection();

$id=$_GET['id'];

$sql = "DELETE FROM cocineta WHERE id='$id'";
//Ejecutamos el Query
$query = mysqli_query($conect , $sql);

if ($query) {
    //Header("Location: index.php");
    echo '<script language="javascript">alert("Producto Eliminado Con Exito");window.location.href="cocineta.php"</script>';
}

?>