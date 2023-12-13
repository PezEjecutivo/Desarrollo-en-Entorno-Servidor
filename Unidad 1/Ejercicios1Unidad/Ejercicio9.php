<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Conversor de numeros</title>
</head>

<body>

    <div class="container" style="padding-top: 20px;">
        <!--El formulario envia con el metodo post los datos-->
        <form method="post" action="Ejercicio9.php">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nombre: </span>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Direccion: </span>
                <input type="text" name="direccion" class="form-control" placeholder="Direccion"></input>
            </div>

            <div class="col-12">
                <!--Este boton lanza el formulario al ser tipo submit-->
                <button class="btn btn-primary" type="submit">Comprobar Datos</button>
            </div>

            <?php
            $nombre = $_POST["nombre"];
            $direccion = $_POST["direccion"];
            echo "$nombre's adress is $direccion";
            ?>
    </div>


</body>

</html>