<?php


$myVar = 'value';
$myNumber = 30.234;
$mybool = true;

// deboggeur : var_dump
// var_dump(myVar; myNumber)

// echo : afficher une chaine de caractère
// concatenation : utilisation des " " ou du point exemple ('abc' . 'def')

// Exo 

/*
$nombre_format_français = number_format($myNumber,2,'.',''); 
echo "\n" .$nombre_format_français;

function MaPremiereFonction(string $phrase,string $format ) : string
{
    return "<$format>$phrase</$format>";
} 

echo MaPremiereFonction('Olive', 'b');
*/

$myArray = [12, 15, 10, 10, 11, 15, 13, 17, 18, 23, 21, 21, 18, 19, 25, 26, 22, 18, 19, 20, 20, 17, 15, 12, 11, 13, 10, 13, 10, 8];

//echo "la température moyenne est :" .array_sum($myArray)/count($myArray);
//echo "\n"."les 5 temperature les plus froide:".sort($myArray).array_slice($myArray,5,)