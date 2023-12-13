<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Tirada de dados</title>
</head>
<body>


<?php 
echo "La tirada del dado de 10 es: " . random_int(1,10)."<br>";
echo "La tirada del dado de 20 es: " . random_int(1,20)."<br>";
echo "La tirada del dado de 100 es: " . random_int(1,100)."<br>";

?>

</body>
</html>