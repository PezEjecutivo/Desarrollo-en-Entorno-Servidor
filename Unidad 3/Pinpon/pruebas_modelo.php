<?php

//cargo la clase util

use PINPON\model\Utils;
use PINPON\model\Producto;

require_once("model/Utils.php");
require_once("model/Producto.php");

//Creamos una conexion con BD
$pdo = Utils::conectar();

$producto = Producto::getProductos($pdo);

var_dump($producto);

$prod_mod = [
    "nombre" => "Raqueta Rosa",
    "idProductos" => 1,
];

Producto::updateProducto($pdo, $prod_mod);
