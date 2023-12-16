<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Examen</title>
</head>

<body>
    <div class="container mt-5">
        <h3>Información sobre la Persona</h3>
        <form action="examen_servidor.php" method="POST">

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>

            <div class="form-group">
                <label for="fisico">Físico:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="fisico" id="fisico_verdadero" value="fisico"
                        checked>
                    <label class="form-check-label" for="fisico">Sí</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="fisico" id="no_fisico" value="no-fisico">
                    <label class="form-check-label" for="no_fisico">No</label>
                </div>
            </div>


            <div class="form-group">
                <label for="direccion">Direccion:</label>
                <input type="text" class="form-control" id="direccion" name="direccion" required>
            </div>


            <select name="provincia" id="provincia">
                <option value="cadiz" selected>Cádiz</option>
                <option value="malaga">Málaga</option>
                <option value="sevilla">Sevilla</option>
                <option value="cordoba">Córdoba</option>
                <option value="granada">Granada</option>
                <option value="jaen">Jaén</option>
                <option value="almeria">Almería</option>
                <option value="huelva">Huelva</option>
            </select>


            <div>
                <h3>Presupuesto</h3>
                <input type="range" class="form-range" name="presupuesto" min="15" maxlength="150" step="1" max="150"
                    id="presupuesto">
            </div>


            <div class="form-group">
                <label for="fechaApertura">Fecha de Apertura:</label>
                <input type="date" name="fechaApertura" id="fechaApertura" required>
            </div>

            <div class="mb-3">
                <label for="tomosManga" class="form-label"></label>
                <textarea class="form-control" name="tomosManga" id="tomosManga" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Solicitud</button>
        </form>



    </div>


</body>

</html>