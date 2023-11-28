<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario del Examen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<!--
    Crear una página web en php que muestre un formulario para añadir un equipo de baloncesto con los siguientes campos

Nombre texto
localidad desplegable
Director General texto
número de jugadores desplegable 1-40
Logo Equipo tipo file, selección fichero
Presupuesto (radio o select con 3 opciones 0-10000, 10000-100000, >100000
Categoría desplegable (alevín, general, veteranos) 
Jugadores Área de Texto
Botón Enviar

Los jugadores se introducirán en un área de texto, en cada línea uno (Recordar que \n es separador de línea) 
se introduce un jugador en el siguiente formato:

Juan 23 P S 197

Siendo los datos, separados por espacios, nombre, edad, Posición (B base,A Alero,E escolta, P pivot), 
Federado (si o no)   y altura en cm.

Cuando se pulse el botón, se enviará a otra página php que realizara lo siguiente:

Evaluará si puede inscribirse el club de baloncesto, para lo cual tendrá que cumplir las siguientes condiciones:

El número de jugadores introducido coincide con la cantidad de líneas en los datos de jugadores
Todos los jugadores están federados, excepto si son veteranos
Si la categoría es alevín deben de estar entre 8 y 11 años todos los jugadores
Si son veteranos tienen que tener más de 40 años
No puede haber ningún pivot de menos de 180cm de altura

La página mostrará en color verde o rojo las condiciones dependiendo si cumple o no con los datos introducidos en el formulario. (Si las cumple en verde y si no las cumple en rojo)
Para realizar la solución, tendrá que crear una función:

function cumpleDomicilio($textoJugad,$num_jugadores,$categoria): Recibe el texto del texarea jugadores, 
la cantidad de jugadores y la categoria y verifica si cumple todas las condiciones, 
devuelve un array asociativo con las 5 condiciones como claves y valores true o false dependiendo.

 -->
</head>

<body>

    <div class="container-sm  pt-4 pl-4 pr-4">
        <div class="row">
            <div class="col-7 p-5">
                <!--El formulario envia con el metodo post los datos -->
                <form method="post" action="recepcionExamen.php">

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Nombre: </span>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre Usuario">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Localidad: </span>
                        <select name=localidad>
                        <?php 
                          for($i=0;$i<10;$i++)
                          {
                            echo "<option value=localidad$i>localidad$i</option>";
                          }
                        ?>
                        </select>
                    </div>


                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Director General: </span>
                        <input type="text" name="director" class="form-control" placeholder="Telefono">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Número de Jugadores: </span>
                        <select name=numJug>
                        <?php 
                          for($i=1;$i<41;$i++)
                          {
                            echo "<option value=$i>$i</option>";
                          }
                        ?>
                        </select>
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

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Logo: </span>
                        <input type="file" name="rutalogo" class="form-control" placeholder="rutaLogo">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Presupuesto: </span>
                        <input  type="range" name="presupuesto" class="form-control" max=50000 min=10000 step=5000>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="categoria">Categoría: </span>
                        <select name="categoria" class="form-select col-5" aria-label="categoria">
                            <option selected>Seleciona tu cagtegoria</option>
                            <option value=alevin>Alevin</option>
                            <option value=general>General</option>
                            <option value=veteranos>Veteranos</option>
                     
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Jugadores: </span>
                        <textarea name="txtJugadores" class="form-control" cols=50 rows=10 ></textarea>
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