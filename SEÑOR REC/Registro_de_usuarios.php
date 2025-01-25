<?php
include ("con_db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
    <link rel="stylesheet" type="text/css" href="estilo.css"> <!-- Se vincula el archivo CSS que se va a utilizar --> 
</head>
<body class='body3'>
    <form method="POST"> <!-- se utiliza el metodo POST -->
    <h1>Registro de usuarios</h1> <!-- Titulo principal -->
<input type="text" name="usuario" placeholder="Usuario"> <!-- Caja de Texto usuario -->
<input type="text" name="contraseña" placeholder="Contraseña"> <!-- Caja de Texto contraseña -->
<input type="text" name="mail" placeholder="Mail"> <!-- Caja de Texto contraseña -->
<input type="text" name="nombre" placeholder="Nombre Completo"> <!-- Caja de Texto contraseña -->
<input type="submit" value="Registrar" name="register"> <!-- Boton registrar -->
<a class="enlace2" href="login.php">Cancelar</a>
</form>
<?php 
include("registrar_usuario.php");
?>
</body>
</html>