<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <form action="actividad.php" method="post">
            <legend>Datos Personales</legend><br>
            <label>Nombre: </label>
            <input type="text" width="200px" name="nombre">
            <br> 
            <label>Apellido: </label>
            <input type="text" width="200px" name="apellido">
            <br>
            <label>Telefono: </label>
            <input type="text" name="telefono" width="200px">
            <br>
            <label>Edad: </label>
            <input type="text" name="edad" width="200px">
            <br>
            <label>Altura: </label>
            <input type="text" name="altura" width="200px">
            <br>
            <label>Peso: </label>
            <input type="text" name="peso" width="200px">
            <br>
            <input type="submit" value="Enviar"> 
        </form>
    </fieldset>
    <?php 
        include("actividad.php");
    ?>
</body>
</html>