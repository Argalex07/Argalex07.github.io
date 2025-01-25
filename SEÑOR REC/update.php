<?php
//Incluimos el archivo connection
include('connection.php');

$conect = connection();

$id=$_GET['id'];

$sql = "SELECT * FROM productos WHERE id=$id";
//Ejecutamos el Query para la actualizacion de datos
$query = mysqli_query($conect , $sql);
$row = mysqli_fetch_array($query)

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
	   <title>SEÑOR RECAMARA</title>
	   <link rel="stylesheet" href="CSS/normalize.css">
	   <link rel="stylesheet" href="CSS/estilos.css">
	   <link rel="stylesheet" href="CSS/font.css">
	  
  </head>


           </div>
        </div>
     </header>
     <nav class="main-nav">
        <div class="container container--flex">
         <span class="icon-menu" id="btnmenu"></span>
         <ul class="menu" id="menu">
             <li class="menu__item"><a href="home.php" class="menu__link menu__link--select">Inicio</a></li>
             <li class="menu__item"><a href="recamaras.php" class="menu__link">Recamaras</a></li>
             <li class="menu__item"><a href="cerrar_sesion.php" class="menu__link">Cerrar sesion</a></li>
         </ul>

         <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
         </div>
        </div>
     </nav>
         </div>
        </div>
     </nav>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Editar Productos</title>
</head>
<body>
    <div class="users-form">
        <form action="edit_producto.php" method ="POST">
            <h1> Editar Producto </h1>
            <!-- Reasignamos todos los datos para que solo se actualice lo que se desea modificar --> 
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <input type="text" name="nombre" placeholder="Nombre"value="<?= $row['nombre'] ?>" >
            <input type="text" name="referencia" placeholder="Número de Referencia"value="<?= $row['referencia'] ?>">
            <input type="text" name="precio" placeholder="Precio"value="<?= $row['precio'] ?>">
            <input type="text" name="color" placeholder="color"value="<?= $row['color'] ?>">
            <input type="text" name="categoria" placeholder="Categoria del Producto"value="<?= $row['categoria'] ?>">
            <input type="text" name="stock" placeholder="Stock de Inventario"value="<?= $row['stock'] ?>">
            <input type="text" name="fecha" placeholder="Fecha de Creación"value="<?= $row['fecha'] ?>">

            <input type="submit" value="Actualizar Producto" class="users-table--edit">


        </form>
    </div>
    
</body>
</html>