<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    //Si no se modifica ni se inserta producto, salimos
    //Habria que comprobar que la sesion este iniciada
    if (!isset($_POST["accion"])) {
        header("location: MostrarProductos.php");
    }
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $_POST["acion"] ?> Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container-sm col-sm" style="padding-top:40px;">
        <!--El formulario envia con el metodo post los datos -->
        <form method="get" action="../controller/<?= $_POST["acion"] ?>ProductoController.php">

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nombre Producto: </span>
                <input type="text" name="nombre" value="<?= (isset($_POST["nombre"]) ? $_POST['nombre'] : '') ?>" class="form-control" placeholder="Nombre Producto">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Descripcion: </span>
                <input type="text" name="descripcion" value="<?= (isset($_POST["descripcion"]) ? $_POST['descripcion'] : '') ?>" class="form-control" placeholder="Descripcion">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Peso: </span>
                <input type="text" name="peso" value="<?= (isset($_POST["peso"]) ? $_POST['peso'] : '') ?>" class="form-control" placeholder="Peso">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Precio: </span>
                <input type="text" name="precio" value="<?= (isset($_POST["precio"]) ? $_POST['precio'] : '') ?>" class="form-control" placeholder="Precio">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Tamaño: </span>
                <input type="text" name="tamano" value="<?= (isset($_POST["tamano"]) ? $_POST['tamano'] : '') ?>" class="form-control" placeholder="Tamaño">
            </div>





            <div class="col-12">
                <!-- este boton lanza el formulario al ser tipo submit -->
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>

        </form>

    </div>

</body>

</html>