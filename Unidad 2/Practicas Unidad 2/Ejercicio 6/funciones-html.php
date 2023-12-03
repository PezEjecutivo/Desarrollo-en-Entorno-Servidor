<?php
//Creamos la funcion para crear la tabla
function crearTabla($color, $columnas, $filas)
{
    //Como no podemos usar style, usaremos bgcolor => background-color
    echo "<table bgcolor=\"$color\">";
    //Hacemos todas las filas
    for ($i = 0; $i < $filas; $i++) {
        echo "<tr>";
        //Hacemos todas las columnas
        for ($j = 0; $j < $columnas; $j++) {
            echo "<td> Dato fila $i, columna $j </td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

//Creamos la funcion para crear la edad
function crearEdad()
{

    //Hacemos el dropdown o select
    echo "<div class=\"input-group mb-3\">";
    echo "    <span class=\"input-group-text\" id=\"basic-addon1\">Edad: </span>";
    echo "    <input type=\"Select\" name=\"edad\" class=\"form-control\" placeholder=\"1\">";

    //Hacemos un bucle que cree las opciones desde 1 a 120
    for ($i = 1; $i > 121; $i++) {
        echo "<option value=\"$i años\">$i</option>";
    }

    echo "</div>";
}

//Creamos la funcion para crear el sexo
function crearSexo()
{

    //Creamos el radio de masculino y femenino
    echo "<div class=\"input-group mb-3\">";
    echo "<span class=\"input-group-text\" id=\"basic-addon1\">Masculino: </span>";
    echo "<input type=\"radio\" id=\"masculino\" name=\"genero\" value=\"masculino\">";
    echo "<span class=\"input-group-text\" id=\"basic-addon1\">Femenino: </span>";
    echo "<input type=\"radio\" id=\"femenino\" name=\"genero\" value=\"femenino\">";
    echo "</div>";
}

//Creamos la funcion para crear observaciones
function crearObservaciones($ancho = 10, $filas = 10)
{

    //Creamos el textarea con los valores que nos piden
    echo "<div class=\"input-group mb-3\">";
    echo "<span class=\"input-group-text\" id=\"basic-addon1\">Observaciones: </span>";
    echo "<textarea id=\"mensaje\" name=\"mensaje\" rows=\"$filas\" cols=\"$ancho\"></textarea><br>";
    echo "<input type=\"submit\" class=\"btn btn-primary\" value=\"Enviar mensaje\">";
    echo "</div>";
}
