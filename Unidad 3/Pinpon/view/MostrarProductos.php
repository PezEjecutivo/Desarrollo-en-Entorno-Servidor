<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Productos</title>
</head>

<body>
    <div class="container-lg">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">DESCRIPCION</th>
                    <th scope="col">PESO</th>
                    <th scope="col">PRECIO</th>
                    <th scope="col">TAMAÑO</th>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //Recorremos todos los registros de la base de datos
                for ($i = 0; $i < count($datosProducto); $i++) {

                    //Para cada registro de BD hay que crear una fila de la tabla
                    print("<tr>\n");

                    //Recorremos todos los datos de este registro
                    for ($j = 0; $j < 6; $j++) {

                        //Para cada dato del registro creamos una celda
                        print("<td>" . $datosProducto[$i][$j] . "</td>\n");
                    }
                    //Boton para modificar el producto
                    print("<td>Modificar</td>");
                    //Boton para eliminar el producto
                    print("<td>Eliminar</td>");
                    print("</tr>\n");
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>