<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recepcion de Datos</title>
</head>
<body>
    
<?php 
    var_dump($_POST);

    echo "<DIV>Han llegado los datos del cliente<br>";
    echo "Nombre: ".$_POST["nombre"].", Telefono: ".$_POST["telefono"].", Edad: ".$_POST["edad"];
    echo "<DIV>";
?>


</body>
</html>