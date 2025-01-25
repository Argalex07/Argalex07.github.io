<?php

//Incluimos el archivo connection
include('connection.php');

$conect = connection();

//Definimos un Query SQL
$sql = "SELECT * FROM productos";
//Ejecutamos el Query
$query = mysqli_query($conect , $sql);


?>
<html lang="es" >
  <head>
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
             <li class="menu__item"><a href="venta.php" class="menu__link">venta</a></li>
             <li class="menu__item"><a href="insertar_producto.php" class="menu__link">insertar producto</a></li>
             <li class="menu__item"><a href="cerrar_sesion.php" class="menu__link">cerrar sesion</a></li>
         </ul>


         </div>
        </div>
     </nav>

 


  </section>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">

            </ul>

            </ul>


         </div>
        </div>
     </nav>
</head>
</div>
        </div>
     </nav>
</head>
<body>
    <div class="users-form">

        <form action="insert_producto.php" method ="POST">
            <h1> Ingresar Producto </h1>

            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="referencia" placeholder="Número de Referencia">
            <input type="text" name="precio" placeholder="Precio">
            <input type="text" name="color" placeholder="color">
            <input type="text" name="categoria" placeholder="Categoria del Producto">
            <input type="text" name="stock" placeholder="Stock de Inventario">
            <input type="text" name="fechaCreacion" placeholder="Fecha de entrada">
            <input type="submit" value="Agregar Producto">


        </form>
    </div>

    