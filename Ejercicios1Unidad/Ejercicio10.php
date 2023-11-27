<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Conversor de numeros</title>
</head>

<body>
    <form method="post" action="Ejercicio10.php" style="margin: auto;">
        <div class="container" style="padding-top: 5%; display: flex; padding-left: 5%">
            <?php
            for ($i = 1; $i < 6; $i++) {
                echo "<div>";
                echo "<span>Persona $i </span>";
                echo "<span>Asignatura 1</span>";
                echo "<input type=\"text\" name=\"Asign1Pers$i\" id=\"\">";
                echo "<span>Nota Asignatura 1</span>";
                echo "<input type=\"number\" step=\"0.001\" name=\"notaAsig1Pers$i\" id=\"\">";
                echo "<span>Asignatura 2</span>";
                echo "<input type=\"text\" name=\"Asign2Per$i\" id=\"\">";
                echo "<span>Nota Asignatura 2</span>";
                echo "<input type=\"number\" step=\"0.001\" name=\"notaAsig2Pers$i\" id=\"\">";
                echo "<span>Asignatura 3</span>";
                echo "<input type=\"text\" name=\"Asign3Per$i\" id=\"\">";
                echo "<span>Nota Asignatura 3</span>";
                echo "<input type=\"number\" step=\"0.001\" name=\"notaAsig3Pers$i\" id=\"\">";
                echo "</div>";
            }
            ?>

            <div class="col-12">
                <!--Este boton lanza el formulario al ser tipo submit-->
                <button class="btn btn-primary" type="submit">Comprobar Datos</button>
            </div>
        </div>
    </form>

    <div class="container" style="padding-top: 5%; display: flex; padding-left: 5%">
        <h1>Notas medias</h1>

        <div style="margin-left: 5%; margin-right: auto;">
            <?php
            $mediaAsig1 = 0;
            $mediaAsig2 = 0;
            $mediaAsig3 = 0;
            for ($i = 1; $i < 6; $i++) {
                $mediaAsig1 += $_POST["notaAsig1Pers$i"];
                $mediaAsig2 += $_POST["notaAsig2Pers$i"];
                $mediaAsig3 += $_POST["notaAsig3Pers$i"];
            }

            echo "Media de la primera asignatura " . number_format($mediaAsig1 / 5, "1") . "<br>";
            echo "Media de la segunda asignatura " . number_format($mediaAsig2 / 5, "1") . "<br>";
            echo "Media de la tercera asignatura " . number_format($mediaAsig3 / 5, "1") . "<br>";
            ?>
        </div>
    </div>
</body>

</html>