<?php 

    /*function MOSTRARDATOS($resultados){
    if ($resultados != NULL) {
    echo "nombre ".$resultados['nombre']."<br/>";
    echo "apellido ".$resultados['apellido']."<br/>";
    echo "telefono ".$resultados['telefono']."<br/>";
    echo "edad ".$resultados['edad']."<br/>";
    echo "altura ".$resultados['altura']."<br/>";
    echo "peso ".$resultados['peso']."<br/>";
    } else {
    echo "<br/>no hay mas datos<br/>";
    }
    }
  */  
    echo "hola".$_REQUEST['nombre'];
    $link = mysqli_connect("localhost","lucas","1234","escuela") or die("error");
    /*if($link){
        echo "ok";
    }else{
        echo 'error';
    }*/
    /*mysqli_select_db($link, "TAREAS");
    mysqli_query($link, "SET NAMES UTF8");
    
    $resultados = mysqli_query($link, "SELECT * FROM alumnos");
    MOSTRARDATOS(mysqli_fetch_array($resultados));
    MOSTRARDATOS(mysqli_fetch_array($resultados));
    MOSTRARDATOS(mysqli_fetch_array($resultados));
    MOSTRARDATOS(mysqli_fetch_array($resultados));
    MOSTRARDATOS(mysqli_fetch_array($resultados));
    MOSTRARDATOS(mysqli_fetch_array($resultados));
    
    mysqli_free_result($resultados);
    mysqli_close($link);*/

?>