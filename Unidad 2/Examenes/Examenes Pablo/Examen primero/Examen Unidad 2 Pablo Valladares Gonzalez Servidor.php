<?php 
//var_dump($_POST);

//array(7) { ["nombre"]=> string(10) "MangaFriki" ["modo"]=> string(6) "Online" 
//["direccion"]=> string(15) "Calle juan Lara" ["provincia"]=> string(5) "cadiz" 
//["presupuesto"]=> string(3) "150" ["hora"]=> string(5) "10:00" 
//["tomos"]=> string(46) "one piece, tomo 23, 324, 5, shonen, S, Málaga" }

//Sacamos todos los datos del $_POST
//Para tener las cosas mas claras
$nombre = $_POST["nombre"];
$modo = $_POST["modo"];
$direccion = $_POST["direccion"];
$provincia = $_POST["provincia"];
$presupuesto = $_POST["presupuesto"];
$hora = $_POST["hora"];
$listaTomos = $_POST["tomos"];


//Primera funcion calcula los tomos en total y las unidadesXLS
function volumenesTotales($listaTomos){

    //Calculamos el numero de volumenes totales
    $total = 0;

    //Calculamos la canitad de Unidades XLS
    $unidadesXLS = 0;

    //Separamos la lista de tomos en cada tomo individual
    $tomos = explode("\n", $listaTomos);

    //Hacemos un foreach para sacar todos los datos de todos los tomos
    foreach($tomos as $tomo){

        //Separamos los datos de los tomos en partes
        $datosTomo = explode(",", $tomo);

        //Sumamos el stock de los tomos
        $total += $datosTomo[3];

        //Si tiene mas de 300 paginas y es edicion coleccionista sumamos a unidadesXLS
        if($datosTomo[2]>300 && $datosTomo[5] == "S"){
            $unidadesXLS++;
        }
    }

    //Lo mostramos por pantalla
    echo "Número de Volumenes Totales (suma de stocks): " . $total . "<br>";

    echo "Cantidad de Unidades XLS Disponibles(Más de 300pag y ed colecionista): " . $unidadesXLS . "<br>";
}

//Usamosla funcion
volumenesTotales($listaTomos);


//Hay Stock Colecionista: La función recibirá los almacenes, devolverá true si hay mas de
//10 tomos coleccionista en cada provincia y es tienda física.
function stockColeccionista($listaTomos, $modo){

    //Si no esta en fisica devolvemos inmediatamente false
    if($modo!="fisica"){
        return false;
    }

    //Creamos las variables para almacenar el stock de cada provincia
    $almacenHuelva = 0;
    $almacenSevilla = 0;    
    $almacenCadiz = 0;
    $almacenCordoba = 0;
    $almacenMalaga = 0;
    $almacenJaen = 0;
    $almacenGranada = 0;
    $almacenAlmeria = 0;

    //Separamos la lista de tomos en cada tomo individual
    $tomos = explode("\n", $listaTomos);

    foreach ($tomos as $tomo) {

        $datosTomo = explode(",", $tomo);

        //Si el tomo es de una provincia y es ediccion coleccionista
        //Sumamos su stock a la provincia correspondiente
        if($datosTomo[6]=="Huelva" && $datosTomo[5]=="S"){
            $almacenHuelva += $datosTomo[3];
        }
        if ($datosTomo[6] == "Sevilla" && $datosTomo[5] == "S") {
            $almacenSevilla += $datosTomo[3];
        }
        if ($datosTomo[6] == "Cadiz" && $datosTomo[5] == "S") {
            $almacenCadiz += $datosTomo[3];
        }
        if ($datosTomo[6] == "Cordoba" && $datosTomo[5] == "S") {
            $almacenCordoba += $datosTomo[3];
        }
        if ($datosTomo[6] == "Malaga" && $datosTomo[5] == "S") {
            $almacenMalaga += $datosTomo[3];
        }
        if ($datosTomo[6] == "Jaen" && $datosTomo[5] == "S") {
            $almacenJaen += $datosTomo[3];
        }
        if ($datosTomo[6] == "Granada" && $datosTomo[5] == "S") {
            $almacenGranada += $datosTomo[3];
        }
        if ($datosTomo[6] == "Almeria" && $datosTomo[5] == "S") {
            $almacenAlmeria += $datosTomo[3];
        }

        
    }

    //Creamos una variable para comparlo
    $hayStockColeccionista = 0;

    //Si el stock es mas de 10, sumamos 1
    if($almacenHuelva>10){
        $hayStockColeccionista++;
    }
    if($almacenSevilla >10){
        $hayStockColeccionista++;
    }
    if($almacenCadiz >10){
        $hayStockColeccionista++;
    }
    if($almacenCordoba >10){
        $hayStockColeccionista++; 
    }
    if($almacenMalaga >10){
        $hayStockColeccionista++; 
    }
    if($almacenJaen >10){
        $hayStockColeccionista++; 
    }
    if($almacenGranada >10){
        $hayStockColeccionista++; 
    }
    if($almacenAlmeria >10){
        $hayStockColeccionista++; 
    }

    //Si la suma total es 8, devolvemos true
    if($hayStockColeccionista==8){
        return true;
        //En caso de que no devolvemos false
    }else{
        return false;
    }
}

