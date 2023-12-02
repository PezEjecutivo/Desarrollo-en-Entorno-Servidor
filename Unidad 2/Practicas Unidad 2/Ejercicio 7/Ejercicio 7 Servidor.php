<?php

//Cogemos el nombre
$nombre = $_POST["nombre"];

//Separamos la fecha de nuestro cumpleaños por guinos
$fecha = explode("-", $_POST["fecha"]);

//Guardamos las separaciones en variables mas faciles de entender
$anyo = $fecha[0];
$mes = $fecha[1];
$dia = $fecha[2];

//Como tenemos el mes por separado, podemos compararlo
//Nunca va a ser otra cosa que no sea un numero, asi que podemos compararlo
//De la forma respectiva que toque

if ($mes >= 3 && $mes <= 5) {
    $estacion = "primavera";
} elseif ($mes >= 6 && $mes <= 8) {
    $estacion = "verano";
} elseif ($mes >= 9 && $mes <= 11) {
    $estacion = "otoño";
} else {
    $estacion = "invierno";
}

//Cogemos la fecha actual
$hoy = new DateTime();
//Cogemos la fecha de las vacaciones de navidad (Segun google)
$navidad = new DateTime("2023-12-23");

//Hacemos un diff para saber cual es la diferencia en dias
$faltaNavidad = $hoy->diff($navidad);
//Obtenemos la diferencia de dias
$faltaNavidad = $faltaNavidad->days;

//Cogemos la fecha de las vacaciones de semana santa (Segun google)
//Con hora incluido porque nos pide saber la hora tambien y empiezan en 00:00
$semanaSanta = new DateTime("2024-04-01 00:00:00");

//Hacemos un diff para saber cual es la diferencia en dias
$faltaSemanaSanta = $hoy->diff($semanaSanta);
//Obtenemos la diferencia de dias
$semanaSantaDias = $faltaSemanaSanta->days;
//Cbtenemos la diferencia de horas
$semanaSantaHoras = $faltaSemanaSanta->h;

//Cogemos la fecha entera que hemos puesto 
$fecha = new DateTime($_POST["fecha"]);

//Hacemos una variable para tener el año actual y le sumamos 1
$anio_actual = date("Y");
$anio_actual = $anio_actual + 1;

//Convertimos la fecha que pusimos a String
//Aunque el resultado es el mismo, uno esta en formato fecha y otro en String
$fecha = $fecha->format("Y-m-d");

//Ponemos el año actual al cual le hemos sumado uno y hacemos un substring
//Que empieza por el caracter 4, es decir, hemos cambiado el año
$fecha_modificada = date("Y-m-d", strtotime($anio_actual . substr($fecha, 4)));

//Formateamos la fecha como nos pide el ejercicio
$fecha_formateada = date('l, j F \d\e\l Y', strtotime($fecha_modificada));

//Sacamos el dia de la semana que caeria en esa fecha
$dia_semana = date('N', strtotime($fecha_modificada));
//Creamos la variable para saber si es fin de semana
$finSemana = "no";

//En caso de que sea fin de semana, ponemos que es si
switch ($dia_semana) {
    case 6:
        $finSemana = "si";
        break;
    case 7:
        $finSemana = "si";
        break;
}

//Hacemos el mensaje
echo "Bienvenido $nombre, estás en $estacion quedan $faltaNavidad días para las vacaciones de navidad y $semanaSantaDias días $semanaSantaHoras horas 
      para vacaciones de semana santa de $anio_actual. Tu cumpleaños $finSemana cae en fin de semana y es el dia $fecha_formateada";
