<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Ayuda para familias</title>
</head>

<body>
    <div class="container" style="padding-top: 20px">
        <form method="POST" action="./Servidor.php">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required />
            </div>

            <div class="mb-3">
                <label for="edad" class="form-label">Edad:</label>
                <select class="form-select" name="edad" id="edad">
                    <?php
                    for ($i = 1; $i <= 120; $i++) {
                        echo "<option value=\"$i\">$i años</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="estado">Estado civil:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="estado" id="soltero" value="soltero" checked>
                    <label class="form-check-label" for="soltero">Soltero</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="estado" id="casado" value="casado">
                    <label class="form-check-label" for="casado">Casado</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="estado" id="divorciado" value="divorciado">
                    <label class="form-check-label" for="divorciado">Divorciado</label>
                </div>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Sueldo:</span>
                <select class="form-select" name="sueldo" id="sueldo">
                    <option value="0">0 €</option>
                    <option value="10000">0 € -10000 €</option>
                    <option value="20000">10000 € - 20000 €</option>
                    <option value="30000">20000 € - 30000 €</option>
                    <option value="40000">30000 € - 40000 €</option>
                    <option value="50000">40000 € - 50000 €</option>
                </select>
            </div>

            <div class="mb-3">
                <span class="input-group-text" id="basic-addon1">Hijos: </span>
                <textarea name="hijos" class="form-control" cols="50" rows="10"></textarea>
            </div>
            <div class="mb-3">
                <span class="input-group-text" id="basic-addon1">Domicilios: </span>
                <textarea name="domicilio" class="form-control" cols="50" rows="10"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

    </div>
</body>

</html>