<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Crea tu personaje de DYD5!!</title>
</head>

<body>
    <!--Ponemos un div para que quede mas bonito-->
    <div class="container" style="padding-top: 20px;">
        <!--Utilizamos el metodo post para enviar los datos-->
        <form method="post" action="Ejercicio5Tabla.php">

            <!--Creamos para poner el nombre del jugador 1, como es texto es type="text"-->
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nombre del jugador: </span>
                <input type="text" name="Nombre" class="form-control" placeholder="Pablo">
            </div>

            <!--Creamos para poner el nombre del jugador 2, como es texto es type="text"-->
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nombre del personaje:</span>
                <input type="text" name="Nickname" class="form-control" placeholder="Water"></input>
            </div>

            <!--Creamos un select para los niveles-->
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nivel: </span>
                <input type="Select" name="Nivel" class="form-control" placeholder="1">
                <?php 
                for ($i=1; $i>21; $i++){
                    echo "<option value=\"nivel$i\">$i</option>";
                }
                ?>
            </div>
            

            <!--Creamos los checkbox para las clases-->
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Clases: </span>
                <input type="checkbox" name="clase" id="clase1" value="Barbaro">
                <label for="clase1">Barbaro</label>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Clases: </span>
                <input type="checkbox" name="clase" id="clase2" value="Bardo">
                <label for="clase2">Bardo</label>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Clases: </span>
                <input type="checkbox" name="clase" id="clase3" value="Brujo">
                <label for="clase3">Brujo</label>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Clases: </span>
                <input type="checkbox" name="clase" id="clase4" value="Clerigo">
                <label for="clase4">Clerigo</label>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Clases: </span>
                <input type="checkbox" name="clase" id="clase5" value="Druida">
                <label for="clase5">Druida</label>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Clases: </span>
                <input type="checkbox" name="clase" id="clase6" value="Explorador">
                <label for="clase6">Explorador</label>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Clases: </span>
                <input type="checkbox" name="clase" id="clase7" value="Guerrero">
                <label for="clase7">Guerrero</label>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Clases: </span>
                <input type="checkbox" name="clase" id="clase8" value="Hechicero">
                <label for="clase8">Hechicero</label>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Clases: </span>
                <input type="checkbox" name="clase" id="clase9" value="Mago">
                <label for="clase9">Mago</label>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Clases: </span>
                <input type="checkbox" name="clase" id="clase10" value="Monje">
                <label for="clase10">Monje</label>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Clases: </span>
                <input type="checkbox" name="clase" id="clase11" value="Paladin">
                <label for="clase11">Paladin</label>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Clases: </span>
                <input type="checkbox" name="clase" id="clase12" value="Picaro">
                <label for="clase12">Picaro</label>
            </div>

            <!--Radio para las razas-->

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Razas:</span>
                <input type="radio" name="Raza" id="Draconidos" value="Draconidos">
                <label for="Draconidos">Draconidos</label>
                <input type="radio" name="Raza" id="Elfos" value="Elfos">
                <label for="Elfos">Elfos</label>
                <input type="radio" name="Raza" id="Enanos" value="Enanos">
                <label for="Enanos">Enanos</label>
                <input type="radio" name="Raza" id="Gnomos" value="Gnomos">
                <label for="Gnomos">Gnomos</label>
                <input type="radio" name="Raza" id="Humanos" value="Humanos">
                <label for="Humanos">Humanos</label>
                <input type="radio" name="Raza" id="Medianos" value="Medianos">
                <label for="Medianos">Medianos</label>
                <input type="radio" name="Raza" id="Semielfos" value="Semielfos">
                <label for="Semielfos">Semielfos</label>
                <input type="radio" name="Raza" id="Semiorcos" value="Semiorcos">
                <label for="Semiorcos">Semiorcos</label>
                <input type="radio" name="Raza" id="Tiflin" value="Tiflin">
                <label for="Tiflin">Tiflin</label>
                <input type="radio" name="Raza" id="Lizzardman" value="Lizzardman">
                <label for="Lizzardman">Lizzardman</label>
            </div>

            <!--Creamos los range para las estadisticas-->
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Estadisticas:</span>
                <label for="">Fuerza</label>
                <input type="range" name="Fuerza" id="" min="0" max="20" step="1">
                <label for="">Destreza</label>
                <input type="range" name="Destreza" id="" min="0" max="20" step="1">
                <label for="">Constitucion</label>
                <input type="range" name="Constitucion" id="" min="0" max="20" step="1">
                <label for="">Inteligencia</label>
                <input type="range" name="Inteligencia" id="" min="0" max="20" step="1">
                <label for="">Sabiduria</label>
                <input type="range" name="Sabiduria" id="" min="0" max="20" step="1">
                <label for="">Carisma</label>
                <input type="range" name="Carisma" id="" min="0" max="20" step="1">
            </div>

            <!-- Creamos todos los input del formulario restante -->
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Trasfondo:</span>
                <input type="text" name="Trasfondo" class="form-control" placeholder="Exiliado"></input>
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Puntos de experiencia:</span>
                <input type="number" name="XP" class="form-control" placeholder="10xp"></input>
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Alineamiento:</span>
                <input type="text" name="Alineamiento" class="form-control" placeholder="Neutral"></input>
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Altura:</span>
                <input type="number" name="Altura" class="form-control" placeholder="1,9"></input>
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Peso:</span>
                <input type="number" name="Peso" class="form-control" placeholder="130"></input>
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Pelo:</span>
                <input type="text" name="Pelo" class="form-control" placeholder="Wolf Cut"></input>
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Piel:</span>
                <input type="text" name="Piel" class="form-control" placeholder="Azul"></input>
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Ojos:</span>
                <input type="text" name="Ojos" class="form-control" placeholder="Verdes claro"></input>
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Edad:</span>
                <input type="number" name="Edad" class="form-control" placeholder="23"></input>
            </div>
            
            
            <div class="col-12">
                <!--Este boton lanza el formulario al ser tipo submit-->
                <button class="btn btn-primary" type="submit">Comenzar</button>
            </div>
        </form>
    </div>
</body>

</html>