<?php 

    include("conexion.php");
    
    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $telefono = $_REQUEST['telefono'];
    $edad = $_REQUEST['edad'];
    $altura = $_REQUEST['altura'];
    $peso = $_REQUEST['peso'];

    echo "hola ".$nombre;
    echo "<br>";
    echo $apellido;
    echo "<br>";
    echo $telefono;
    echo "<br>";
    echo $edad;    
    echo "<br>";
    echo $altura;
    echo "<br>";
    echo $peso;
    ?>    