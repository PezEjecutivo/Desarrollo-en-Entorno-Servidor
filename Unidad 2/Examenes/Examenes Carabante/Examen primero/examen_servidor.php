<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        //Esta es de las funciones mas importante del programa si no la que más,
        //Se encarga de devolver una array de arrays asociativos con todos los almacenes divididos
        function procesarAlmacenes($texto)
        {
            //Divido todos los almacenes / tomos con un explode \n
            $tomos = explode("\n", trim($texto));
            //Creo la array de los tomos procesados
            $tomosProcesados = [];
            //Itero todos los tomos / almacenes
            foreach ($tomos as $tomo) {
                //Los separo denuevo con un explode y una , como separador porque asi es como se separan en el ejercicio.
                $tomoActual = explode(",", $tomo);

                //Aquí simplemente accedo por indice a cada parte de este y lo meto en un array asociativo, el cual añado a la array de tomosProcesados
                $tomosProcesados[] = [
                    "nombre" => trim($tomoActual[0]),
                    "detalles" => trim($tomoActual[1]),
                    "paginas" => intval($tomoActual[2]),
                    "unidadesStock" => intval($tomoActual[3]),
                    "categoria" => trim($tomoActual[4]),
                    "coleccionista" => trim($tomoActual[5]),
                    "almacen" => trim(strtolower($tomoActual[6]))
                ];
            }
            //Devuelvo los tomos
            return $tomosProcesados;
        }

        //Funcions para calculas los XLS
        function calcularXLS($almacenes)
        {

            $sumaTotal = 0;

            //Itero todos los almacenes
            foreach ($almacenes as $almacen) {
                //Compruebo que si hay mas de 300 paginas y que si las letras de coleccionistsa es XLS en vez de S o N
                if (intval($almacen["paginas"]) > 300 && trim(strtolower($almacen["coleccionista"])) == "xls") {
                    //Si se cumple lo sumo a sumaTotal
                    $sumaTotal += $almacen["unidadesStock"];
                }
            }

            //La devuelvo
            return $sumaTotal;
        }

        function esColindante($provinciaPrincipal, $provinciaColindante)
        {
            //Creo una array asociativa de las ciudades cuyo valor es una array de ciudades colindantes
            $ciudadesColindantes = [
                "huelva" => ["huelva", "sevilla", "cadiz"],
                "cadiz" => ["cadiz", "huelva", "sevilla", "malaga"],
                "sevilla" => ["sevilla", "huelva", "cadiz", "malaga", "cordoba"],
                "malaga" => ["malaga", "cadiz", "sevilla", "cordoba", "granada"],
                "cordoba" => ["cordoba", "sevilla", "malaga", "jaen", "granada"],
                "jaen" => ["jaen", "cordoba", "granada"],
                "granada" => ["granada", "malaga", "cordoba", "jaen", "almeria"],
                "almeria" => ["almeria", "granada"]

            ];
            //Devuelvo true o false si la array que corresponde a la pedido por parametros esta dentro de la suya
            return in_array($provinciaColindante, $ciudadesColindantes[$provinciaPrincipal]);
        }

        function sumaStocks($almacenes)
        {
            //Suma total
            $sumaTotal = 0;
            //Itero los almacenes, sumo sus stock
            foreach ($almacenes as $almacen)
                $sumaTotal += $almacen["unidadesStock"];

            //Devuelvo la suma total de los stocks
            return $sumaTotal;
        }

        function calcularStockProvincia($almacenes)
        {
            //Creo un array asociativo con todas las provincias y valores a 0.
            $sumaStocksProvincias = [
                "huelva" => 0,
                "cadiz" => 0,
                "sevilla" => 0,
                "malaga" => 0,
                "cordoba" => 0,
                "jaen" => 0,
                "granada" => 0,
                "almeria" => 0
            ];
            //Itero los almacenes
            foreach ($almacenes as $almacen) {
                //Accedo a la array asociativa según el nombre de almacen que se introduce por formulario
                $sumaStocksProvincias[$almacen["almacen"]] += $almacen["unidadesStock"];
            }

            //Devuelvo la suma de los almacenes
            return $sumaStocksProvincias;
        }

        function cumpleCercania($provincia, $almacenes)
        {
            //Iteramos todos los almacenes
            foreach ($almacenes as $almacen) {
                //Si no es colindante no se pueden 
                if (!esColindante($provincia, $almacen["almacen"]))
                    return false;
            }

            return true;
        }

        function stockTomo($almacenes, $provincia, $nombreManga)
        {
            //Iniciamos una variable para llevar la cuennta de los stocks que son colindantes.
            $stockTotal = 0;
            //Iteramos todos los almacenes
            foreach ($almacenes as $almacen) {

                //Comprobamos que sea tanto colindante, tanto que el nombre o la descripcion tengan el nombre del manga
                if (esColindante($provincia, $almacen["almacen"]) && (str_contains($almacen["nombre"], $nombreManga) || str_contains($almacen["detalles"], $nombreManga))) {
                    $stockTotal += $almacen["unidadesStock"];
                }
            }

            return $stockTotal;
        }

        function hayStockColeccionista($almacenes, $fisico)
        {
            //Si no es fisico directamente devolvemos false y no procesamos mas
            if (!$fisico)
                return false;

            //Denuevo array para las sumas pero ahora para coleccionista
            $sumaStocksColeccionista = [
                "huelva" => 0,
                "cadiz" => 0,
                "sevilla" => 0,
                "malaga" => 0,
                "cordoba" => 0,
                "jaen" => 0,
                "granada" => 0,
                "almeria" => 0
            ];

            //Iteramos denuevo, si la letra de coleccionista es s o xls, sumamos
            foreach ($almacenes as $almacen) {
                if (strtolower($almacen["coleccionista"]) == "s" || strtolower($almacen["coleccionista"]) == "xls")
                    $sumaStocksColeccionista[$almacen["almacen"]] += $almacen["unidadesStock"];
            }
            //devolvemos si el minimo, es decir, si alguna tiene menos de 10 el min seria false, si no true;
            return min($sumaStocksColeccionista) > 10 ? true : false;
        }


        //Esta array la he creado por conveniencia de sacarlo por pantalla en mayuscula.
        $provincias = [
            "Huelva",
            "Cadiz",
            "Sevilla",
            "Malaga",
            "Cordoba",
            "Jaen",
            "Granada",
            "Almeria"
        ];



        //Sacamos algunos datos basicos del formulario
        $nombreManga = $_POST["nombre"];
        $provinciaTienda = $_POST["provincia"];

        //Comprobamos si la tienda es fisica
        $esTiendaFisica = $_POST["fisico"] == "fisico" ? true : false;
        $almacenesProcesados = procesarAlmacenes($_POST["tomosManga"]);

        //Realizamos las distintas operaciones con las funciones que hemos creado.
        $volumenesTotales = sumaStocks($almacenesProcesados);
        $cantidadXLSDisponible = calcularXLS($almacenesProcesados);
        $hayStockColeccionista = hayStockColeccionista($almacenesProcesados, $esTiendaFisica);
        $stockPorProvincia = calcularStockProvincia($almacenesProcesados);

        //Las dos ultimas funciones con las ciudades colindantes
        $stockCumpleCercania = cumpleCercania($provinciaTienda, $almacenesProcesados);
        $stockTomoColindante = stockTomo($almacenesProcesados, $provinciaTienda, "one piece");


        //Todo lo que queda aqui es sacar las cosas por pantalla.
        echo "<div class='container mt-5'>";
        echo "<h2>Resultados de su solicitud: </h2>";
        echo "<pre>";
        echo "Número de Volumenes Totales (suma de stocks): " . $volumenesTotales;
        echo "</br>";
        echo "Cantidad de Unidades XLS Disponibles (Más de 300pag y Edición Coleccionista): " . $cantidadXLSDisponible;
        echo "</br>";
        echo "Hay Stock coleccionista: ";
        echo $hayStockColeccionista == true ? "Hay Stock Coleccionista" : "No hay Stock coleccionista";
        echo "</br>";
        echo "\nStock por Provincia:\n";
        foreach ($provincias as $provincia) {
            $provinciaMinuscula = strtolower($provincia);
            echo $provincia . ": " . $stockPorProvincia[$provinciaMinuscula] . "\n";
        }

        echo "</br>";
        echo "Cumple Cercanía" . $stockCumpleCercania == true ? "Se cumple la cercanía" : "No se cumple la cercanía";
        echo "</br>";
        echo "Stock Tomo (Ciudades Colindantes): " . $stockTomoColindante;

        echo "</pre>";
        echo "</div>";
    }


    ?>
</body>

</html>