<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPhone 13 - Apple (MX)</title>
    <style>
        .button{
            margin-left: 275px;
            font-size: 25px;
        }
        .comprar{
            display: flex;
        }

        .informacion{
            margin-left: 200px;
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

        }

        .modelocomp{
            font-size: 30px;
        }

        .modelo14 > button{
            width: 300px;
            height: 100px;
            border-radius: 15px;
            background-color: ;
            font-size: 20px;
            margin: 0 auto;    
            padding-top: 5px; 
        }

        .modelo14plus > button{
            width: 300px;
            height: 100px;
            border-radius: 15px;
            background-color: ;
            font-size: 20px;
            margin: 0 auto;
            padding-top: 5px;   
        }

        .modelo14{
            border-color: 1px blue;
        }
    </style>
</head>
<body>
    <?php include 'menu.php'?>

<div class="informacion">
    <span class="nuevo">Nuevo</span>
    <h1 class="title">Compra el iPhone 13</h1>
    <span class="precio">$25,999.00</span>
</div>
<div class="comprar">
    <img src="img/i13promax.png">
    <div class="modelo">
        <span class="modelocomp">Modelo. ¿Cuál es el mejor para ti?</span> <br><br><br>

        <div class="modelos">

            <div class="modelo14">
                <button class="comprar">
                    <div class="infomodelo">
                        <span>iPhone 13</span><br>
                        <p>Pantalla de 6.0 pulgadas</p>
                    </div>
                    <span>Desde $17,999</span>
                </button>
                <a href="iphone13_compra.php" class="button">Comprar</a>
            </div>
            <br>
            <div class="modelo14plus">
                <button class="comprar">
                    <div class="infomodelo">
                        <span>iPhone 13 Plus</span><br>
                        <p>Pantalla de 6.5 pulgadas</p>
                    </div>
                    <span>Desde $24,999</span>
                </button>
                <a href="iphone13_compra.php" class="button">Comprar</a>
            </div>

        </div>
    </div>
</div>

</body>
</html>