//Comprobamos si funciona
if(stockColeccionista($listaTomos, $modo)){
    echo "Hay stock <br> hola";
}


//Stock por Provincia: (calculará y la suma de los stock de los tomos de cada provincia, se
//calculará utilizando una función que reciba los datos de los tomos y devuelva un array
//asociativo del tipo [“jaen” =&gt;230,”sevilla”=&gt;400,”almeria”=&gt;320]. No tienen porque estar
//todas las provincias)
function stockProvincia($listaTomos){


    //Igual que en la funcion anterior
    $almacenHuelva = 0;
    $almacenSevilla = 0;
    $almacenCadiz = 0;
    $almacenCordoba = 0;
    $almacenMalaga = 0;
    $almacenJaen = 0;
    $almacenGranada = 0;
    $almacenAlmeria = 0;

    //Separamos la lista de tomos en cada tomo individual
    $tomos = explode("\n", $listaTomos);

    foreach ($tomos as $tomo) {

        $datosTomo = explode(",", $tomo);

        if ($datosTomo[6] == "Huelva" && $datosTomo[5] == "S") {
            $almacenHuelva += $datosTomo[3];
        }
        if ($datosTomo[6] == "Sevilla" && $datosTomo[5] == "S") {
            $almacenSevilla += $datosTomo[3];
        }
        if ($datosTomo[6] == "Cadiz" && $datosTomo[5] == "S") {
            $almacenCadiz += $datosTomo[3];
        }
        if ($datosTomo[6] == "Cordoba" && $datosTomo[5] == "S") {
            $almacenCordoba += $datosTomo[3];
        }
        if ($datosTomo[6] == "Malaga" && $datosTomo[5] == "S") {
            $almacenMalaga += $datosTomo[3];
        }
        if ($datosTomo[6] == "Jaen" && $datosTomo[5] == "S") {
            $almacenJaen += $datosTomo[3];
        }
        if ($datosTomo[6] == "Granada" && $datosTomo[5] == "S") {
            $almacenGranada += $datosTomo[3];
        }
        if ($datosTomo[6] == "Almeria" && $datosTomo[5] == "S") {
            $almacenAlmeria += $datosTomo[3];
        }
    }

    //Creamos el array asociativo con los valores
    $arrayAsociativo = [
        "Huelva" => $almacenHuelva,
        "Sevilla" => $almacenSevilla,
        "Cadiz" => $almacenCadiz,
        "Cordoba" => $almacenCordoba,
        "Malaga" => $almacenMalaga,
        "Jaen" => $almacenJaen,
        "Granada" => $almacenGranada,
        "Almeria" => $almacenAlmeria,
    ];

    //Lo mostramos por pantalla
    print_r($arrayAsociativo);
    echo "<br>";
}

