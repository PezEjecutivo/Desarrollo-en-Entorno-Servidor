<?php 
namespace PINPON\model;

use PDO;
use PDOException;

class Utils{
/**
 * Conectar crea una conexion con la BD y nos devuelve la conexion
 * PDO activa o null si hay un fallo 
 */
public static function conectar()
{
//Cargamos las variables de conexion
include ("settings.inc");

try {
    //Nos conectamos a la base de datos utilizando PDO con la cadena de conexion
    //Y el usuario y la contraseña
    //Controlamos el posible error con try catch
    $pdo = new PDO("mysql:host={$host};dbname={$dbname}", $usuario, $password);
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
} 

return $pdo;

}
}

?>