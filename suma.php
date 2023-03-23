<?php 

function suma(){
    return 2+2;
}

$array = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
);
var_dump($array);

// Crear un array simple.
$array = array(1, 2, 3, 4, 5);
print_r($array);

// Ahora elimina cada elemento, pero deja el mismo array intacto:
foreach ($array as $i => $value) {
    unset($array[$i]);
}
print_r($array);

// Agregar un elemento (note que la nueva clave es 5, en lugar de 0).
$array[] = 6;
print_r($array);

// Re-indexar:
$array = array_values($array);
$array[] = 7;
print_r($array);

error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('html_errors', false);
// Array simple:
$array = array(1, 2);
$count = count($array);
for ($i = 0; $i < $count; $i++) {
    echo "\nRevisando $i: \n";
    echo "Mal: " . $array['$i'] . "\n";
    echo "Bien: " . $array[$i] . "\n";
    echo "Mal: {$array['$i']}\n";
    echo "Bien: {$array[$i]}\n";
}
echo "esto es ".$count;