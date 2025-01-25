<?php
include("con_db.php"); 


if (isset($_POST['register'])) {
  
	if (strlen($_POST['usuario']) >= 1 && strlen($_POST['contraseña']) >= 1 && strlen($_POST['mail']) >= 1 && strlen($_POST['nombre']) >= 1) {
	  
	    $name = trim($_POST['usuario']);
	    $contraseña = trim($_POST['contraseña']);
		$mail= trim($_POST['mail']);
		$nombre=trim($_POST['nombre']);
	    $fechareg = date('d-m-Y H:i:s'); 

        $consulta = "INSERT INTO reg_de_usuarios (usuario, contraseña, mail, nombre, fecha_reg) VALUES ('$name','$contraseña','$mail','$nombre','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);

	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}
?>