<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="container" style="padding-top: 20px;">
        <form method="POST" action="./Ejercicio 6 Servidor.php">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Número de columnas:</span>
                <input type="number" id="columnas" name="columnas"><br><br>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Número de filas:</span>
                <input type="number" id="filas" name="filas"><br><br>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Color de fondo:</span>
                <input type="color" id="color" name="color"><br><br>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Edad:</span>
                <input type="checkbox" id="edad" name="edad"><br><br>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Sexo:</span>
                <input type="checkbox" id="sexo" name="sexo"><br><br>
            </div>


            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Observaciones:</span>
                <input type="checkbox" id="observaciones" name="observaciones"><br><br>
            </div>

            <input type="submit" class="btn btn-primary" value="Enviar">
        </form>
    </div>


</body>

</html>