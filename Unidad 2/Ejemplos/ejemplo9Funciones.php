<?php


//Si le ponemos =valor en un parametro, se vuelve opcional
//Y si no se rellena se coge el valor asignado
function suma($num1, $num2 = 10)
{

    //Variable global se puede acceder desde cualquier sitio
    global $num3;
    $num3 = $num1+$num2;

    return $num1 + $num2;
}

//Para pasar una variable como referencia se utiliza el operador & antes del parametro
//Esto permite modificar la variable que pasamos como argumento
function suma2($num1, $num2, &$resultado)
{
    $resultado = $num1 + $num2;
}

//Podermos asignar en la llamada de la funcion
//un valor a cada nombre de parametro, independientemente de la posicion
//echo suma(num2: 3, num1: 4);

echo $num3;

$resultado = suma(8, 9);
//echo $resultado;

//llamada a la funcion sin el parametro opcional
//echo suma(9);

$valorRet = 0;

$val1 = 4;
$val2 = 5;

suma2($val1, $val2, $valorRet);

//echo $valorRet;

var_dump(str_split("Hello"));
