<?php


//Sintaxis: strpos(cadena, subcadena, posición_inicial)
//cadena: Es la cadena en la que deseas buscar.
//subcadena: Es la subcadena que deseas encontrar dentro de la cadena.
//posición_inicial (opcional): Especifica la posición inicial desde donde comenzar la búsqueda. Si no se proporciona, la búsqueda comenzará desde el principio de la cadena.
//Valor de retorno: La función strpos() devuelve la posición de la primera aparición de la subcadena dentro de la cadena. Si la subcadena no se encuentra, devuelve false.
$cadena = "Hola, ¿cómo estás?";
$subcadena = "estás";
$posicion = strpos($cadena, $subcadena);

if ($posicion === false) {
    echo "La subcadena no se encontró en la cadena.";
} else {
    echo "La subcadena se encontró en la posición: " . $posicion;
}

//== == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == ==

//$cadena_resultado: Es la variable donde se almacenará la cadena resultante después de realizar los reemplazos.
//"españa": Es la subcadena que se buscará en el texto original para ser reemplazada.
//"espania": Es la subcadena que se utilizará como reemplazo para todas las apariciones de la subcadena "españa".
//$texto: Es la cadena original en la que se realizarán los reemplazos.
//$num_reemp: Es una variable opcional donde se almacenará el número de reemplazos realizados.
$cadena_resultado = str_replace("españa", "espania", $texto, $num_reemp);

//== == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == ==

//$cadena_ciudades: Es la variable donde se almacenará la cadena resultante después de unir los elementos del array.
//" otra ": Es el delimitador que se utilizará para separar los elementos del array en la cadena resultante. En este caso, se utilizará la cadena " otra " como separador.
//$nombres_ciudad: Es el array que contiene los elementos que se unirán en la cadena.
$nombres_ciudad = array("Madrid", "Barcelona", "Valencia", "Sevilla");
$cadena_ciudades = implode(" otra ", $nombres_ciudad);
//Resultado = Madrid otra Barcelona otra Valencia otra Sevilla

//== == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == ==

//Cuando se ejecuta esta línea de código, la función array_count_values() examina el array $letras 
//y cuenta el número de veces que aparece cada valor (en este caso, cada letra) en el array. Luego, 
//devuelve un nuevo array donde las claves son las letras originales y los valores son el número de 
//veces que aparecen.
$letras = array("a", "b", "c", "a", "b", "a");
$canLetras = array_count_values($letras);

print_r($canLetras);

//Array
//(
//    [a] => 3
//    [b] => 2
//    [c] => 1
//)

//== == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == ==

//Cuando se ejecuta esta línea de código, la función str_split() toma la cadena "Hello" y la divide en caracteres 
//individuales. Luego, devuelve un array donde cada carácter de la cadena original se convierte en un elemento del 
//array.
$str = "Hello";
$str_array = str_split($str);

print_r($str_array);

//Array
//(
//    [0] => H
//    [1] => e
//    [2] => l
//    [3] => l
//    [4] => o
//)

//== == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == ==

//Cuando se ejecuta esta línea de código, la función explode() toma la cadena $textoJugad y la divide en elementos 
//utilizando el delimitador "\n", que representa un salto de línea. Luego, devuelve un array donde cada parte de la 
//cadena original separada por el salto de línea se convierte en un elemento del array.
$textoJugad = "Juan\nMaría\nPedro";
$datosJugad = explode("\n", $textoJugad);

print_r($datosJugad);

//Array
//(
//    [0] => Juan
//    [1] => María
//    [2] => Pedro
//)

//En esta estructura condicional if, se verifica si el valor de $_SERVER["REQUEST_METHOD"] es igual a "POST". Si es así, 
//el código dentro del bloque de la condición se ejecutará. Esto significa que el código dentro de las llaves {} se ejecutará 
//solo si la solicitud HTTP es de tipo POST.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
}

//== == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == ==

