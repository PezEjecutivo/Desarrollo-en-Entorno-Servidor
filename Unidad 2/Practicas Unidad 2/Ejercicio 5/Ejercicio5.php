<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="numeros">Introduce una cadena de numeros</label>
        <input type="text" name="numeros" id="numeros">
        <input type="submit" value="Enviar">
    </form>

    <?php 
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        //Con funciones
        $numeros = $_POST["numeros"];
        function dew($numeros, $orden=false){
            $numeros = explode(" ", $numeros);
            $nprimos = 0;
            $minimo = min($numeros);
            $media =0;
            for($i =0; $i<count($numeros); $i++){
                $media = $media+$numeros[$i];
                $esPrimo = true;
                for($j =1; $j<$numeros[$i]; $j++){
                    
                    if($numeros[$i]%$j==0 && $j!=$numeros[$i] && $j!=1){
                        $esPrimo=false;
                    }
                }
                if($esPrimo){
                    $nprimos++;
                }
            }
            $media = $media/count($numeros);

            $arrayNumeros = [
                "nprimos" => $nprimos,
                "media" => $media,
                "minimo" => $minimo
            ];
            if($orden){
                echo "Hay " . $arrayNumeros["nprimos"] . " numeros primos<br>";
                echo "La media es: " . $arrayNumeros["media"] . "<br>";
                echo "El minimo es: " . $arrayNumeros["minimo"] . "<br>";
            }else{
                echo "El minimo es: " . $arrayNumeros["minimo"] . "<br>";
                echo "La media es: " . $arrayNumeros["media"] . "<br>";
                echo "Hay " . $arrayNumeros["nprimos"] . " numeros primos<br>";                
            }
        }

        dew($numeros);
    
    }
    ?>
</body>
</html>