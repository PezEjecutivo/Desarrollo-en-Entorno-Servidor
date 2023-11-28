<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $nombre = "Pedro";
    ?>
    <!-- para sacar en php un valor directamente utilizamos <?= $nombre ?> -->
    <h1>HOLA <?= ($nombre . " Torino") ?></h1><br>
    <?php
    $hora = 8; // La hora en formato de 24 horas
    if ($hora === 8) {
        echo "Suena el despertador1.<br>";
    }
    echo "<br>";
    //Le asignamos el caracter 8, ya no es numerico y no es del mismo tipo ===
    $hora = "8";
    if ($hora === 8)
        echo "Suena el despertador2.<br>";
    //Aunque sea texto el valor es el mismo == si es cierto
    if ($hora == 8) {
        echo "Suena el despertador3.<br>";
        if ($hora > 5)
            echo "Es maton";
    } else 
        if ($hora === "8")
        echo "Suena el despertador4.<br>";


        $hora = 14; // La hora en formato de 24 horas
switch ($hora) {
    case 9:
        echo "Es la hora de desayunar.";
        break;
    case 14:
        echo "Es la hora de la comida.";
        break;
    case 21:
        echo "Es la hora de la cena.";
        break;
    default:
        echo "Ahora no toca comer";
}
    ?>
</body>

</html>