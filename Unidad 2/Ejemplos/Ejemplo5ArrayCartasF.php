<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <?php
    include "php/global.php";
    ?>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    </head>

<body>
    <form action="Ejemplo5ContarCartas.php" method="post">

        <?php
        //Generamos dinamicamente una tabla para seleccionar las cartas 
        //de una baraja de poquer
        echo "        <table class='table'>\n";
        //En cada palo hay trece cartas, cada carta en una linea
        for ($i = 0; $i < 13; $i++) {
            echo "<tr  scope='row'>\n";
            //En cada linea ponemos los 4 palos
            for ($j = 0; $j < 4; $j++) {
                echo "<td>\n";
                echo "<label>$nombre_carta[$i] de $nombre_palo[$j]</label>\n";
                echo "<input type='checkbox' name='lista_cartas[]' value='".$i."-".$j."' />\n";
                echo "</td>\n";
            }

            echo "</tr>\n";
        }

        echo "    </table>\n";

        echo "<button class='btn btn-primary' type='submit'>ENVIAR CARTAS</button>";

        ?>

    </form>
</body>

</html>