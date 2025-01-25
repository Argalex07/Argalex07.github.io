<?php
$conex = mysqli_connect("localhost","root","","inventario"); /*Establecemos la conexion en el localhost con el usuario root, sin contraseña y utilizando la bbdd test */
mysqli_set_charset($conex, "utf8");

if($conex){ /*Camprobamos la conexión*/
echo "";
}else{
echo "Sin Conexión";
}
?>