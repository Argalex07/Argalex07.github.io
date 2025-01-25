<?php 
session_start();
include 'con_db.php';
$usuario= $_SESSION['usuario'];
/*echo "<a class:cerrarsesion href='cerrar_sesion.php'> Cerrar sesion </a>";*/
$consulta="SELECT loguin, usuario FROM registro_de_ingreso WHERE usuario='$usuario'";
?>

<?php

//Incluimos el archivo connection
include('connection.php');

$conect = connection();

//Definimos un Query SQL
$sql = "SELECT * FROM productos";
//Ejecutamos el Query
$query = mysqli_query($conect , $sql);

echo "<h2><div></div>";

?>

<!DOCTYPE html>
<html lang="es" >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
	   <title>SEÑOR RECAMARA</title>
	   <link rel="stylesheet" href="CSS/normalize.css">
	   <link rel="stylesheet" href="CSS/estilos.css">
	   <link rel="stylesheet" href="CSS/font.css">
      
	  
  </head>
  <body>
     <header class="main-header">
        <div class="container container--flex">
           <div class="logo container column column--50">
           </div>
 
              </p>

           </div>
        </div>
     </header>
     <nav class="main-nav">
        <div class="container container--flex">
         <span class="icon-menu" id="btnmenu"></span>
         <ul class="menu" id="menu">
             <li class="menu__item"><a href="home.php" class="menu__link menu__link--select">Inicio</a></li>
             <li class="menu__item"><a href="recamaras.php" class="menu__link">Recamaras</a></li>
             <li class="menu__item"><a href="cocineta.php" class="menu__link">Cocinetas</a></li>
             <li class="menu__item"><a href="reg_login.php" class="menu__link">registro de sesion</a></li>
             <li class="menu__item"><a href="cerrar_sesion.php" class="menu__link">cerrar sesion</a></li>
             

         </ul>


         </div>
        </div>
     </nav>

  <section class="banner">
     <img src="IMAGENES/rec.jpg" alt=" " class="banner__img">
     <div class="banner__content">INVENTARIO SEÑOR RECAMARA.</div>


  </section>


  
