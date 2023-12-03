<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        main {
            flex: 1;
            padding: 20px;
        }

        footer {
            padding: 10px;
            text-align: center;
            margin-top: auto;
        }
    </style>
    <?php
    //[S-Menu superior/I-Menu inferior][orden del menu]-[nombre menu]-[Color Letra]-[url destino]
    error_reporting(E_ERROR | E_PARSE);

    $codigos = $_POST["menu"];

    $menus = explode("\n", $codigos);
    $header = [];
    $footer = [];
    $ordenHeader = [];
    $ordenFooter = [];
    $colorHeader = [];
    $colorFooter = [];
    $urlHeader = [];
    $urlFooter = [];
    $contadorHeader = 0;
    $contadorFooter = 0;

    foreach ($menus as $menu) {


        $datosMenu = explode("-", $menu);
        //$palabrasSeparadas[$posicion] = isset($palabrasSeparadas[$posicion])
        if ($datosMenu[0][0] == "S") {


            $header[$contadorHeader] = isset($header[$contador]);
            $header[$contadorHeader] = ($datosMenu[1]);


            $colorHeader[$contadorHeader] = isset($colorHeader[$contador]);
            $colorHeader[$contadorHeader] = ($datosMenu[2]);


            $urlHeader[$contadorHeader] = isset($urlHeader[$contador]);
            $urlHeader[$contadorHeader] = ($datosMenu[3]);


            $ordenHeader[$contadorHeader] = isset($ordenHeader[$contador]);
            $ordenHeader[$contadorHeader] = $datosMenu[0][1];

            $contadorHeader++;
        } else if ($datosMenu[0][0] == "I") {

            $footer[$contadorFooter] = isset($footer[$contador]);
            $footer[$contadorFooter] = ($datosMenu[1]);

            $colorFooter[$contadorFooter] = isset($colorFooter[$contador]);
            $colorFooter[$contadorFooter] = ($datosMenu[2]);

            $urlFooter[$contadorFooter] = isset($urlFooter[$contador]);
            $urlFooter[$contadorFooter] = ($datosMenu[3]);


            $ordenFooter[$contadorFooter] = isset($ordenFooter[$contador]);
            $ordenFooter[$contadorFooter] = $datosMenu[0][1];

            $contadorFooter++;
        } else {
            echo "No se ha introducido el codigo correctamente";
            return false;
        }

        $contador++;
    }
    for ($i = 0; $i < count($colorHeader); $i++) {
        if ($colorHeader[$i] == "AZUL") {
            $colorHeader[$i] = "blue";
        } else if ($colorHeader[$i] == "NEGRO") {
            $colorHeader[$i] = "black";
        } else if ($colorHeader[$i] == "ROJO") {
            $colorHeader[$i] = "red";
        } else {
            $colorHeader[$i] = "green";
        }
    }

    for ($i = 0; $i < count($colorFooter); $i++) {
        if ($colorFooter[$i] == "AZUL") {
            $colorFooter[$i] = "blue";
        } else if ($colorFooter[$i] == "NEGRO") {
            $colorFooter[$i] = "black";
        } else if ($colorFooter[$i] == "ROJO") {
            $colorFooter[$i] = "red";
        } else {
            $colorFooter[$i] = "green";
        }
    }

    for ($i = 0; $i < count($header); $i++) {
        echo $header[$contador];
    }

    echo "<header style=\"background-color: green;\">";
    for ($i = 0; $i <= count($header); $i++) {
        echo "<h1>";
        echo "<a style=\"color: " . $colorHeader[intval($ordenHeader[$i])] . ";\" href=\"" . $urlHeader[intval($ordenHeader[$i])] . "\">" . $header[intval($ordenHeader[$i])] . "</a>";
        echo "</h1>";
    }
    echo "</header>";

    $maximoAncho = 0;
    $ancho = 0;
    $maximoAltura = 0;
    for ($i = 0; $i < 4; $i++) {
        for ($j = 0; $j < 4; $j++) {
            $temporal = $_POST["grid$i$j"];
            if ($temporal == "on") {
                $ancho++;
            }
        }
        if ($ancho >= 1) {
            $maximoAltura++;
        }
        if ($maximoAncho < $ancho) {
            $maximoAncho = $ancho;
        }
        $ancho = 0;
    }


    echo "<table border=\"1\">";
    for ($i = 0; $i < $maximoAltura; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $maximoAncho; $j++) {
            $color = "";
            if ($_POST["grid$i$j"] == "on") {
                $color = "background-color: gold;";
            }
            echo "<td style=\"border: 1px solid black; padding: 5px; $color\" >";
            if ($_POST["grid$i$j"] == "on") {
                echo "<p>Activastes este boton</p>";
            }
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";


    echo "<footer style=\"background-color: green;\">";
    for ($i = 0; $i <= count($footer); $i++) {
        echo "<h1>";
        echo "<a style=\"color: " . $colorFooter[intval($ordenFooter[$i])] . ";\" href=\"" . $urlFooter[intval($ordenFooter[$i])] . "\">" . $footer[intval($ordenFooter[$i])] . "</a>";
        echo "</h1>";
    }
    echo "</footer>";



    ?>
</body>

</html>