//En esta estructura condicional if, se verifica si el campo "edad" está definido en la solicitud POST. La función isset() 
//se utiliza para determinar si una variable está definida y no es nula. Si $_POST["edad"] está definido, es decir, si existe 
//y no es nulo, el código dentro del bloque de la condición se ejecutará.
if (isset($_POST["edad"]))

    //== == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == ==

    //La función new DateTime() crea un nuevo objeto de la clase DateTime que representa la fecha y hora actuales. 
    //El objeto $hoy contendrá la fecha y hora actual en el momento en que se ejecuta esta línea de código.
    $hoy = new DateTime();

//== == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == ==

//La función new DateTime("2023-12-23") crea un nuevo objeto de la clase DateTime que representa una fecha específica. 
//En este caso, se crea un objeto $navidad que contiene la fecha del 23 de diciembre de 2023. Puedes proporcionar cualquier 
//fecha en el formato "Año-Mes-Día" para crear un objeto DateTime con esa fecha específica.
$navidad = new DateTime("2023-12-23");

//== == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == ==

//La función diff() se utiliza para calcular la diferencia entre dos objetos DateTime. En este caso, se calcula la diferencia 
//entre $hoy (que contiene la fecha actual) y $semanaSanta (suponiendo que se haya definido en otro lugar).
$faltaSemanaSanta = $hoy->diff($semanaSanta);

//== == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == ==

//Formatos de fechas
//Y-m-d: Representa el año, mes y día en formato numérico de cuatro dígitos. Por ejemplo, "2022-12-31" sería el 31 de diciembre de 2022.
//d-m-Y: Representa el día, mes y año en formato numérico. Por ejemplo, "31-12-2022" sería el 31 de diciembre de 2022.
//d/m/Y: Representa el día, mes y año separados por barras. Por ejemplo, "31/12/2022" sería el 31 de diciembre de 2022.
//jS F Y: Representa el día ordinal, nombre del mes y año. Por ejemplo, "31st December 2022" sería el 31 de diciembre de 2022.
//l, jS F Y: Representa el día de la semana, día ordinal, nombre del mes y año. Por ejemplo, "Saturday, 31st December 2022" sería el sábado, 31 de diciembre de 2022.
//D, d M Y: Representa el día de la semana abreviado, día del mes, nombre del mes y año. Por ejemplo, "Sat, 31 Dec 2022" sería el sáb, 31 de dic de 2022.
//H:i:s: Representa la hora, minutos y segundos en formato de 24 horas. Por ejemplo, "23:59:59" sería las 23 horas, 59 minutos y 59 segundos.
//h:i:s A: Representa la hora, minutos y segundos en formato de 12 horas con indicador AM/PM. Por ejemplo, "11:59:59 PM" sería las 11 horas, 59 minutos y 59 segundos PM.

//== == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == ==

//La función date() se utiliza para formatear y mostrar fechas y horas en PHP. Recibe dos parámetros: el formato de fecha/hora 
//deseado y un timestamp opcional para especificar la fecha/hora a formatear. En este caso, se utiliza strtotime($fecha_modificada) 
//para obtener un timestamp de Unix a partir de la cadena de fecha $fecha_modificada.

$dia_semana = date('N', strtotime($fecha_modificada));


//== == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == == ==


//Funcion explode a mano

//Necesitamos las variables delimitadoras y la frase
$separador = ",";
$frase = "Hola, Piolin, como estas?, espero que bien";

//Creamos el array que utilizamos para guardar las cosas
$resultado = [];
//Creamos la variable que guarda el valor
$valorActual = '';

//Hacemos un for que sea del tamaño de la frase
for ($i = 0; $i < strlen($frase); $i++) {

    // Si encontramos el delimitador, agregamos la subcadena actual al resultado
    if ($frase[$i] == $separador) {

        $resultado[] = $valorActual;
        // Reiniciamos la subcadena actual
        $valorActual = '';
    } else {
        // Si no es el delimitador, agregamos el carácter a la subcadena actual
        $valorActual .= $frase[$i];
    }
}

// Agregamos la última subcadena después del último delimitador (o toda la cadena si no hay delimitador)
// Porque al no encontrar delimitador, no entaria al if y por tanto no se guardaria
$resultado[] = $valorActual;


// Imprimir el resultado con print_r();
print_r($resultado);

// Imprimir el resultado con echo
for ($i = 0; $i < count($resultado); $i++) {
    echo $resultado[$i];
}
