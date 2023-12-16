<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayuda para familias</title>
</head>

<body>
    <?php
    //Creamos todas las variables
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $estado = $_POST["estado"];
    $sueldo = $_POST["sueldo"];
    $txtHijos = $_POST["hijos"];
    $txtCasas = $_POST["domicilio"];

    //Creamos la tabla, si cumple la condicion fondo verde, si no, fondo rojo:
    echo "<table border=\"1\">";
    echo "<tr>";
    //Primera condicion
    if ($edad > 35 && $estado == "casado")
        $color = "background-color: green;";
    else
        $color = "background-color: red;";
    echo "<td style=\"$color\">Mayor de 35 y casado</td>";
    echo "</tr>";
    echo "<tr>";
    //Segunda condicion
    if ($sueldo >= 10000 && $sueldo <= 30000)
        $color = "background-color: green;";
    else
        $color = "background-color: red;";
    echo "<td style=\"$color\">Sueldo mayor de 10000 y menor de 30000</td>";
    echo "</tr>";
    echo "<tr>";
    //Tercera condicion
    if (cumpleHijos($txtHijos)["condicion"])
        $color = "background-color: green;";
    else
        $color = "background-color: red;";
    echo "<td style=\"$color\">Tener 2 hijos menores de 8 o uno con minusvalia</td>";
    echo "</tr>";
    echo "<tr>";
    //Cuarta condicion
    if (cumpleDomicilios($txtCasas)["condicion"])
        $color = "background-color: green;";
    else
        $color = "background-color: red;";
    echo "<td style=\"$color\">No tener casas en provincias distintas o que todas sean vivienda habitual</td>";
    echo "</tr>";
    echo "<tr>";
    //Quitan condicion
    if (cumpleDomicilios($txtCasas)["cantidad"] <= 2)
        $color = "background-color: green;";
    else
        $color = "background-color: red;";
    echo "<td style=\"$color\">No tener mas de dos casas</td>";
    echo "</tr>";
    echo "</table>";



    //Codigo
    function cumpleHijos($txtHijos)
    {
        //Creamos las variables
        $hijos = explode("\n", trim($txtHijos));
        $hijoMinusvalia = false;
        $hijosMenor8 = 0;
        $mediaEdad = 0;

        //Hacemos un foreach para recorrer cada hijo
        foreach ($hijos as $hijo) {
            //Obtenemos los datos de cada hijo
            //[0] => Juan [1] => 12 [2] => H [3] => S
            $datos = explode("-", trim($hijo));

            //Comprobamos que sean menores de 8
            if ($datos[1] < 8) {
                //Aumentamos el contador
                $hijosMenor8++;
            }

            //Comprobamos que tenga minusvalia
            if ($datos[3] == "S" || $datos[3] == "s") {
                //Ponemos la variable en true
                $hijoMinusvalia = true;
            }

            //Guardamos todas las edades
            $mediaEdad += $datos[1];
        }

        //Hacemos la media
        $mediaEdad = $mediaEdad / count($hijos);

        //Hacemos la condicion: Tener 2 hijos menores de 8 o uno con minusvalía
        if ($hijosMenor8 >= 2 || $hijoMinusvalia) {
            $resultado = true;
        } else {
            $resultado = false;
        }

        //Añadimos los datos al array asociativo
        $cumple = [
            "condicion" => $resultado,
            "media" => $mediaEdad,
        ];

        //Devolvemos el array asociativo
        return $cumple;
    }

    function cumpleDomicilios($txtCasas)
    {
        //Creamos las variables
        $casas = explode("\n", trim($txtCasas));
        $cantidad = 0;
        $provincias = [];
        $habituales = [];
        $casasHabituales = true;
        $diffProvincia = false;

        //Hacemos un foreach para recorrer cada casa
        foreach ($casas as $casa) {
            //Cogemos los datos de cada hijo
            //[0] => jaen [1] => 3 [2] => 4 [3] => S
            $datos = explode("-", trim($casa));

            //Añadimos los datos a sus respectivas arrays
            array_push($provincias, trim($datos[0]));
            array_push($habituales, trim($datos[3]));

            //Sumamos la cantidad de casas
            $cantidad++;
        }

        //Hacemos un bucle que recorre el array de provincias
        for ($i = 0; $i < count($provincias); $i++) {
            //Hacemos otro bucle que recorre el array de provincias, 1 por delante
            for ($j = $i + 1; $j < count($provincias); $j++) {
                //Si $i es diferente de $j lo ponemos en true
                //ya que esto quiere decir que hay diferentes provincias
                if ($provincias[$i] != $provincias[$j]) {
                    $diffProvincia = true;
                }
            }

            //Dentro del bucle principal comprobamos si todas son habituales
            if (strtoupper($habituales[$i]) != "S") {
                //Si alguna no es habitual, lo ponemos en false
                $casasHabituales = false;
            }
        }

        //Hacemos la condicion: No tener casas en provincias distintas o que todas sean vivienda habitual
        if ($casasHabituales || !($diffProvincia)) {
            $condicion1 = true;
        } else {
            $condicion1 = false;
        }

        //Añadimos los datos al array asociativo
        $resultado = [
            "condicion" => $condicion1,
            "cantidad" => $cantidad,
        ];

        //Devolvemos el array asociativo
        return $resultado;
    }
    ?>
</body>

</html>