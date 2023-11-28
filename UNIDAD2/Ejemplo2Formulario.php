<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fromulario de ejemplo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container-sm  pt-4 pl-4 pr-4">
        <div class="row">
            <div class="col-7 p-5">
                <!--El formulario envia con el metodo post los datos -->
                <form method="post" action="Ejemplo3Recepcion.php">

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Nombre: </span>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre Usuario">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Telefono: </span>
                        <input type="text" name="telefono" class="form-control" placeholder="Telefono">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Edad: </span>
                        <select name="edad" class="form-select col-5" aria-label="edad">
                            <option selected>Seleciona tu edad</option>
                            <?php
                            //Creamos con un bucle todas las opciones
                            for ($i = 1; $i < 141; $i++) {
                                echo "<option value='$i'>$i</option>\n";
                            }
                            ?>
                        </select>
                    </div>

                    <div class=form-group>

                        <label class="label" id="basic-addon1">Profesion: </label>
                        <div class="form-check">

                            <input class="form-check-input" type="radio" name="profesion" value="mago" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Mago
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="profesion" value="guerrero" id="flexRadioDefault1" checked="checked">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Guerrero
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="profesion" value="ladron" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Ladrón
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="profesion" value="paladin" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Paladín
                            </label>
                        </div>

                    </div>

                    <div class="form-group col-sm pt-4">

                        <label for="customRange3" class="form-label">Puntos de Vida</label>
                        <input type="range" class="form-range form-control-sm" name="pvida" min="15" max="40" step="5" id="customRange3">
                    </div>

                    <div class="form-group mb-3">
                        <label for="formFile" class="form-label">Foto Personaje</label>
                        <input class="form-control" type="file" name="imagenPerfil" id="formFile">
                    </div>

                    <div class="form-group mb-3">
                        <label for="exampleColorInput" class="form-label">Color Personaje</label>
                        <input type="color" name="colorPerfil" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">
                    </div>

                    <div class="form-group mb-3">
                        <label for="exampleDataList" class="form-label">Raza</label>
                        <input class="form-control" name="raza" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                        <datalist id="datalistOptions">
                            <option value="Enano">
                            <option value="Elfo">
                            <option value="Humano">
                            <option value="Orco">
                            <option value="Trasgo" selected=selected>
                        </datalist>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea6">Descripcion</label>
                        <textarea class="form-control z-depth-1" rows="3" placeholder="Nacido en Umbria, siempre tuvo...">

                        </textarea>
                    </div>

                    <div class="container-sm col-12 pt-3">
                        <!-- este boton lanza el formulario al ser tipo submit -->
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>

</html>