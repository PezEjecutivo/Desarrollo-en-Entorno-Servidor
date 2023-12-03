<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <title>Ejercicio 4</title>
</head>

<body>
  <div class="container" style="padding-top: 20px;">
    <!--El formulario envia con el metodo post los datos-->
    <form method="post" action="">
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nombre: </span>
        <input type="text" name="nombre" class="form-control" placeholder="Nombre Usuario">
      </div>

      <div class="col-12">
        <!--Este boton lanza el formulario al ser tipo submit-->
        <button class="btn btn-primary" type="submit">Enviar</button>
      </div>
    </form>




    <?php
    error_reporting(E_ERROR | E_PARSE);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      //Con funciones
      $palabra = $_POST["nombre"];
      //Convertimos la palabra en minusculas
      $palabra = strtolower($palabra);
      //Como no se pueden usar funciones, creare mi propio explode
      //Para esto necesitamos un array y una variable para aumenta
      //el indice del array cada vez que se encuentre un espacio
      $palabrasSeparadas = [""];
      $posicion = 0;
      //Creamos nuestro propio explode
      for ($i = 0; $i < strlen($palabra); $i++) {

        //Si el caracter no es un espacio
        if ($palabra[$i] != " ") {
          //Concatenamos lo que tenemos en el array, con el caracter correspondiente
          $palabrasSeparadas[$posicion] = $palabrasSeparadas[$posicion] . $palabra[$i];
        } else {
          //Si el caracter es un espacio, sumamos uno a la posicion 
          //Es decir, aumentamos el indice del array
          $posicion++;
        }
      }

      //Creamos una variable con todas las consonantes para comprobar las consonantes
      $consonantes = ["q", "w", "r", "t", "y", "p", "s", "d", "f", "g", "h", "j", "k", "l", "ñ", "z", "x", "c", "v", "b", "n", "m"];
      $cantConsonantes = 0;
      $contador = 0;
      $letras = 0;

      //Hacemos un bucle que vaya por cada palabra separada
      for ($i = 0; $i < count($palabrasSeparadas); $i++) {
        //Por cada palabra sumamos uno al contador
        //(meramento estetico)
        $contador++;
        //Hacemos un bucle para recorrer la distancia de palabra
        for ($j = 0; $j < strlen($palabrasSeparadas[$i]); $j++) {
          //Hacemos un bucle para recorrer todo el array de consonantes
          //Asi comprobaremos si un caracter es conosonante o no
          for ($k = 0; $k < count($consonantes); $k++) {
            //Si la letra esta en el array de consonantes
            if ($palabrasSeparadas[$i][$j] == $consonantes[$k]) {
              //Sumamos uno a la cantidad de consonantes
              $cantConsonantes++;
            }
          }
        }
        //Lo mostramos por pantalla
        echo "La palabra " . $contador . " de longitud " . strlen($palabrasSeparadas[$i]) . " tiene " . $cantConsonantes . " consonantes<br>";
        $cantConsonantes = 0;
      }
    }
    ?>
  </div>

</body>

</html>