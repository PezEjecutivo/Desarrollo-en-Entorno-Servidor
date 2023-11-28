<?php


/*

Nombre texto
localidad desplegable
Director General texto
número de jugadores desplegable 1-40
Logo Equipo tipo file, selección fichero
Presupuesto (radio o select con 3 opciones 0-10000, 10000-100000, >100000
Categoría desplegable (alevín, general, veteranos) 
Jugadores Área de Texto
Botón Enviar

Los jugadores se introducirán en un área de texto, en cada línea uno (Recordar que \n es separador de línea) 
se introduce un jugador en el siguiente formato:

Juan 23 P S 197

Siendo los datos, separados por espacios, nombre, edad, Posición (B base,A Alero,E escolta, P pivot), 
Federado (si o no)   y altura en cm.

Cuando se pulse el botón, se enviará a otra página php que realizara lo siguiente:

Evaluará si puede inscribirse el club de baloncesto, para lo cual tendrá que cumplir las siguientes condiciones:

El número de jugadores introducido coincide con la cantidad de líneas en los datos de jugadores
Todos los jugadores están federados, excepto si son veteranos
Si la categoría es alevín deben de estar entre 8 y 11 años todos los jugadores
Si son veteranos tienen que tener más de 40 años
No puede haber ningún pivot de menos de 180cm de altura

La página mostrará en color verde o rojo las condiciones dependiendo si cumple o no con los datos introducidos en el formulario. (Si las cumple en verde y si no las cumple en rojo)
Para realizar la solución, tendrá que crear una función:

function cumpleDomicilio($textoJugad,$num_jugadores,$categoria): Recibe el texto del texarea jugadores, 
la cantidad de jugadores y la categoria y verifica si cumple todas las condiciones, 
devuelve un array asociativo con las 5 condiciones como claves y valores true o false dependiendo.

["nombre"]=> string(5) "pablo" ["localidad"]=> string(10) "localidad4" ["director"]=> string(8) "23423423" ["numJug"]=> string(1) "3" ["edad"]=> string(2) "25" ["rutalogo"]=> string(47) "1559679036_977776_1559679371_noticia_normal.jpg" ["presupuesto"]=> string(5) "50000" 
["categoria"]=> string(6) "alevin" ["txtJugadores"]=> string(59) "Juan 8 P S 197 Juan 9 P S 197 Juan 11 P S 197 "

*/

function cumpleDomicilio($textoJugad, $num_jugadores, $categoria)
{


    //Separo las lineas del textArea de jugadores
    $datosJugad = explode("\n", $textoJugad);
    //Primera condicion implica comprobar que el numjug del formulario sea igual a las lineas
    $resultado["numJugCorrecto"] = (count($datosJugad) == $num_jugadores);

    //Juan 23 P S 197

    //Inicializamos los booleanos
    $sonFeder = true;
    $edadAlevin = true;
    $edadmas40 = true;
    $pivotOK = true;

    //Recorremos los datos de los jugadores para comprobar las condiciones
    foreach ($datosJugad as $jugador) {
        //Separo los datos del jugador
        $datosJ = explode(" ", $jugador);

        //Si hay un jugador no federado lo ponemos a false
        if ($datosJ[3] == "N")
            $sonFeder = false;

        //Comprobamos las edades de los jugadores para alevines
        if ($datosJ[1] < 8 || $datosJ[1] > 11)
            $edadAlevin = false;

        //Comprobamos las edades de los jugadores para veteranos
        if ($datosJ[1] < 40)
            $edadmas40 = false;

        //Comprobamos las edades de los jugadores para veteranos
        if ($datosJ[4] < 180 && $datosJ[2]=="P")
            $pivotOK = false;
    }
    //Todos los jugadores están federados, excepto si son veteranos
    if ($categoria != "veteranos" && $sonFeder == false)
        $resultado["federadosOK"] = false;
    else
        $resultado["federadosOK"] = true;


    //Si la categoría es alevín deben de estar entre 8 y 11 años todos los jugadores
    if ($categoria=="alevin" && $edadAlevin==true)
        $resultado["alevinOK"] = true;
    else
        $resultado["alevinOK"] = false;

    //Si la categoría es veteranos deben de tener mas de 40 años todos los jugadores
    if ($categoria=="veteranos" && $edadmas40==true)
        $resultado["veteranosOK"] = true;
    else
        $resultado["veteranosOK"] = false;

        //Los pivots menores de 180 cm tambien se añaden
        $resultado["pivotOK"]=$pivotOK;
    
    //Devolvemos el array asociativo
    return $resultado;

}

//var_dump($_POST);

$res=cumpleDomicilio($_POST['txtJugadores'], $_POST['numJug'], $_POST['categoria']);

var_dump($res);