stockProvincia($listaTomos);

//Cumple Cercanía : Utilizar una función que recibe los datos de los tomos y la provincia de
//la tienda y devuelva true si sólo hay tomos en provincias colindantes con la tienda

function cercania($listaTomos, $provincia){

    //Separamos la lista de tomos en cada tomo individual
    $tomos = explode("\n", $listaTomos);

    //Ponemos que sea true
    $cercania = true;

    foreach ($tomos as $tomo) {

        $datosTomo = explode(",", $tomo);

        //Comrprobamos la provincia y que no sea de sus cercanias
        //Si no es de sus cercania ponemos false
        if ($provincia == "Huelva") {
            if($datosTomo[6]!="Huelva" && $datosTomo[6]!="Sevilla" && $datosTomo[6] != "Cadiz"){
                $cercania=false;
            }
        }
        if ($provincia == "Sevilla") {
            if ($datosTomo[6] != "Huelva" && $datosTomo[6] != "Sevilla" && $datosTomo[6] != "Cadiz" && $datosTomo[6]!="Malga" && $datosTomo[6]!="Cordoba") {
                $cercania = false;
            }
        }
        if ($provincia == "Cadiz") {
            if ($datosTomo[6] != "Huelva" && $datosTomo[6] != "Sevilla" && $datosTomo[6] != "Cadiz" && $datosTomo[6]!="Malaga") {
                $cercania = false;
            }
        }
        if ($provincia == "Cordoba") {
            if ($datosTomo[6] != "Jaen" && $datosTomo[6] != "Sevilla" && $datosTomo[6] != "Cordoba" && $datosTomo[6]!="Malaga" && $datosTomo[6]!="Granada") {
                $cercania = false;
            }
        }
        if ($provincia == "Malaga") {
            if ($datosTomo[6] != "Cordoba" && $datosTomo[6] != "Sevilla" && $datosTomo[6] != "Cadiz" && $datosTomo[6]!="Granada") {
                $cercania = false;
            }
        }
        if ($provincia == "Granda") {
            if ($datosTomo[6] != "Cordoba" && $datosTomo[6] != "Malaga" && $datosTomo[6] != "Jaen" && $datosTomo[6]!="Almeria") {
                $cercania = false;
            }
        }
        if ($provincia == "Jaen") {
            if ($datosTomo[6] != "Cordoba" && $datosTomo[6] != "Granada" && $datosTomo[6] != "Almeria") {
                $cercania = false;
            }
        }
        if ($provincia == "Almeria") {
            if ($datosTomo[6] != "Granada") {
                $cercania = false;
            }
        }

    }

    return $cercania;

    
}

if(cercania($listaTomos, $provincia)){
    echo "Tiene cercanias <br>";
}

//Stock Tomo: La función recibe los datos de los tomos ,la provincia y el nombre de un
//manga y comprueba si en los almacenes de las provincias colindantes a la tienda hay stock
//de dicho manga, para saber si es el manga, tiene que buscar el nombre del manga y estar
//presente en el nombre o en la descripción. Devuelve el número de stock disponible.

function stockTomo($listaTomos, $provincia, $nombre){

    //Separamos la lista de tomos en cada tomo individual
    $tomos = explode("\n", $listaTomos);

    $numeroTomos = 0;

    foreach ($tomos as $tomo) {

        $datosTomo = explode(",", $tomo);

        if(cercania($listaTomos, $provincia)){
            if ($datosTomo[0] == $nombre) {
                $numeroTomos += $datosTomo[3];
            }
        }
    }

    echo "Hay " . $numeroTomos . " tomos de " . $nombre . " en cercanias <br>";

}

stockTomo($listaTomos, $provincia, "Goku");


?>