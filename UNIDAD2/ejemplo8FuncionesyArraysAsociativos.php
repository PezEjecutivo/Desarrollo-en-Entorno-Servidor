<?php 

$ciudades = ["madrid","jaen",null,"Granada","Puerto","Barcelona","","Valencia","madrid","madrid","Barcelona"];

$razasPerros= "bullgod,siberiano,haski siberiano,roth bullier,Alaska Malabute,chihuaua, pastor";

//Ejemplo de funciones de Arrays
//In array nos dice si un texto esta en otro texto, similar a indexof
$ciudadBuscada="madrid";
if (in_array($ciudadBuscada,$ciudades))
        echo "Madrid esta en el array";

//Con explode convertimos un String en un array
$listaPerros=explode(",",$razasPerros);
var_dump($listaPerros);

//con implode hago lo contrario, un array lo convierte en un único string de valores
$arrayTexto =["el","hombre","tiene",23,"años",23.4];
var_dump(implode(" ",$arrayTexto));

//Array count values te cuenta la cantidad de elementos repetidos
$listaRepetidos = array_count_values($ciudades);
//var_dump($listaRepetidos);

//Push y pop añadir y eliminar elementos de un array rapidamente
array_pop($ciudades);
array_push($ciudades,"Cadiz");

//var_dump($ciudades);

$pino1 = ["tipoHoja"=>"caduca","altura"=>23,"entorno"=>"montaña","edad"=>123 ];
$pino2 = ["tipoHoja"=>"caduca","altura"=>34,"entorno"=>"montaña","edad"=>23 ];
$pino3 = ["tipoHoja"=>"peremne","altura"=>12,"entorno"=>"montaña","edad"=>423 ];
$pino4 = ["tipoHoja"=>"caduca","altura"=>67,"entorno"=>"montaña","edad"=>45 ];

//Array values me elimina las claves
$valoresPinos = array_values($pino1);
$clavesPinos = array_keys($pino1);

//var_dump($valoresPinos);
//var_dump($clavesPinos);

$pinos =[$pino1,$pino2,$pino3,$pino4];



//Para recorrer un array utilizamos siempre el foreach
foreach($pinos as $pino)//Array principal
{
    foreach($pino as $clave=>$valor)//Elementos de cada pino (array asociativo)
    {
        //echo "clave: ".$clave." -> valor: ".$valor."<br/>"; 
    }
}







?>