<?php
//Incluimos el archivo connection
include('connection.php');

$conect = connection();

?>
<!DOCTYPE html>
<html lang="es" >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
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
             <li class="menu__item"><a href="venta.php" class="menu__link">venta</a></li>
             <li class="menu__item"><a href="insertar_producto.php" class="menu__link">insertar producto</a></li>
             <li class="menu__item"><a href="cerrar_sesion.php" class="menu__link">cerrar sesion</a></li>
         </ul>


         </div>
        </div>
     </nav>

 


  </section>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>venta De Productos</title>
</head>
<body>
    <div class="users-form">
        <form action="venta_producto.php" method ="POST">
            <h1> Venta De Producto </h1>
            <!-- Solicitamos los input solo de los datos deseados --> 
            <input type="text" name="id" placeholder="ID Producto">
            <input type="text" name="stock" placeholder="Cantidad a vender">

            <input type="submit" value="Actualizar Producto" class="users-table--edit">


        </form>
    </div>
    
</body>
</html>