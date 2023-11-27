<?php

include("ArrayAsociativo.php");

//Metemos los datos en una variable para su facil utilizacion
$carta1 = $_POST["Carta1"];
$carta2 = $_POST["Carta2"];
$carta3 = $_POST["Carta3"];
$carta4 = $_POST["Carta4"];
$carta5 = $_POST["Carta5"];


//Mostramos las imagenes de las cartas
echo "<img src=\"./Imagenes/Cartas Poker/$carta1.png\">";
echo "<img src=\"./Imagenes/Cartas Poker/$carta2.png\">";
echo "<img src=\"./Imagenes/Cartas Poker/$carta3.png\">";
echo "<img src=\"./Imagenes/Cartas Poker/$carta4.png\">";
echo "<img src=\"./Imagenes/Cartas Poker/$carta5.png\">";

//Compramos si es color de cada uno
if(strpos($carta1, "Picas") && strpos($carta2, "Picas") && strpos($carta3, "Picas") && strpos($carta4, "Picas") && strpos($carta5, "Picas")){
    echo "<h1>♠️ Es color de Picas ♠️!</h1>";
}else if(strpos($carta1, "Diamantes") && strpos($carta2, "Diamantes") && strpos($carta3, "Diamantes") && strpos($carta4, "Diamantes") && strpos($carta5, "Diamantes")){
    echo "<h1>♦️ Es color de Diamantes ♦️!</h1>";
}else if(strpos($carta1, "Corazones") && strpos($carta2, "Corazones") && strpos($carta3, "Corazones") && strpos($carta4, "Corazones") && strpos($carta5, "Corazones")){
    echo "<h1>♥ Es color de Corazones ♥!</h1>";
}else if(strpos($carta1, "Treboles") && strpos($carta2, "Treboles") && strpos($carta3, "Treboles") && strpos($carta4, "Treboles") && strpos($carta5, "Treboles")){
    echo "<h1>♣ Es color de Treboles ♣!</h1>";
}

//Separamos el numero/as del palo
explode(" ", $carta1);
explode(" ", $carta2);
explode(" ", $carta3);
explode(" ", $carta4);
explode(" ", $carta5);


//Mecanismo para las comprobaciones
//Creamos una variable para contabilizar los iguales
$igual1 = 1;
$igual2 = 1;
$igual3 = 1;
$igual4 = 1;
$igual5 = 1;

//Comprobamos las cartas iguales a la carta 1 
//y sumamos correspondientemente
if($carta1[0]==$carta2[0]){
    $igual1++;
    $igual2++;
}
if($carta1[0]==$carta3[0]){
    $igual1++;
    $igual3++;
}
if($carta1[0]==$carta4[0]){
    $igual1++;
    $igual4++;
}
if($carta1[0]==$carta5[0]){
    $igual1++;
    $igual5++;
}

//Comprobamos las cartas iguales a la carta 2 
//y sumamos correspondientemente
if($carta2[0]==$carta3[0]){
    $igual2++;
    $igual3++;
}
if($carta2[0]==$carta4[0]){
    $igual2++;
    $igual4++;
}
if($carta2[0]==$carta5[0]){
    $igual2++;
    $igual5++;
}

//Comprobamos las cartas iguales a la carta 3 
//y sumamos correspondientemente
if($carta3[0]==$carta4[0]){
    $igual3++;
    $igual4++;
}
if($carta3[0]==$carta5[0]){
    $igual3++;
    $igual5++;
}

//Comprobamos las cartas iguales a la carta 4
//y sumamos correspondientemente
if($carta4[0]==$carta5[0]){
    $igual4++;
    $igual5++;
}

//Sumamos todo
$total = ($igual1+$igual2+$igual3+$igual4+$igual5);
//Si la suma de todo es 13, es que es full
//Siginifica que hay 3, 3 y 2, 2
if($total==13){
    echo "<h1> Es full!! </h1>";
}
?>