<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>

<body>
    <form action="" method="post">
        <label for="numeros">Introduce una cadena de numeros</label>
        <input type="text" name="numeros" id="numeros">
        <input type="submit" value="Enviar">
    </form>

    <?php
    error_reporting(E_ERROR | E_PARSE);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //Sin funciones funciones
        $numeros = $_POST["numeros"];
        $posicion = 0;
        //Creamos nuestro propio explode
        for ($i = 0; $i < strlen($numeros); $i++) {

            //Si el caracter no es un espacio
            if ($numeros[$i] != " ") {
                //Concatenamos el caracter actual con el valor del array
                //Podriamos pensar que como son numeros deberias sumarlos pero no
                //Si lo sumamos 13 se convertiria en 4, por lo que hay que concatenarlo
                //al ir caracter por caracter
                $numerosSeparados[$posicion] = $numerosSeparados[$posicion] . $numeros[$i];
            } else {
                //Si el caracter es un espacio, aumetanmos el indice
                $posicion++;
            }
        }
        $nprimos = 0;
        //Ponemos el maximo valor posible al minimo
        $minimo = PHP_INT_MAX;
        $media = 0;
        //Hacemos un bucle para comprobar las cosas
        for ($i = 0; $i < count($numerosSeparados); $i++) {
            //Sumamos todos los numeros
            $media = $media + $numerosSeparados[$i];
            $esPrimo = true;
            for ($j = 2; $j < $numerosSeparados[$i]; $j++) {
                //Comprobamos si no es primo
                if ($numerosSeparados[$i] % $j == 0) {
                    $esPrimo = false;
                }
            }
            //Si es primo sumamos 1
            if ($esPrimo) {
                $nprimos++;
            }
            //Comprobamos el numero actual con el minimo
            //Si el minimo es mayor, lo igualamos al numero actual
            if ($numerosSeparados[$i] < $minimo) {
                $minimo = $numerosSeparados[$i];
            }
        }
        //dividimos la media por la cantidad de numeros en el array
        $media = $media / count($numerosSeparados);
        //Creamos el array asociativo
        $arrayNumeros = [
            "nprimos" => $nprimos,
            "media" => $media,
            "minimo" => $minimo
        ];

        //Como en este caso no hay una funcion, ponemos este orden
        echo "<table>";
        echo "    <tr>";
        echo "        <th>Nombre</th>";
        echo "        <th>Valor</th>";
        echo "    </tr>";
        echo "    <tr>";
        echo "        <td>minimo</td>";
        echo "        <td>" . $arrayNumeros["minimo"] . "</td>";
        echo "    </tr>";
        echo "    <tr>";
        echo "        <td>media</td>";
        echo "        <td>" . $arrayNumeros["media"] . "</td>";
        echo "    </tr>";
        echo "    <tr>";
        echo "        <td>nprimos</td>";
        echo "        <td>" . $arrayNumeros["nprimos"] . "</td>";
        echo "    </tr>";
        echo "</table>";
    }

    ?>
</body>

</html>