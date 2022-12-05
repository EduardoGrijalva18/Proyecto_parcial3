<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple Watch - Apple (MX)</title>
    <style>
        .comprahecha{
            font-size: 50px;
            text-align: top;
            color: purple;
        }

        .informacion{
            margin-left: 200px;
        }

        .especificaciones{
            margin-left: 650px;
            margin-top: -80px;
        }

        .descripcion{
            font-size: 20px;
            color: black;
        }

        .nuevo{
            font-size: 25px;
            color: orange;
        }

        .title{
            font-size: 45px;
        }

        .precio{
            color: grey;
            font-size: 21px;
        }

        img{
            height: 200px;
            width: 300px;
            margin-top: 30px;
            margin-left: 150px;

        }
    </style>
</head>
<body>
    <?php include 'menu.php'?>

<div class="informacion">
    <span class="nuevo">Nuevo</span>
    <h1 class="title">Apple Watch</h1>
</div>
<div class="comprar">
    <img src="img/watchultra.png">
</div>

<div class="especificaciones">
    <span class="descripcion">
        -Resolución de 420 x 502 píxeles <br>
        -Chip S8 con procesador de doble núcleo de 64 bits <br>
        -Resistencia al agua y mucho más!!! <br>
    </span>
</div>

<div class="comprahecha">
  <marquee behavior="scroll" direction="left">Compra realizada con éxito</marquee>
</div>

</body>
</html>