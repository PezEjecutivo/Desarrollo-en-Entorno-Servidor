<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <title>Formulario del usuario</title>
</head>

<body>

  <!--Creamos un div para el formulario-->
  <div class="container" style="padding-top: 20px;">
    <!--El formulario envia con el metodo post los datos-->
    <form method="post" action="Ejercicio7Tabla.php">

      <!--Hacemos un radio con los generos-->
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Masculino: </span>
        <input type="radio" name="Genero" id="Masculino" value="Masculino">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Femenino: </span>
        <input type="radio" name="Genero" id="Femenino" value="Femenino">
      </div>

      <!--Hacemos un select para la edad-->
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Edad: </span>
        <select name="Edad" id="Edad">
            <option value="0-25">0-25</option>
            <option value="25-45">25-45</option>
            <option value="45-65">45-65</option>
            <option value="Jubilado">Jubilado</option>
        </select>
      </div>

      <!--Hacemos un text para el nombre-->
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nombre: </span>
        <input type="text" name="Nombre" id="Nombre">
      </div>

      <!--Hacemos un range para el sueldo-->
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Sueldo: </span>
        <input type="range" name="Sueldo" id="Sueldo" min:="0" max="120000" step="100" >
      </div>



      <div class="col-12">
        <!--Este boton lanza el formulario al ser tipo submit-->
        <button class="btn btn-primary" type="submit">Enviar</button>
      </div>
    </form>

  </div>



</body>

</html>