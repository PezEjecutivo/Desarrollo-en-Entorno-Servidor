<?php

namespace PINPON\model;

use PDOException;

class Producto
{


    /**
     * Devuelve un array asociativo con todos los datos
     * de la tabla productos
     */
    public static function getProductos($pdo)
    {

        try {
            //Realizamos una query
            $query = "SELECT * FROM productos";

            $resultado = $pdo->query($query);

            //FetchAll nos saca todos los registros de la query
            //El fetchall no se puede utilizar mas de una vez
            $resulSet = $resultado->fetchAll();
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        //Devolvemos los datos de la query
        return $resulSet;
    }

    /**
     * La funcion borra el producto con el id_producto que recibimos
     */
    public static function delProducto($pdo, $id_producto)
    {
        try {
            //Borramos todos los productos con nombre Pala bullpadel 2
            $query = "DELETE from productos where idProductos=:id";

            //Perparamos la ejecucion de la sentencia (statement stmt)
            $stmt = $pdo->prepare($query);

            //Asociamos el valor del parametro idproducto a la posicicion de :id
            $stmt->bindValue(':id', $id_producto);

            $stmt->execute();

            $filas_afectadas = $stmt->rowCount();

            return $filas_afectadas;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        } finally {
            $pdo = null;
        }
    }

    public static function updateProducto($pdo, $producto)
    {
        try {
            //Query para modificar 
            $query = "UPDATE productos SET ";

            //Si no nos meten nada para modificar, devolvmos error
            if (count($producto) == 0) {
                return -1;
            }

            if (isset($producto["nombre"])) {
                $query = $query . "nombre=:nombre";
            }

            if (isset($producto["descripcion"])) {
                //Si la cadena de la query tiene mas que la inicial
                //significa que tiene un campo modificado 
                //y tenemos que añadir , a la query
                if (strlen($query) > 20) {
                    $query = $query . ", ";
                }
                $query = $query . "descripcion=:descripcion";
            }

            if (isset($producto["peso"])) {
                if (strlen($query) > 20) {
                    $query = $query . ", ";
                }
                $query = $query . "peso=:peso";
            }

            if (isset($producto["precio"])) {
                if (strlen($query) > 20) {
                    $query = $query . ", ";
                }
                $query = $query . "precio=:precio";
            }

            if (isset($producto["tamano"])) {
                if (strlen($query) > 20) {
                    $query = $query . ", ";
                }
                $query = $query . "tamano=:tamano";
            }

            if (isset($producto["idProductos"])) {
                $query = $query . " WHERE idProductos=:id";
            }

            $stmt = $pdo->prepare($query);

            if (isset($producto["nombre"])) {
                $stmt->bindValue(":nombre", $producto["nombre"]);
            }

            if (isset($producto["descripcion"])) {
                $stmt->bindValue(":descripcion", $producto["descripcion"]);
            }
            if (isset($producto["peso"])) {
                $stmt->bindValue(":peso", $producto["peso"]);
            }
            if (isset($producto["precio"])) {
                $stmt->bindValue(":precio", $producto["precio"]);
            }
            if (isset($producto["tamano"])) {
                $stmt->bindValue(":tamano", $producto["tamano"]);
            }
            if (isset($producto["idProductos"])) {
                $stmt->bindValue(":id", $producto["idProductos"]);
            }

            //Ejecutamos la query
            $stmt->execute();

            //Sacamos la cantidad de filas afectadas
            $cuenta = $stmt->rowCount();
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        } finally {
            $pdo = null;
        }
    }

    public static function insertProducto($pdo, $producto)
    {
        try {
            //HACEMOS UN EJEMPLO DE INSERT
            //En lugar de un valor que nos llega inseguro ponemos siempre ?
            //asi evitamos la inyeccion sql
            $query = "INSERT INTO productos  (nombre,descripcion,peso,precio,tamano)  VALUES (:nombre,:descripcion,:precio,:peso,:tamano)";

            //De esta forma hay que preparar primero la sentencia
            $stmt = $pdo->prepare($query);

            //Asignamos el valor en el lugar de la :variable

            $stmt->bindValue(':nombre', $producto["nombre"]);
            $stmt->bindValue(':descripcion', $producto["descripcion"]);
            $stmt->bindValue(':precio', $producto["precio"]);
            $stmt->bindValue(':peso', $producto["peso"]);
            $stmt->bindValue(':tamano', $producto["tamano"]);

            $stmt->execute();
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        } finally {
            $pdo = null;
        }
    }
}
