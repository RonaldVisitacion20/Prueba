<?php
$variables=12.5;
$variables2 = 20.5;
$variables3 = 15.4;
$sumas=$variables2+$variables3;
$multi=$sumas*2;
$divicion=$multi/2;
echo "La fecha y hora actual es: " . date("Y-m-d H:i:s");
echo "cambios de estado en rama master ";
echo "es lunes de chamba";
$variable="peimer cambio a master";
$variable=$variable."agredado ";
echo $variable;
echo "martes 21";
$arreglo=array();// iniciamos continualoprueba 
$arreglo["edad"] = 12;
$arreglo["nombres"] = "bethoben";
$arreglo['DNI'] = 981287128;
$arreglo['RUC'] = 72934729718312;

$arreglo["apellidos"] = "marcosLEO";
$arreglo["razonsocial"] = "libreria";

$arreglo["estado"] = 1;

$jugo = "manzana";

echo "Él tomó algo de jugo de $jugo.".PHP_EOL; 
// Inválido. "s" es un carácter válido para un nombre de variable, pero la variable es $jugo.
echo "Él tomó algo de jugo hecho de $jugos.";
// Válido. Explícitamente especifica el final del nombre de la variable encerrándolo entre llaves:
echo "Él tomó algo de jugo hecho de ${jugo}s."

?>

