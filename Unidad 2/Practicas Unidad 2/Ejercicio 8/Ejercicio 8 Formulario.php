<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Ejercicio 8</title>
</head>

<body>
    <!--Creamos el formulario-->
    <div class="container" style="padding-top: 20px;">
        <form method="POST" action="./Ejercicio 8 Servidor.php">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Introduce tu codigo:</span>
                <textarea class="form-control" style="height:5vh" placeholder="Introduce tu codigo..." name="menu"></textarea>
            </div>

            <?php
            //Generamos los checkbox
            for ($i = 0; $i < 4; $i++) {
                for ($j = 0; $j < 4; $j++) {
                    echo "<input type=\"checkbox\" name=\"grid$i$j\" id=\"\">";
                }
                echo "<br>";
            }

            ?>
            <input type="submit" class="btn btn-primary" value="Enviar">
        </form>
    </div>
</body>

</html>