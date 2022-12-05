<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Macbook Air Pro - Apple (MX)</title>
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
            height: 400px;
            width: 400px;
            margin-left: 150px;
            margin-top: 50px;

        }

    </style>
</head>
<body>
    <?php include 'menu.php'?>

<div class="informacion">
    <span class="nuevo">Nuevo</span>
    <h1 class="title">Macbook Air Pro</h1>
</div>
<div class="comprar">
    <img src="img/macbook.png">
</div>

<div class="especificaciones">
    <span class="descripcion">
        -1 TB <br>
        -16 GB RAM <br>
        -Procesador Apple M2 <br>
    </span>
</div>

<div class="comprahecha">
  <marquee behavior="scroll" direction="left">Compra realizada con éxito</marquee>
</div>

</body>
</html>