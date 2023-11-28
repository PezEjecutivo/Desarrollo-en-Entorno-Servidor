<?php
include "php/global.php";

if (isset($_POST["lista_cartas"])) {

    $cantidad_palo = [$nombre_palo[0] => 0, $nombre_palo[1] => 0, $nombre_palo[2] => 0, $nombre_palo[3] => 0];
    //Asignamos el array de cartas selecionadas que recibimos del formulario
    $lista_cartas = $_POST["lista_cartas"];

    //Recorremos todo el array de cartas
    //Las cartas vienen codificas asi numcarta-numpalo
    //por ejemplo 3 de corazones es 2-0

    foreach ($lista_cartas as $carta) {
        //Sacamos la ultima posicion de la carta que es el palo
        //Si el palo es mayor de 3 posiciones la ultima donde esta el palo es la 3
        if (strlen($carta) > 3)
            $palo = substr($carta, 3, 3);
        else
            $palo = substr($carta, 2, 2);

        //incrementamos en el array asociativog el palo de la carta actual
        $cantidad_palo[$nombre_palo[$palo]]++;
    }

    //Recorremos el array que tiene el numero de cartas de cada palo
    //Y muestro las cartas de cada palo

    var_dump($cantidad_palo);

    for ($i = 0; $i < count($cantidad_palo); $i++) {
        echo "Hay " . $cantidad_palo[$nombre_palo[$i]] . " cartas del palo $nombre_palo[$i] <br/>";
    }
}
