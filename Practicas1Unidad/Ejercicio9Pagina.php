<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina auto creada</title>
</head>
<body>
    <?php
    //Cogemos las variables del post
    $cabecera = $_POST["cabecera"];
    $cuerpo = $_POST["cuerpo"];
    $footer = $_POST["footer"];
    $css = $_POST["css"];
    
    //Incluimos cada cosa segun la variable
    include($cabecera.".html");
    include($cuerpo.".html");
    include($footer.".html");
    include($css.".html");
    
    ?>
    
</body>
</html>