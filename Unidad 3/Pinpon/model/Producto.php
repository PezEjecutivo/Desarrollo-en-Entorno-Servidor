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
            $query = "DELETE from productos where nombre=:nombre";

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
        //Query para modificar 
        $query = "UPDATE productos SET ";

        //Si no nos meten nada para modificar, devolvmos error
        if (count($producto) == 0) {
            return -1;
        }

        if ($producto["nombre"] != null) {
            $query = $query . "nombre=:nombre";
        }

        if ($producto["descripcion"] != null) {
            //Si la cadena de la query tiene mas que la inicial
            //significa que tiene un campo modificado 
            //y tenemos que añadir , a la query
            if (strlen($query) > 20) {
                $query = $query . ", ";
            }
            $query = $query . "descripcion=:descripcion";
        }

        if ($producto["peso"] != null) {
            if (strlen($query) > 20) {
                $query = $query . ", ";
            }
            $query = $query . "peso=:peso";
        }

        if ($producto["precio"] != null) {
            if (strlen($query) > 20) {
                $query = $query . ", ";
            }
            $query = $query . "precio=:precio";
        }

        if ($producto["tamano"] != null) {
            if (strlen($query) > 20) {
                $query = $query . ", ";
            }
            $query = $query . "tamano=:tamano";
        }

        if ($producto["id"] != null) {
            $query = $query . " WHERE id=:id";
        }

        $stmt = $pdo->prepare($query);

        $stmt->bindValue(':precio', 20);

        $stmt->execute();

        //Sacamos la cantidad de filas afectadas
        $cuenta = $stmt->rowCount();
    }
}
