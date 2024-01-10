<?php

namespace controller;

use model\producto;
use model\Utils;
use PINPON\model\Utils as ModelUtils;
use PINPON\model\Producto as ModelProducto;

include("..\model\Producto.php");
include("..\model\Utils.php");

session_start();

//Forzamos a que vaya al listado fingiendo que estamos logados
$_SESSION["user"] = "pedro";

//Si la sesion esta iniciada y hay usuario, lo mandamos a la web principal
//Sino lo redireccionamos al login
if (isset($_SESSION["user"])) {

    //Nos conectamos a la base de datos
    $pdo = ModelUtils::conectar();

    //Cargamos los datos de los productos
    $datosProducto = ModelProducto::getProductos($pdo);

    //Cargamos la vista
    include("../view/MostrarProductos.php");
} else {
    include("view/Login.php");
}
