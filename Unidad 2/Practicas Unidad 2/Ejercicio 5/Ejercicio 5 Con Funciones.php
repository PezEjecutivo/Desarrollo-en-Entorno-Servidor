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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //Con funciones
        $numeros = $_POST["numeros"];

        //Creamos la funcion que realizara todo el ejercicio
        function dew($numeros, $orden = false)
        {
            //Separamos los numeros con espacios
            $numeros = explode(" ", $numeros);
            //Creamos las variables
            $nprimos = 0;
            //ponemos el numero minimo
            $minimo = min($numeros);
            $media = 0;
            //Hacemos un bucle para los calculos
            for ($i = 0; $i < count($numeros); $i++) {
                //Sumamos todos los numeros para la media
                $media = $media + $numeros[$i];
                //Hacemos un boolean de si es primo
                $esPrimo = true;
                //Hacemos un bucle para saber si es primo
                for ($j = 1; $j < $numeros[$i]; $j++) {

                    //En caso de que no sea primo, lo ponemos en false
                    if ($numeros[$i] % $j == 0 && $j != $numeros[$i] && $j != 1) {
                        $esPrimo = false;
                    }
                }
                //Si es primo, sumamos 1
                if ($esPrimo) {
                    $nprimos++;
                }
            }
            //Dividimos la media entre el numero de numeros
            $media = $media / count($numeros);

            //Creamos el array asociativo
            $arrayNumeros = [
                "nprimos" => $nprimos,
                "media" => $media,
                "minimo" => $minimo
            ];
            //Lo mostramos de esta forma si tiene algun valor en orden
            if ($orden) {
                echo "<table>";
                echo "    <tr>";
                echo "        <th>Nombre</th>";
                echo "        <th>Valor</th>";
                echo "    </tr>";
                echo "    <tr>";
                echo "        <td>nprimos</td>";
                echo "        <td>" . $arrayNumeros["nprimos"] . "</td>";
                echo "    </tr>";
                echo "    <tr>";
                echo "        <td>media</td>";
                echo "        <td>" . $arrayNumeros["media"] . "</td>";
                echo "    </tr>";
                echo "    <tr>";
                echo "        <td>minimo</td>";
                echo "        <td>" . $arrayNumeros["minimo"] . "</td>";
                echo "    </tr>";
                echo "</table>";
                //Lo mostramos de otra forma si no tiene nada en orden
            } else {
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
        }

        dew($numeros);
    }
    ?>
</body>

</html>