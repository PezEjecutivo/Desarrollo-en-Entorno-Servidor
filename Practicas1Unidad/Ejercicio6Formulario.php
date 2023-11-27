<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Piedra, Papel y Tijeras!</title>
</head>

<body>
    <!--Ponemos un div para que quede mas bonito-->
    <div class="container" style="padding-top: 20px;">
        <!--Utilizamos el metodo post para enviar los datos-->
        <form method="post" action="Ejercicio6Juego.php">

            <!--Creamos para poner el nombre del jugador 1, como es texto es type="text"-->
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Jugador 1: </span>
                <input type="text" name="jugador1" class="form-control" placeholder="Jugador 1">
            </div>

            <!--Creamos para poner el nombre del jugador 2, como es texto es type="text"-->
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Jugador 2:</span>
                <input type="text" name="jugador2" class="form-control" placeholder="Jugador 2"></input>
            </div>

            <!--Creamos el numero de victorias para ganar, como es numerico es type="number"-->
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Victorias: </span>
                <input type="number" name="victorias" class="form-control" placeholder="Numero de victorias">
            </div>


            <div class="col-12">
                <!--Este boton lanza el formulario al ser tipo submit-->
                <button class="btn btn-primary" type="submit">Comenzar</button>
            </div>
        </form>
    </div>
</body>

</html>