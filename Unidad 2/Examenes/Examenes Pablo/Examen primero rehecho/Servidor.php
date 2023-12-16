<?php
$nombre = $_POST["nombre"];
$modo = $_POST["modo"];
$direccion = $_POST["direccion"];
$provincia = $_POST["provincia"];
$presupuesto = $_POST["presupuesto"];
$hora = $_POST["hora"];
$listaTomos = $_POST["tomos"];

$tomos = explode("\n", $listaTomos);

function cantidad($tomos)
{
    //Hacemos todas las variables
    $volumenesTotales = 0;
    $unidadesXLS = 0;

    //Creamos el bucle para recorrer cada uno
    foreach ($tomos as $tomo) {
        $datos = explode(",", $tomo);

        //Sumamos el stock
        $volumenesTotales += $datos[3];

        //Sumamos las cantidades XLS si lo cumple
        if ($datos[2] > 300 && ($datos[5] == "S" || $datos[5] == "s")) {
            $unidadesXLS += $datos[3];
        }
    }

    //Mostramos las cantidades
    echo "Volumenes totales: $volumenesTotales <br> Volumenes totales XLS: $unidadesXLS <br>";
}

function stockColeccionista($tomos, $modo)
{
    $huelva = 0;
    $sevilla = 0;
    $cadiz = 0;
    $cordoba = 0;
    $malaga = 0;
    $jaen = 0;
    $granada = 0;
    $almeria = 0;

    foreach ($tomos as $tomo) {
        $datos = explode(",", $tomo);

        if ((trim($datos[5] == "S") || trim($datos[5] == "s")) && $modo == "fisica") {
            switch (strtolower(trim($datos[6]))) {
                case "huelva":
                    $huelva += $datos[3];
                    break;
                case "sevilla":
                    $sevilla += $datos[3];
                    break;
                case "cadiz":
                    $cadiz += $datos[3];
                    break;
                case "cordoba":
                    $cordoba += $datos[3];
                    break;
                case "malaga":
                    $malaga += $datos[3];
                    break;
                case "granada":
                    $granada += $datos[3];
                    break;
                case "almeria":
                    $almeria += $datos[3];
                    break;
                case "jaen":
                    $jaen += $datos[3];
                    break;
            }
        }
    }

    echo "[ Huelva = $huelva, Sevilla = $sevilla, Cadiz = $cadiz, Cordoba = $cordoba, Malaga = $malaga, Jaen = $jaen, Granada = $granada, Almeria = $almeria ] <br>";

    if ($huelva >= 10 && $sevilla >= 10 && $cadiz >= 10 && $cordoba >= 10 && $jaen >= 10 && $malaga >= 10 && $granada >= 10 && $almeria >= 10) {
        echo "Hay stock coleccionista <br>";
    } else {
        echo "No hay stock coleccionista <br>";
    }
}

function sonColindantes($provincia, $tomos)
{
    // Definir las relaciones de colindancia según la descripción proporcionada
    $relaciones = array(
        "Huelva" => array("Sevilla", "Huelva"),
        "Sevilla" => array("Huelva", "Cadiz", "Malaga", "Cordoba", "Sevilla"),
        "Cadiz" => array("Sevilla", "Malaga", "Cadiz"),
        "Cordoba" => array("Sevilla", "Malaga", "Jaen", "Cordoba"),
        "Malaga" => array("Cadiz", "Sevilla", "Cordoba", "Granada", "Malaga"),
        "Jaen" => array("Cordoba", "Granada", "Jaen"),
        "Granada" => array("Malaga", "Jaen", "Almeria", "Granada"),
        "Almeria" => array("Granada", "Almeria")
    );

    // Verificar si las provincias son colindantes
    return in_array($tomos, $relaciones[$provincia]);
}

function cercanias($tomos, $provincia)
{
    $cercanias = true;
    foreach ($tomos as $tomo) {
        $datos = explode(",", $tomo);
        if (!(sonColindantes($provincia, $datos[6]))) {
            $cercanias = false;
        }
    }

    return $cercanias;
}

function tomos($provincia, $tomos, $nombre)
{
    $stock = 0;
    foreach ($tomos as $tomo) {
        $datos = explode(",", $tomo);
        if (!(sonColindantes($provincia, $datos[6])) || $datos[0] != $nombre) {
            echo "No hay stock de $nombre";
            return false;
        }
        $stock += $datos[3];
    }

    echo "Hay: $stock  tomos de $nombre";
}

//Apartado funcionativo

stockColeccionista($tomos, $modo);

cantidad($tomos);

if (cercanias($tomos, $provincia)) {
    echo "Hay cercania <br>";
} else {
    echo "No hay cercania <br>";
}

tomos($provincia, $tomos, "one piece");
