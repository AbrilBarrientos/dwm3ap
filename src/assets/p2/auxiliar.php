<?php
$nombre = "Lucía";
$edad = 21;

echo "Nombre: $nombre<br>";
echo "Edad: " . $edad . "<br>";
echo "Hola ", $nombre, ", tienes ", $edad, " años.";


//array indexado
$frutas = ['Manzana', 'Pera'];

//array asociativo
$alumno = ['Nombre' => 'Ana', 'Edad' => 20];

//array multidimesional
$alumnos = [
    [
        "nombre" => "Lucía",
        "edad" => 20,
        "curso" => "Programación"
    ]
];

$colores = ["Rojo", "Verde", "Azul"];
echo "El primer color es " . $colores[0]; // Rojo

$alumno = [
    "nombre" => "Carlos",
    "edad" => 22,
    "activo" => true
];

echo $alumno["nombre"]; // Carlos
echo $alumno["edad"];   // 22

//recorrer array indexado
$frutas = ["Manzana", "Banana", "Pera"];
foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
    //Manzana <br>
    //Banana <br>
    //Pera <br>
}

//recorrer array asociativo
$persona = ["nombre" => "Laura", "edad" => 30];
foreach ($persona as $clave => $valor) {
    echo "$clave: $valor <br>";
}

//recorrer array multidimensional
$alumnos = [
    [
        "nombre" => "Lucía",
        "edad" => 20,
        "curso" => "Programación"
    ],
    [
        "nombre" => "Tomás",
        "edad" => 22,
        "curso" => "Diseño"
    ]
];

echo $alumnos[0]["nombre"]; // Imprime: Lucía
echo $alumnos[1]["curso"];  // Imprime: Diseño

//recorrer el array completo
foreach ($alumnos as $alumno) {
    echo "Nombre: " . $alumno["nombre"] . "<br>";
    echo "Edad: " . $alumno["edad"] . "<br>";
    echo "Curso: " . $alumno["curso"] . "<br><br>";
}

// Funciones
function saludar($nombre) {
    return "Hola, $nombre";
}

function nombreDeLaFuncion($parametros) {
    // código que se ejecuta
    return resultado;
}



function sumar($a, $b) {
    return $a + $b;
}

$resultado = sumar(5, 3);
echo "El resultado es: " . $resultado; // El resultado es: 8

echo round(3.6);  // 4
echo ceil(3.1);   // 4
echo floor(3.9);  // 3

echo rand(1, 100); // Número entre 1 y 100

$frutas = ["manzana", "pera"];
echo count($frutas); // 2

array_push($frutas, "banana");
// $frutas = ["manzana", "pera", "banana"];


$colores = ["rojo", "azul","amarillo", "verde"];

$ultimo = array_pop($colores); //eliminar "amarillo"

//El array $colores queda así: $colores = ["rojo", "azul"];



array_unshift($colores, "negro");
print_r($colores);
//El array $colores queda así: $colores = ["negro","rojo", "azul"];

$colores = ["rojo", "azul","amarillo", "verde"];
if (in_array("verde", $colores)) {
    echo "¡Está verde!";
} //"¡Está verde!"

$persona = ["nombre" => "Ana", "edad" => 30];
$claves = array_keys($persona);
print_r($claves); // ["nombre", "edad"]

$colores = ["rojo", "azul","amarillo", "verde"];
$indice = array_search("azul", $colores);
echo $indice; // 1

//COMENTARIO EN LINEA

/*
COMENTARIO 
DE BLOQUE
 */


if ($edad > 18) {
    echo "Mayor de edad";
}

if ($hay_comida) {
    echo "Servir comida";
} else {
    echo "Encargar delivery";
}

if ($comida == "pizza") {
    echo "Servir pizza";
} elseif ($comida == "ensalada") {
    echo "Servir ensalada";
} else {
    echo "No hay comida";
}


echo ($edad >= 18) ? "Mayor" : "Menor";


$invitados = $_GET['invitados'] ?? 0;

switch($bebida) {
    case "agua":
        echo "Dar agua";
        break;
    case "jugo":
        echo "Dar jugo";
        break;
    default:
        echo "Dar lo que haya";
}



$i = 1;
while ($i <= 5) {
    echo "Número $i<br>";
    $i++;
}

do {
    echo "Se ejecuta al menos una vez";
} while (false);



for ($i = 0; $i < 3; $i++) {
    echo "Vuelta $i<br>";
}

$nombres = ["Ana", "Luis"];
foreach ($nombres as $nombre) {
    echo "Hola $nombre<br>";
}

$persona = ["nombre" => "Ana", "edad" => 25];
foreach ($persona as $clave => $valor){
    echo ($clave) . ": $valor";
}

?>
