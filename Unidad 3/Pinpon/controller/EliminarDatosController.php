<?php

namespace controller;

use PINPON\model\Producto as ModelProducto;
use PINPON\model\Utils as ModelUtils;

include("../model/Producto.php");
include("../model/Utils.php");

session_start();

$_SESSION["user"] = "pedro";

//Si el usuario esta logado eliminamos el producto
if (isset($_SESSION["user"])) {

    //Si no hya conexion activa nos conectamos
    if (!isset($pdo)) {
        $pdo = ModelUtils::conectar();
    }

    //Cargamos el id del producto a eliminar
    $idProd = $_POST["idProducto"];

    //Eliminamos el producto
    ModelProducto::delProducto($pdo, $idProd);

    //Cargamos los datos de los productos
    $datosProducto = ModelProducto::getProductos($pdo);

    //Cargamos la vista principal
    include("../view/MostrarProductos.php");
}
