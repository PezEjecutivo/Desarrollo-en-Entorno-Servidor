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
            $contador=0;
            $numerosSeparados[$contador]=0;
            for($i=0; $i<strlen($numeros); $i++){
                if($numeros[$i]!=" "){
                    $numerosSeparados[$contador]= $numerosSeparados[$contador] + $numeros[$i];
                }else{
                    $contador++;
                }
            }

            $nprimos = 0;
            $minimo = 234324324;
            $media =0;
            for($i =0; $i<count($numerosSeparados); $i++){
                $media = $media+$numerosSeparados[$i];

                if($minimo>$numerosSeparados[$i]){
                    $minimo=$numerosSeparados[$i];
                }
                
                $esPrimo = true;
                for($j =1; $j<$numerosSeparados[$i]; $j++){
                    
                    if($numerosSeparados[$i]%$j==0 && $j!=$numerosSeparados[$i] && $j!=1){
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