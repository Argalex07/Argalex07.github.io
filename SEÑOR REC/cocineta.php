<!DOCTYPE html>
<html lang="en">
<head>
<title>Inv cocinetas</title>
<link rel="stylesheet" type="text/css" href="estilo.css"> <!-- Se vincula el archivo CSS que se va a utilizar --> 
</head>
<?php

//Incluimos el archivo connection
include('connection.php');

$conect = connection();

//Definimos un Query SQL
$sql = "SELECT * FROM cocineta";
//Ejecutamos el Query
$query = mysqli_query($conect , $sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
   
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
             <li class="menu__item"><a href="venta_vercocineta.php" class="menu__link">venta</a></li>
             <li class="menu__item"><a href="insertar_cocineta.php" class="menu__link">insertar producto</a></li>
             <li class="menu__item"><a href="cerrar_sesion.php" class="menu__link">cerrar sesion</a></li>
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
</head>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
 


         </div>
        </div>
     </nav>
</head>


    <div class="users-table">
    

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Referencia</th>
                    <th>Precio</th>
                    <th>color</th>
                    <th>Categoria</th>
                    <th>Stock</th>
                    <th>Fecha entrada</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php 
                //Por cada producto nuevo que se encuentre en la base de datos imprime la infomracion
                while($row = mysqli_fetch_array($query)): 
                ?>
                <tr>
                <th><?= $row['id'] ?></th>
                <th><?= $row['nombre'] ?></th>
                <th><?= $row['referencia'] ?></th>
                <th><?= "$".$row['precio'] ?></th>
                <th><?= $row['color'] ?></th>
                <th><?= $row['categoria'] ?></th>
                <th><?= $row['stock'] ?></th>
                <th><?= $row['fecha'] ?></th>

                <th><a href="update_cocineta.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                <th><a href="delete_cocineta.php?id=<?= $row['id'] ?>" class="users-table--edit">Eliminar</a></th>             
                </tr>  
                <?php 
                //Finalizamos el ciclo While
                endwhile;
                ?>                          
            </tbody>
        </table>
        <br>
       
    </div>
    <br/>
</body>
</html>


