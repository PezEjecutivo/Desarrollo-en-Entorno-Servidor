<?php
include "config/settings.inc";

try {

    //Nos conectamos a la base de datos utilizando PDO con la cadena de conexion
    //Y el usuario y la contraseña
    //Controlamos el posible error con try catch
    $pdo = new PDO("mysql:host={$host};dbname={$dbname}", $usuario, $password);

    //Realizamos una query
    $query = "SELECT * FROM productos";

    $resultado = $pdo->query($query);

    //FetchAll nos saca todos los registros de la query
    //El fetchall no se puede utilizar mas de una vez
    $resulSet = $resultado->fetchAll();

    //var_dump($resulSet);
    echo "Lista de nombres de productos:<br/>";

    for ($i=0;$i<count($resulSet);$i++)
    {
        echo $resulSet[$i]["nombre"]."<br/>";
    }
/*
    foreach ($resulSet as $registro)
    {
        
         echo $registro["nombre"]."<br/>";
    }
*/
    //En lugar de un valor que nos llega inseguro ponemos siempre ?
    //asi evitamos la inyeccion sql
    $query = "SELECT * FROM productos where precio > ?";

    //De esta forma hay que preparar primero la sentencia
    $stmt = $pdo->prepare($query);

    $minimo = 20;
    //Asignamos el valor en el lugar de la ?
    $stmt->bindValue(1, $minimo, PDO::PARAM_INT);

    //Ejecutamos la query en BD
    $stmt->execute();

    echo "<hr />";

    echo "Productos de mas de 20 euros";

    var_dump($stmt->fetchAll());


    //En lugar de un valor que nos llega inseguro ponemos siempre ?
    //asi evitamos la inyeccion sql
    $query = "SELECT * FROM productos where nombre = ? and peso < ?";

    //De esta forma hay que preparar primero la sentencia
    $stmt = $pdo->prepare($query);

    //Asignamos el valor en el lugar de la ?
    $stmt->bindParam(1, $name);
    $stmt->bindParam(2, $peso);

    $name = "PELOTA";
    $peso = 1;

    //Ejecutamos la query en BD
    $stmt->execute();

    echo "<hr />";

    echo "Productos con nombre igual a pelota de menos de 1kg<br>";

    //FetchAll nos saca todos los registros de la query
    var_dump($stmt->fetchAll());

    $name = "3";
    $peso = 4;

    //Ejecutamos la query en BD
    $stmt->execute();

    echo "<hr />";

    echo "Productos con nombre igual a 3 de menos de 5kg<br>";

    //FetchAll nos saca todos los registros de la query
    var_dump($stmt->fetchAll());



    //HACEMOS UN EJEMPLO DE INSERT
    //En lugar de un valor que nos llega inseguro ponemos siempre ?
    //asi evitamos la inyeccion sql
    $query = "INSERT INTO productos  (nombre,descripcion,peso,precio,tamano)  VALUES (:nombre,:descripcion,:precio,:peso,:tamanio)";

    //De esta forma hay que preparar primero la sentencia
    $stmt = $pdo->prepare($query);

    //Asignamos el valor en el lugar de la :variable

    $stmt->bindValue(':nombre', 'Pala bullpadel 2');
    $stmt->bindValue(':descripcion', 'Pala bullpadel');
    $stmt->bindValue(':precio', 23.5);
    $stmt->bindValue(':peso', 3.4);
    $stmt->bindValue(':tamanio', 23);

    //Importante de cara a fallos sql
    // queryString nos devuelve la sentencia sql
    echo $stmt->queryString;

    //Ejecutamos la query en BD
    $stmt->execute();

    //Modificamos las palas que tienen un precio superior a 20 euros
    //Las bajamos en un 20%
    $query = "update productos set precio=precio*0.99 where precio>= :precio";

    $stmt = $pdo->prepare($query);

    $stmt->bindValue(':precio',20);

    $stmt->execute();

    //Sacamos la cantidad de filas afectadas
    $cuenta=$stmt->rowCount();

    echo "<br/>Se ha rebajado el precio, han sido afectadas $cuenta";

    //Borramos todos los productos con nombre Pala bullpadel 2
    $query ="DELETE from productos where nombre=:nombre";

    $stmt = $pdo->prepare($query);

    $stmt->bindValue(':nombre','Pala bullpadel 2');

    $stmt->execute();

    $filas_afectadas = $stmt->rowCount();

    echo "<br/>Se han eliminado $filas_afectadas registros de la tabla productos";
   

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
} finally {
    $pdo = null;
}
