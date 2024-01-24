<?php 
//cargo la clase utils

use PINPON\model\Producto;
use PINPON\model\Utils;

require_once("model\Utils.php");
require_once ("model\Producto.php");
require_once ("model\ProductoDO.php");

//Creamos un objeto de tipo ProductoDO denominado pelota
//Para crearlo utilizamos la palabra reservada new
//Que llama al constructor
echo "Hay ".ProductoDO::$cantidad." pelotas";

$pelota = new ProductoDO(1,"pelota x","muy guay el bote",2,12,3);

//Para utilizar los metodos y atributos publicos de la clase
//utilizamos el operador ->
$pelota->setPrecio(23);

//Se puede acceder a los metodos estaticos con el operador ::
ProductoDO::incrementarCantidad();



echo "<br>Hay ".ProductoDO::$cantidad." pelotas";


$pelota1 = new ProductoDO(2,"pelota x2","muy guay el bote",2,12,3);

echo "<br>Hay ".ProductoDO::$cantidad." pelotas";

//Getclass y instanceof nos sirven para detectar la clase
if ($pelota instanceof ProductoDO) echo "<br>La pelota es de clase ProductoDO";

echo "<br> La clase del objeto pelota es ". get_class($pelota);

//Prueba de conexion basica a la BD utilizando la libreria utils
$pdo = Utils::conectar();
//Cargamos todos los productos de BD
$datos = Producto::getProductos($pdo);


var_dump($datos);
?>