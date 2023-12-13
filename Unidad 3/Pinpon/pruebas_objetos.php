<?php 
require ("model/Producto.php");

//Creamos un objeto de tipo Producto denominado pelota
//Para crearlo utilizamos la palabra reservada new
//Que llama al constructor
echo "Hay ".Producto::$cantidad." pelotas";

$pelota = new Producto(1,"pelota x","muy guay el bote",2,12,3);

//Para utilizar los metodos y atributos publicos de la clase
//utilizamos el operador ->
$pelota->setPrecio(23);

//Se puede acceder a los metodos estaticos con el operador ::
Producto::incrementarCantidad();



echo "<br>Hay ".Producto::$cantidad." pelotas";


$pelota1 = new Producto(2,"pelota x2","muy guay el bote",2,12,3);

echo "<br>Hay ".Producto::$cantidad." pelotas";

//Getclass y instanceof nos sirven para detectar la clase
if ($pelota instanceof Producto) echo "<br>La pelota es de clase Producto";

echo "<br> La clase del objeto pelota es ". get_class($pelota);



?>