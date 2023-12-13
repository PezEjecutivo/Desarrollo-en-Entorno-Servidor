<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <title>Tabla del usuario</title>
</head>

<body>
    <?php
    //Creamos las variables que aunque no es necesario 
    //Es mejor para la legibilidad del codigo 
    $nombre = $_POST["Nombre"];
    $genero = $_POST["Genero"];
    $sueldo = $_POST["Sueldo"];
    $edad = $_POST["Edad"];


    //Creamos una tabla
    echo "<table class=\"table table-striped table-hover\">";
    echo "  <thead>";
    echo "    <tr>";
    echo "      <td colspan=\"2\">Nombre</td>";
    echo "      <td colspan=\"2\">" . $nombre . "</td>";
    echo "    </tr>";
    echo "  </thead>";
    echo "  <tbody>";

    //Comprobamos cual es el genero y ponemos la etiqueta
    //style="color: blue;" a la opcion correcta
    if ($genero == "Masculino") {
        echo "      <td style=\"color: blue;\" colspan=\"2\">Hombre</td>";
        echo "      <td colspan=\"2\">Mujer</td>";
    } else if ($genero == "Femenino") {
        echo "      <td colspan=\"2\">Hombre</td>";
        echo "      <td style=\"color: blue;\" colspan=\"2\">Mujer</td>";

    //En caso de que la persona no haya seleccionado nada, no se pone nada en azul
    } else {
        echo "      <td colspan=\"2\">Hombre</td>";
        echo "      <td colspan=\"2\">Mujer</td>";
    }
    echo "    <tr>";
    echo "    </tr>";
    echo "    <tr>";

    //Comprobamos en que rango esta el sueldo y ponemos la etiqueta
    //style="color: blue;" a la opcion correcta
    if ($sueldo >= 0 && $sueldo <= 1200) {
        echo "      <td style=\"color: blue;\">0-1200</td>";
        echo "      <td>1200-20000</td>";
        echo "      <td>21000-35000</td>";
        echo "      <td>+35000</td>";
    } else if ($sueldo >= 1200 && $sueldo <= 20000) {
        echo "      <td>0-1200</td>";
        echo "      <td style=\"color: blue;\">1200-20000</td>";
        echo "      <td>21000-35000</td>";
        echo "      <td>+35000</td>";
    } else if ($sueldo >= 20000 && $sueldo <= 35000) {
        echo "      <td>0-1200</td>";
        echo "      <td>1200-20000</td>";
        echo "      <td style=\"color: blue;\">21000-35000</td>";
        echo "      <td>+35000</td>";
    } else if ($sueldo >= 35000) {
        echo "      <td>0-1200</td>";
        echo "      <td>1200-20000</td>";
        echo "      <td>21000-35000</td>";
        echo "      <td style=\"color: blue;\">+35000</td>";
    }
    echo "    </tr>";
    echo "    <tr>";

    //Comprobamos en que rango esta la edad y ponemos la etiqueta
    //style="color: blue;" a la opcion correcta
    if ($edad == "0-25") {
        echo "    <td style=\"color: blue;\" scope=\"row\">0-25</td>";
        echo "      <td>25-45</td>";
        echo "      <td>45-65</td>";
        echo "      <td>Jubilado</td>";
    } else if ($edad == "25-45") {
        echo "    <td scope=\"row\">0-25</td>";
        echo "      <td style=\"color: blue;\">25-45</td>";
        echo "      <td>45-65</td>";
        echo "      <td>Jubilado</td>";
    } else if ($edad == "45-65") {
        echo "    <td scope=\"row\">0-25</td>";
        echo "      <td>25-45</td>";
        echo "      <td style=\"color: blue;\">45-65</td>";
        echo "      <td>Jubilado</td>";
    } else if ($edad == "Jubilado") {
        echo "    <td scope=\"row\">0-25</td>";
        echo "      <td>25-45</td>";
        echo "      <td>45-65</td>";
        echo "      <td style=\"color: blue;\">Jubilado</td>";
    } 
    echo "    </tr>";
    echo "  </tbody>";
    echo "</table>";


    ?>
</body>

</html>