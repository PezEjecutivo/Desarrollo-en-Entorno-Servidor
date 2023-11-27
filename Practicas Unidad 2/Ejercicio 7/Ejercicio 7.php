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
        <form method="POST" action="Ejercicio 7 final.php">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>

            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha de cumpleaños:</label>
                <input type="date" class="form-control" id="fecha" name="fecha" required>
            </div>

            <div class="mb-3">
                <label for="hora" class="form-label">Hora de cumpleaños:</label>
                <input type="time" class="form-control" id="hora" name="hora" required>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

</body>
</html>