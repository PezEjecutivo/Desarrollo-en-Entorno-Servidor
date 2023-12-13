<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8 Poker</title>
</head>
<body>
<div class="container" style="padding-top: 20px;">
    <!--El formulario envia con el metodo post los datos-->
    <form method="post" action="./Ejercicio8Mano.php">
    <?php 
    //Incluimos el array asociativo que habiamos creado antes
    include "ArrayAsociativo.php";

    //Como nos pide que lo automaticemos
    //Creamos un bucle para generar los 5 selects
    for($i=1; $i<6; $i++){
        echo "<select name=\"Carta$i\" id=\"Carta$i\">";

        //Creamos dos bucles, uno de 4 y otro de 13
        //Para generar el valor de la carta y el palo que es
        for($j=1; $j<5; $j++){
            for($k=1; $k<14; $k++){
                echo "<option value=\"$cartas[$k] $palo[$j]\">$cartas[$k] de $palo[$j]</option>";
            }
        }
        echo "</select>";
    }
    ?>

        <div class="col-12">
        <!--Este boton lanza el formulario al ser tipo submit-->
        <button class="btn btn-primary" type="submit">Enviar</button>
      </div>
    </form>

  </div>
</body>
</html>