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
        <!--El formulario envia con el metodo post los datos-->
        <form method="post" action="Ejercicio9Pagina.php">

            <!-- Creamos el select para la cabecera -->
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Cabecera: </span>
                <select name="cabecera" id="cabecera">
                    <option value="cabecera1">Cabecera 1</option>
                    <option value="cabecera2">Cabecera 2</option>
                    <option value="cabecera3">Cabecera 3</option>
                </select>
            </div>

            <!-- Creamos el select para la cuerpo -->
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Cuerpo: </span>
                <select name="cuerpo" id="cuerpo">
                    <option value="cuerpo1">Cuerpo 1</option>
                    <option value="cuerpo2">Cuerpo 2</option>
                    <option value="cuerpo3">Cuerpo 3</option>
                </select>
            </div>


            <!-- Creamos el select para la footer/pie -->
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Footer: </span>
                <select name="footer" id="footer">
                    <option value="footer1">Footer 1</option>
                    <option value="footer2">Footer 2</option>
                    <option value="footer3">Footer 3</option>

                </select>
            </div>

            <!-- Creamos el select para la css -->
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">CSS: </span>
                <select name="css" id="css">
                    <option value="css1">CSS 1</option>
                    <option value="css2">CSS 2</option>
                    <option value="css3">CSS 3</option>

                </select>
            </div>
            <div class="col-12">
            <!--Este boton lanza el formulario al ser tipo submit-->
            <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>