<?php 


include_once ("ejemplo9Funciones.php");

echo suma(8+8);

$texto= "En españa se vive muy bien, aupa españa";
$num_reemp=0;

//Vamos a reemplazar en el texto todas las ocurrencias de españa por espania
$cadena_resultado = str_replace("españa","espania",$texto,$num_reemp);

echo "Se ha cambiado españa por espania y el texto resultado es: <br/>";
echo "$cadena_resultado se han reemplazado $num_reemp veces <br/>";

//Explode separa las palabras en un array 
$lista_palabras = explode(" ",$texto);

var_dump($lista_palabras);

$nombres_ciudad = ["Paris","Madrid", "Aguacate",34.23];
//Con implode unimos en una cadena de texto
$cadena_ciudades=implode(" otra ",$nombres_ciudad);

var_dump($cadena_ciudades);



?>