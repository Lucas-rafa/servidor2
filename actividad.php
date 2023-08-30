<?php 
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


  /*  function MOSTRARDATOS($resultados){
    if ($resultados != NULL) {
    echo "nombre: ".$resultados['nombre']."<br/>";
    echo "apellido: ".$resultados['apellido']."<br/>";
    echo "telefono: ".$resultados['telefono']."<br/>";
    echo "edad: ".$resultados['edad']."<br/>";
    echo "altura: ".$resultados['altura']."<br/>";
    echo "peso: ".$resultados['peso']."<br/>";
    } else {
    echo "<br/>no hay mas datos<br/>";
    }
    }*/
    
    $servername = "18.231.51.10"; 
    $username = "lucas";
    $password = "1234";
    $dbname = "escuela";
    // Crea la conexión
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Verifica la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
    
    // Ejecuta consultas, muestra datos, etc.
    
    // Cierra la conexión
    $conn->close();
    ?>
    
// Incluye el archivo de conexión
include 'conexion.php';

// Consulta SQL
$sql = "SELECT nombre, edad FROM Datos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo " - Nombre: " . $row["nombre"] . " - Edad: " . $row["edad"] . "<br>";
    }
} else {
    echo "No se encontraron resultados.";
}

// Cierra la conexión
$conn->close();

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