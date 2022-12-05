<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuenta</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body>

    <?php
      include 'conexion.php';
      $sql = "select * from usuarios";
      $datos = $conexion->query($sql);
    ?>

    <?php include 'menu.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">

            <h1 class="title" style="text-align:center; padding-bottom: 20px">Informacion de la cuenta</h1>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Fecha de nacimiento</th>
                            <th>Apple ID</th>
                            <th>Contraseña</th>
                            <th>Numero telefonico</th>
                            <th>Direccion de envio</th>
                            <th>Numero de tarjeta</th>
                            <th>CVV</th>
                            <th>Fecha de vencimiento</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php if($datos->num_rows > 0) { 
                          while($row = $datos->fetch_assoc()) {
                      ?>
                        <tr>
                            <td><?php echo $row["nombre"]; ?></td>
                            <td><?php echo $row["fecha_nacimiento"]; ?></td>
                            <td><?php echo $row["appleid"]; ?></td>
                            <td><?php echo $row["contrasena"]; ?></td>
                            <td><?php echo $row["numero"]; ?></td>
                            <td><?php echo $row["direccion_envio"]; ?></td>
                            <td><?php echo $row["no_tarjeta"]; ?></td>
                            <td><?php echo $row["cvv"]; ?></td>
                            <td><?php echo $row["fecha_vencimiento"]; ?></td>
                            <td>
                                <a href="eliminarRegistro.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                      <?php 
                      } 
                    }
                    $conexion->close();
                      ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.js"></script>
</body>
</html>