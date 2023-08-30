<?php 

    include("conexion.php");

if (isset($_POST['enviar'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
	    $name = trim($_POST['name']);
        $apellido = trim($_POST['apellido']);
	    $tele = trim($_POST['telefono']);
	    $edad = trim($_POST['edad']);
        $altura = trim($_POST['altura']);
        $peso = trim($_POST['peso']);
	    $consulta = "INSERT INTO Datos(nombre, apellido, telefono, edad, altura, peso ) VALUES ('$name','$apellido','$tele','$edad','$altura','$peso')";
	    $resultado = mysqli_query($conn,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">Se cargaron los datos correctamente</h3>
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