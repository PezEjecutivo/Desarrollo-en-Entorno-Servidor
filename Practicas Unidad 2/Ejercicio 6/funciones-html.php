<?php 
//crearTabla(color,columnas,filas), crearEdad(), crearSexo(), crearObservaciones(ancho, filas).
function crearTabla($color, $columnas, $filas){

    echo "<table bgcolor=\"$color\">";
    for($i=0; $i < $filas; $i++){
        echo "<tr>";
        for($j= 0; $j < $columnas; $j++){
            echo "<td> Dato fila $i, columna $j </td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

function crearEdad(){

    echo "<div class=\"input-group mb-3\">";
    echo "    <span class=\"input-group-text\" id=\"basic-addon1\">Edad: </span>";
    echo "    <input type=\"Select\" name=\"edad\" class=\"form-control\" placeholder=\"1\">";
                
        for ($i=1; $i>121; $i++){
            echo "<option value=\"$i años\">$i</option>";
        }
                
    echo "</div>";

}

function crearSexo(){

    echo "<div class=\"input-group mb-3\">";
    echo "<span class=\"input-group-text\" id=\"basic-addon1\">Masculino: </span>";
    echo "<input type=\"radio\" id=\"masculino\" name=\"genero\" value=\"masculino\">";
    echo "<span class=\"input-group-text\" id=\"basic-addon1\">Femenino: </span>";
    echo "<input type=\"radio\" id=\"femenino\" name=\"genero\" value=\"femenino\">";
    echo "</div>";

}

function crearObservaciones($ancho=10, $filas=10){

    echo "<div class=\"input-group mb-3\">";
    echo "<span class=\"input-group-text\" id=\"basic-addon1\">Observaciones: </span>";
    echo "<textarea id=\"mensaje\" name=\"mensaje\" rows=\"$filas\" cols=\"$ancho\"></textarea><br>";
    echo "<input type=\"submit\" class=\"btn btn-primary\" value=\"Enviar mensaje\">";
    echo "</div>";

}


?>