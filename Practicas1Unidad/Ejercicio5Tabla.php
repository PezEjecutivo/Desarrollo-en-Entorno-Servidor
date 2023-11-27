<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Tabla de personaje!</title>
</head>
<body>
    <?php 

    //Creamos un array asociativo con los datos del formulario
    $personaje = [
        "nombre" => $_POST["Nickname"],
        "clase" => $_POST["clase"],
        "raza" => $_POST["Raza"],
        "fuerza" => $_POST["Fuerza"],
        "destreza" => $_POST["Destreza"],
        "constitucion" => $_POST["Constitucion"],
        "inteligencia" => $_POST["Inteligencia"],
        "sabiduria" => $_POST["Sabiduria"],
        "carisma" => $_POST["Carisma"],
        "nivel" => $_POST["Nivel"],
        "alineamiento" => $_POST["Alineamiento"]
    ];

    //Hacemos la media del personaje sumando todo y dividiendo entre 6
    $mediaStats = ($personaje["fuerza"]+$personaje["destreza"]+$personaje["constitucion"]+$personaje["inteligencia"]+$personaje["sabiduria"]+$personaje["carisma"])/6;

    //Comrpobamos que ninguna estadistica supere 20
    //Aunque tal y como esta hecho el formulario, nunca van a poder superarlo
    if($personaje["fuerza"]       > 20 || 
       $personaje["destreza"]     > 20 || 
       $personaje["constitucion"] > 20 || 
       $personaje["inteligencia"] > 20 || 
       $personaje["sabiduria"]    > 20 || 
       $personaje["carisma"]      > 20 || 
       $mediaStats > 15){
        //En caso de que alguna estadistica supere 20, nos volvera al formulario
        header("Location: Ejercicio5Formulario.php");
    }
    

    //Mostramos nombre y la imagen del personaje
    echo "<h1>$personaje[nombre]</h1>";
    if($personaje["raza"]=="Humanos" || $personaje["raza"]=="Enanos"){
        echo "<img src=\"./Imagenes/Personajes/$personaje[raza]$personaje[clase].png\">";
    }else{
        echo "<img src=\"./Imagenes/Personajes/$personaje[raza].png\">";
    }

    //Hacemos la tabla y ponemos los datos
    echo "    <table class=\"table  table-striped\">";
    echo "  <tr>";
    echo "    <th>Raza</th>";
    echo "    <td>$personaje[raza]</td>";
    echo "  </tr>";
    echo "  <tr>";
    echo "    <th>Clase</th>";
    echo "    <td>$personaje[clase]</td>";
    echo "  </tr>";
    echo "  <tr>";
    echo "    <th>Alineamiento</th>";
    echo "    <td>$personaje[alineamiento]</td>";
    echo "  </tr>";
    echo "  <tr>";
    echo "    <th colspan=\"2\">Estadisticas</th>";
    echo "  </tr>";
    echo "  <tr>";
    echo "    <th>Nivel</th>";
    echo "    <td>$personaje[nivel]</td>";
    echo "  </tr>";
    echo "  <tr>";
    echo "    <th>fuerza</th>";
    echo "    <td>$personaje[fuerza]</td>";
    echo "  </tr>";
    echo "  <tr>";
    echo "    <th>destreza</th>";
    echo "    <td>$personaje[destreza]</td>";
    echo "  </tr>";
    echo "  <tr>";
    echo "    <th>constitucion</th>";
    echo "    <td>$personaje[constitucion]</td>";
    echo "  </tr>";
    echo "  <tr>";
    echo "    <th>inteligencia</th>";
    echo "    <td>$personaje[inteligencia]</td>";
    echo "  </tr>";
    echo "  <tr>";
    echo "    <th>sabiduria</th>";
    echo "    <td>$personaje[sabiduria]</td>";
    echo "  </tr>";
    echo "  <tr>";
    echo "    <th>carisma</th>";
    echo "    <td>$personaje[carisma]</td>";
    echo "  </tr>";
    echo "</table>";
    
    ?>
</body>
</html>