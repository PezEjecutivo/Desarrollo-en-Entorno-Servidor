<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

$num_alumnos = random_int(15,35);

//creamos las edades de los alumno les asignamos una edad
for ($i=0;$i<$num_alumnos;$i++)
{
    //Asignamos una edad aleatoria a cada alumno
    $edad_alumnos[$i]=random_int(1,120);
}

//suponemos que no sabemos cuantos alumnos tenemos utilizamos count para 
//saber la longitud del array
for($i=0;$i<count($edad_alumnos);$i++)
{
    if ($edad_alumnos[$i]>=65)
        echo "El alumno ".($i+1)." tiene $edad_alumnos[$i] años.<br/>";
}

//El foreach recorre automaticamente el bucle edad_alumnos, 
//En la variable $edad se van asignando los valores del array 
//en cada repeticion cambia el valor de $edad al de la siguiente posicion
foreach ($edad_alumnos as $edad) {

    echo "El alumno tiene $edad años.<br/>";

    if ($edad<18)
        echo " es menor de edad<br/>";
}



    ?>    

</body>
</html>