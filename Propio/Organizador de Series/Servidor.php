<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
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

</body>

</html>