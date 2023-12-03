<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Tabla final</title>
</head>

<body>

    <?php

    //incluimos el archivo
    include("./funciones-html.php");

    //Ejecutamos la funcion con esos valores
    crearTabla($_POST["color"], $_POST["columnas"], $_POST["filas"]);

    //Si el checkbox esta pulsado, ejecutamos la funcion
    if (isset($_POST["edad"])) {
        crearEdad();
    }
    if (isset($_POST["sexo"])) {
        crearSexo();
    }
    if (isset($_POST["observaciones"])) {
        crearObservaciones($_POST["columnas"], $_POST["filas"]);
    }

    ?>
</body>

</html>