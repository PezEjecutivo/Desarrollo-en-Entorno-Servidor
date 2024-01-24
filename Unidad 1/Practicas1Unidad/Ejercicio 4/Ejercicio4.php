<?php
//Creamos los dados, numeros aleatorios del 1 al 6, ya que son dados de 6 caras
$dado1 = random_int(1, 6);
$dado2 = random_int(1, 6);
$dado3 = random_int(1, 6);

//Mostramos las imagenes de los dados, ponemos la variable en el nombre
//Ya que las imagenes se llaman dado y el numero que corresponden
//De esta forma hace que cuando la variable sea 3, salga la imagen correspondiente
echo "<img src=\"../Imagenes/dado$dado1.png\" />";
echo "<img src=\"../Imagenes/dado$dado2.png\" />";
echo "<img src=\"../Imagenes/dado$dado3.png\" />";


//Por estetica
echo "<br>";

//Comprobamos si es poker
if ($dado1 == 1 && $dado2 == 1 && $dado3 == 1) {
    echo "<h1>Es poker</h1>";

    //Comprobamos si es trio
} else if ($dado1 == $dado2 && $dado1 == $dado3) {
    echo "<h1>Es trio</h1>";

    //Comprobamos si es pareja
} else if ($dado1 == $dado2 || $dado1 == $dado3 || $dado2 == $dado3) {
    echo "<h1>Es pareja</h1>";

    //Comprobamos la escalera, primero sacamos cual de los dados es el mayor
} else if ($dado1 > $dado2 && $dado1 > $dado3) {
    //Comprobamos si el dado 2 es el segundo mayor 
    //y si es solamente 1 mayor al dado 3
    if ($dado2 > $dado3 && $dado2 - $dado3 == 1) {
        //Comprobamos si el dado 1 es solamente 1 mayor al dado 2
        if ($dado1 - $dado2 == 1) {
            echo "<h1>Es escalera</h1>";
        }
        //En caso de que el dado 2 no sea mayor que el 3
    } else {
        //Comprobamos si el dado 1 es 1 mayor al dado 3
        //y comprobamos si el dado 3 es 1 mayor al dado 2
        if ($dado1 - $dado3 == 1 && $dado3 - $dado2 == 1) {
            echo "<h1>Es ecalera</h1>";
        }
    }

    //Hacemos el mismo proceso que arriba, pero usando el dado 2 como mayor de todos
} else if ($dado2 > $dado1 && $dado2 > $dado3) {
    if ($dado1 > $dado3 && $dado1 - $dado3 == 1) {
        if ($dado2 - $dado1 == 1) {
            echo "<h1>Es escalera</h1>";
        }
    } else {
        if ($dado2 - $dado3 == 1 && $dado3 - $dado1 == 1) {
            echo "<h1>Es escalera</h1>";
        }
    }

    //Hacemos el mismo proceso que arriba, pero usando el dado 3 como mayor de todos
} else if ($dado3 > $dado2 && $dado3 > $dado1) {
    if ($dado1 > $dado2 && $dado1 - $dado2 == 1) {
        if ($dado3 - $dado1 == 1) {
            echo "<h1>Es escalera</h1>";
        }
    } else {
        if ($dado3 - $dado2 == 1 && $dado2 - $dado1 == 1) {
            echo "<h1>Es escalera</h1>";
        }
    }
}
