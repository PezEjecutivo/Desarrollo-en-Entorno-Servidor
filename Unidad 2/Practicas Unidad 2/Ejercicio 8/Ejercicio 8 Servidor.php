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
    <!--Ponemos un poco de estilo ya que nos pide que este bonito-->
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
    //Quitamos los warnings, ya que funciona adecuadamente pero aparecen
    error_reporting(E_ERROR | E_PARSE);

    //Recibimos los datos del formulario
    $codigos = $_POST["menu"];

    //Lo separamos por linea
    $menus = explode("\n", $codigos);
    //Creamos todas las variables
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

    //Hacemos un foreach para recorrer cada linea
    foreach ($menus as $menu) {

        //Separamos los datos del menu con el -
        $datosMenu = explode("-", $menu);

        //Si empieza por S, los datos iran para el header
        if ($datosMenu[0][0] == "S") {

            //Anadimos el nombre del menu 
            $header[$contadorHeader] = ($datosMenu[1]);
            //Añadimos el color del menu
            $colorHeader[$contadorHeader] = ($datosMenu[2]);
            //Añadimos el url del menu
            $urlHeader[$contadorHeader] = ($datosMenu[3]);
            //Añadimos el orden del array
            $ordenHeader[$contadorHeader] = $datosMenu[0][1];

            //Aumentamos el indice del menu
            $contadorHeader++;
            //Si empieza por I iran para el footer
        } else if ($datosMenu[0][0] == "I") {

            //Anadimos el nombre del menu
            $footer[$contadorFooter] = ($datosMenu[1]);
            //Añadimos el color del menu
            $colorFooter[$contadorFooter] = ($datosMenu[2]);
            //Añadimos el url del menu
            $urlFooter[$contadorFooter] = ($datosMenu[3]);
            //Añadimos el orden del array
            $ordenFooter[$contadorFooter] = $datosMenu[0][1];

            //Aumentamos el indice del menu
            $contadorFooter++;
            //En caso de que no se introduzca el codigo correcto, mostraremos que esta mal
        } else {
            echo "No se ha introducido el codigo correctamente";
            return false;
        }
    }


    //Cambiamos los colores a ingles, para usarlo con style
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

    //Cambiamos los colores a ingles, para usarlo con style
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

    //Hacemos el header
    echo "<header style=\"background-color: green;\">";
    for ($i = 0; $i <= count($header); $i++) {
        echo "<h1>";
        //Usando el como indice la variable de orden, ponemos color, url, header
        echo "<a style=\"color: " . $colorHeader[intval($ordenHeader[$i])] . ";\" href=\"" . $urlHeader[intval($ordenHeader[$i])] . "\">" . $header[intval($ordenHeader[$i])] . "</a>";
        echo "</h1>";
    }
    echo "</header>";

    //Para el grid, creamos las variables
    $maximoAncho = 0;
    $ancho = 0;
    $maximoAltura = 0;
    //Como el maximo de checkbox que hay son 4
    //Hacemos dos bucles de 4
    //Uno para las filas, otros para la anchura
    for ($i = 0; $i < 4; $i++) {
        for ($j = 0; $j < 4; $j++) {
            //Guardamos el post en una variable para que sea mas legible de usar
            $temporal = $_POST["grid$i$j"];
            //Si esta marcado, aumentamos el ancho
            if ($temporal == "on") {
                $ancho++;
            }
        }
        //Si hay 1 solo checkbox pulsado en una fila, aumentamos la altura
        if ($ancho >= 1) {
            $maximoAltura++;
        }
        //Si el ancho es mayor al maximo ancho,
        //Igualamos el valor maximo al de ancho
        if ($maximoAncho < $ancho) {
            $maximoAncho = $ancho;
        }
        //Reseteamos la variable para poder comprobar fila por fila
        $ancho = 0;
    }


    //Creamos la tabla
    echo "<table border=\"1\">";
    //Usando la altura maxima para las filas
    for ($i = 0; $i < $maximoAltura; $i++) {
        echo "<tr>";
        //Usando el ancho maximo para las columnas
        for ($j = 0; $j < $maximoAncho; $j++) {
            //Igualamos la variable color a nada
            $color = "";
            //Si el checkbox esta pulsado
            if ($_POST["grid$i$j"] == "on") {
                //Le ponemos color de fondo a esa celda
                $color = "background-color: gold;";
            }
            //Creamos la celda, con el color correspondiente
            echo "<td style=\"border: 1px solid black; padding: 5px; $color\" >";
            //Si el checkbox tiene algo puesto, le añadimos valor
            if ($_POST["grid$i$j"] == "on") {
                echo "<p>Activastes este boton</p>";
            }
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";


    //Hacemos el footer
    echo "<footer style=\"background-color: green;\">";
    for ($i = 0; $i <= count($footer); $i++) {
        echo "<h1>";
        //Usando el como indice la variable de orden, ponemos color, url, fooer
        echo "<a style=\"color: " . $colorFooter[intval($ordenFooter[$i])] . ";\" href=\"" . $urlFooter[intval($ordenFooter[$i])] . "\">" . $footer[intval($ordenFooter[$i])] . "</a>";
        echo "</h1>";
    }
    echo "</footer>";



    ?>
</body>

</html>