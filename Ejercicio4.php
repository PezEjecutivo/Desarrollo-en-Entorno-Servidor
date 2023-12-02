<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

  </div>

    
    <?php 
    if($_SERVER["REQUEST_METHOD"]=="POST"){
      //Con funciones
      $palabra = $_POST["nombre"];
      $palabra = strtolower($palabra);
      $palabrasSeparadas = explode(" ", $palabra);
      $consonantes =["q", "w", "r", "t", "y", "p", "s", "d", "f", "g", "h", "j", "k", "l", "ñ", "z", "x", "c", "v", "b", "n", "m"];
      $cantConsonantes = 0;
      $contador = 0;
      $orden = 0;
      
      for($i=0; $i<count($palabrasSeparadas); $i++){
        $contador++;
        $orden++;
        for($j=0; $j<strlen($palabrasSeparadas[$i]); $j++){
          for($k=0; $k<count($consonantes); $k++){
            if($palabrasSeparadas[$i][$j]==$consonantes[$k]){
              $cantConsonantes++;
            }
          }
        }
        echo "La palabra " . $contador . " de longitud " . strlen($palabrasSeparadas[$i]) . " tiene " . $cantConsonantes . " consonantes<br>";
        $cantConsonantes=0;
      }
      
    }
    ?>
    
</body>
</html>