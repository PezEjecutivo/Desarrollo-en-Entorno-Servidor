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
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        //Sin funciones funciones
        $numeros = $_POST["numeros"];
        $posicion = 0;
        //Creamos nuestro propio explode
        for($i=0;$i<strlen($numeros); $i++){
          
          if($numeros[$i]!=" "){
              $numerosSeparados[$posicion] = $numerosSeparados[$posicion] . $numeros[$i];
          }else{
              $posicion++;
          }
        }
        $nprimos = 0;
        $minimo = PHP_INT_MAX;
        for($i=0; $i<count($numerosSeparados); $i++){
            if($numerosSeparados[$i]< $minimo){
                $minimo= $numerosSeparados[$i];

            }
        }
        $media =0;
        for($i =0; $i<count($numerosSeparados); $i++){
            $media = $media+$numerosSeparados[$i];
            $esPrimo = true;
            for($j =2; $j<$numerosSeparados[$i]; $j++){
                
                if($numerosSeparados[$i]%$j==0){
                    $esPrimo=false;
                }
            }
            if($esPrimo){
                $nprimos++;
            }
        }
        $media = $media/count($numerosSeparados);
        $arrayNumeros = [
            "nprimos" => $nprimos,
            "media" => $media,
            "minimo" => $minimo
        ];

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