<?php 

function multiplicacion(){
    return 1*3;
}
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

// inclucion de añadidura de codigo espageti  en la base de datos
    //Algoritmo de Euclides
    $a=162078;
    $b=960;
    $temporal=0;
    //1- Hacer que el valor a sea el mayor 
	if($a<$b)
	{	
		$temporal=$a;
		$a=$b;
		$b=$temporal;
	}
	//2- Si el resto es igual a 0 termina el algoritmo 
	while($b!=0)
	{
		//3-Calcular el resto de dividir a y b 
		$resto=$a%$b;
		//4-Asignar el valor más pequeño a a 
		$a=$b;
		//5-Asignar el resto a b 
		$b=$resto;
		echo "$a <br/>";
	}
	echo "Resultado Final: $a";

// IN ALGORITMODE ECULIDES PARA PPHP 


// Re-indexar:
$array = array_values($array);
$array[] = 7;
print_r($array);
$especialmete =  
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
$incluyo1 = "qui inlcuyo alianza lima en suma tambien apra qeu se vea bonito ";
$incluyo2 = "sabemo que alizna ganar el partido del amrtes ";