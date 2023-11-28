<?php 

$texto="En este gran dia nos encontramos un dia soleado pero a la vez es un dia ventoso porque hace mucho levante este dia";

$letras = str_split($texto);

$canLetras = array_count_values($letras);

//var_dump($letras);
var_dump($canLetras);
//str_word_count nos cuenta todas las palabras que hay en un texto
$num_palabras = str_word_count($texto);
echo "En el texto hay $num_palabras palabras <br/>";

//Con substr_count nos dice cuantos elementos buscados hay en el texto
$num_ocurrencias = substr_count($texto,"dia");
echo "En el texto hay $num_ocurrencias de la palabra 'dia' <br/>";

//Ejemplo buscamos la posicion dentro del texto donde esta la tercera palabra

$pos_ant=0;
for ($i=0; $i < 3; $i++) { 
    //Buscamos en el texto la palabra dia a partir de la posicion indicada
    //Nos devuelve la posicion en la que la encontro en pos_ant
    $pos_ant=strpos($texto,"dia",$pos_ant);
    //Para la siguiente busqueda partimos de la posicion siguiente
    $pos_ant++;
}
echo "la primera ocurrencia de dia esta en la posicion ". --$pos_ant;

?>