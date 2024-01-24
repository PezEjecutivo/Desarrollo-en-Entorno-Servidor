<?php
//Creamos todas las variables (darle valor a las manos es inutil pero me gusta)
$manoJugador1 = random_int(1, 3);
$manoJugador2 = random_int(1, 3);
$jugador1 = $_POST["jugador1"];
$jugador2 = $_POST["jugador2"];
$total = 0;
$ronda = 1;
$ganador1 = 0;
$ganador2 = 0;

//Creamos el sistema que vamos a utilizar
//1 = Piedra
//2 = Papel
//3 = Tijeras
//1>3 2>1 3>2 

//Hacemos un do while para que al menos haga el bucle 1 vez
do {
    //Generamos aleatoriamente la tirada de manos
    //Aunque son numeros, realmente es piedra, papel y tijeras
    $manoJugador1 = random_int(1, 3);
    $manoJugador2 = random_int(1, 3);

    //Mostramos la ronda por la que vamos
    echo "<h1>Ronda $ronda</h1>";

    //Sumamos 1 a la ronda para que la proxima vez muestre la ronda bien
    $ronda++;

    //Hacemos una condicion con todas las formas de victorias para el jugador 1
    if (($manoJugador1 == 1 && $manoJugador2 == 3) || ($manoJugador1 == 3 && $manoJugador2 == 2) || ($manoJugador1 == 2 && $manoJugador2 == 1)) {
        //Mostramos el nombre y las manos con imagenes (utilizando el mismo sistemas que en los dados)
        echo "<h2>Mano del $jugador1</h2>";
        echo "<img src=\"../Imagenes/mano$manoJugador1.png\">";
        echo "<h2>Mano del $jugador2</h2>";
        echo "<img src=\"../Imagenes/mano$manoJugador2.png\">";

        //Mostramos quien ha ganado y sumamos 1 al contador de ese jugador
        echo "Ha ganado esta ronda el $jugador1";
        $ganador1++;

        //Hacemos una condicion en caso de que sea empate
    } else if ($manoJugador1 == $manoJugador2) {
        //Mostramos el nombre y las manos con imagenes (utilizando el mismo sistemas que en los dados)
        echo "<h2>Mano del $jugador1</h2>";
        echo "<img src=\"../Imagenes/mano$manoJugador1.png\">";
        echo "<h2>Mano del $jugador2</h2>";
        echo "<img src=\"../Imagenes/mano$manoJugador2.png\">";

        //Mostramos que ha sido empate
        echo "Esta ronda es empate, no ganado nadie";

        //Si no se cumple las condiciones de victoria del jugador 1, ni las de victoria, gana el jugador 2
    } else {
        //Mostramos el nombre y las manos con imagenes (utilizando el mismo sistemas que en los dados)
        echo "<h2>Mano del $jugador1</h2>";
        echo "<img src=\"../Imagenes/mano$manoJugador1.png\">";
        echo "<h2>Mano del $jugador2</h2>";
        echo "<img src=\"../Imagenes/mano$manoJugador2.png\">";

        //Mostramos quien ha ganado y sumamos 1 al contador de ese jugador
        echo "Ha ganado esta ronda el $jugador2";
        $ganador2++;
    }

    //Por estetica
    echo "<hr>";

    //La condicion del while es que alguno de los dos jugadores llegue al numero de victorias seleccioando
} while ($ganador1 != $_POST["victorias"] && $ganador2 != $_POST["victorias"]);

//Comprobamos si el jugador 1 es el ganador
if ($ganador1 > $ganador2) {
    //Mostramos el ganador y el numero de victorias de cada uno
    echo "<h1>Ha ganado $jugador1, $ganador1 Victorias $jugador1 y $ganador2 Victorias $jugador2</h1>";

    //En caso de que no sea el jugador 1, automaticamente es el jugador 2
} else {
    //Mostramos el ganador y el numero de victorias de cada uno
    echo "<h1>Ha ganado $jugador2, $ganador1 Victorias $jugador1 y $ganador2 Victorias $jugador2</h1>";
}
