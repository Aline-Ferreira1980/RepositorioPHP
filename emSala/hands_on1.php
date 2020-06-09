<?php

$carros = array('Chevete', 'Fusca', 'Pálio', 'Gol');

echo "<pre>";
print_r($carros);
echo "</pre>";

echo "<br>";

echo ($carros[1]);
echo "<br>";

$carros[4]= 'Marea';
$carros[5]= 'Uno';
$carros[6]= 'Meercedes';
$carros[7]= 'Fox';

echo "<br>";
echo $carros[count($carros)-1];
echo "<br>";

echo "<pre>";
print_r($carros);
echo "</pre>";
echo "<br>";


?>