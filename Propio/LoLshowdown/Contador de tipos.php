<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Calculadora de regiones</title>
</head>

<body>
    <div class="container" style="padding-top: 20px">
        <form action="" method="post">
            <div class="mb-3">
                <span class="input-group-text" id="basic-addon1">Lista: </span>
                <textarea name="lista" class="form-control" cols="50" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>

        <?php
        error_reporting(E_ERROR | E_PARSE);
        $lista = $_POST["lista"];

        function calcularTipo($lista)
        {
            $demacia = 0;
            $noxus = 0;
            $jonia = 0;
            $shurima = 0;
            $vacio = 0;
            $sombra = 0;
            $piltover = 0;
            $aguas = 0;
            $ixtal = 0;
            $freljord = 0;
            $targon = 0;
            $bandle = 0;
            $runaterra = 0;
            $campeones = explode("\n", trim($lista));

            foreach ($campeones as $campeon) {
                $datos = explode("-", trim($campeon));
                $tipos = explode(",", trim($datos[1]));

                for ($i = 0; $i < count($tipos); $i++) {
                    if (trim($tipos[$i]) == "Demacia") {
                        $demacia++;
                    } else if (trim($tipos[$i]) == "Noxus") {
                        $noxus++;
                    } else if (trim($tipos[$i]) == "Jonia") {
                        $jonia++;
                    } else if (trim($tipos[$i]) == "Shurima") {
                        $shurima++;
                    } else if (trim($tipos[$i]) == "Vacio") {
                        $vacio++;
                    } else if (trim($tipos[$i]) == "Islas de la sombra") {
                        $sombra++;
                    } else if (trim($tipos[$i]) == "Piltover") {
                        $piltover++;
                    } else if (trim($tipos[$i]) == "Aguas estancadas") {
                        $aguas++;
                    } else if (trim($tipos[$i]) == "Ixtal") {
                        $ixtal++;
                    } else if (trim($tipos[$i]) == "Freljord") {
                        $freljord++;
                    } else if (trim($tipos[$i]) == "Targon") {
                        $targon++;
                    } else if (trim($tipos[$i]) == "Bandle") {
                        $bandle++;
                    } else if (trim($tipos[$i]) == "Runaterra") {
                        $runaterra++;
                    }
                }
            }
            echo '<img src="./img/Demacia.png" style="width: 30px;" alt=""> Demacia: ' . $demacia . '<br>';
            echo '<img src="./img/noxus.png" style="width: 30px;" alt=""> Noxus: ' . $noxus . '<br>';
            echo '<img src="./img/Jonia.png" style="width: 30px;" alt=""> Jonia: ' . $jonia . '<br>';
            echo '<img src="./img/Shurima.png" style="width: 30px;" alt=""> Shurima: ' . $shurima . '<br>';
            echo '<img src="./img/Vacio.png" style="width: 30px;" alt=""> Vacio: ' . $vacio . '<br>';
            echo '<img src="./img/Sombra.png" style="width: 30px;" alt=""> Islas de la sombra: ' . $sombra . '<br>';
            echo '<img src="./img/Piltover.png" style="width: 30px;" alt=""> Piltover: ' . $piltover . '<br>';
            echo '<img src="./img/Aguas.png" style="width: 30px;" alt="">Aguas estancadas: ' . $aguas . '<br>';
            echo '<img src="./img/Ixtal.png" style="width: 30px;" alt=""> Ixtal: ' . $ixtal . '<br>';
            echo '<img src="./img/Freljord.png" style="width: 30px;" alt=""> Freljord: ' . $freljord . '<br>';
            echo '<img src="./img/Targon.png" style="width: 30px;" alt=""> Targon: ' . $targon . '<br>';
            echo '<img src="./img/Runaterra.png" style="width: 25px;" alt=""> Runaterra: ' . $runaterra . '<br>';
            echo '<img src="./img/Bandle.png" style="width: 30px;" alt=""> Bandle: ' . $bandle . "<br>";
        }
        calcularTipo($lista);

        ?>
    </div>

</body>

</html>