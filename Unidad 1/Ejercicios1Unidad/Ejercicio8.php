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
        <form method="post" action="Ejercicio8.php">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Numero 1: </span>
                <input type="number" name="numero1" step=".001" class="form-control" placeholder="Numero 1">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Numero 2: </span>
                <input type="number" step=".001" name="numero2" class="form-control" placeholder="Numero 2"></input>
            </div>

            <div class="col-12">
                <!--Este boton lanza el formulario al ser tipo submit-->
                <button class="btn btn-primary" type="submit">Convertir numeros</button>
            </div>

            <?php

            echo "Los numeros convertidos a enteros son: <br> Numero 1: " . intval($_POST["numero1"]) . "<br> Numero 2: " . intval(round($_POST["numero2"]));
            ?>
    </div>


</body>

</html>