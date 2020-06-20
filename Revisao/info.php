<html>
<?php
$i = 10;
$nome = "Tiago";
$false = FALSE;
$valor = 100.5;

echo '<br>$i é do tipo: '.gettype($i);
echo '<br>$nome é do tipo: '.gettype($nome);
echo '<br>$false é do tipo: '.gettype($false);
echo '<br>$valor é do tipo: '.gettype($valor);

if (is_integer($i))
printf('<br>$i é inteiro');

if (is_string($nome))
    printf ('<br><br> $nome é texto');

if (is_bool($false))
    printf('<br><br>$valor é booleano');

if (is_float($valor))
    printf ('<br><br> $valor é float');

if (is_numeric($i)and is_numeric($valor))
    printf('<br><br> $i e $valor são numéricos.');

    echo '<br><br>';


    $numero = 2147483647;
    echo gettype($numero)."<br>";

    $numero2= $numero*10;
    echo gettype($numero2)."<br>";

    $numero3 = 1000;
    var_dump($numero * $numero3);


?></html>