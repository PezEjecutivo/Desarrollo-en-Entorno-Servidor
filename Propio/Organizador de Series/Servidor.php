<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styleServer.css">
    <title>Serie organizada</title>
</head>

<body class="bg-dark text-light">

    <div class="contenedor">
        <?php
        $temporada = $_POST["temporada"];
        $enlaces = $_POST["enlaces"];
        $enlaces = explode("\n", $enlaces);

        $numero = 00;
        foreach ($enlaces as $enlace) {
            $numero++;
            echo "{$temporada}x" . sprintf("%02d", $numero) . ": $enlace <br>";
        }

        ?>
    </div>


</body>

</html>