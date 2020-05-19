<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>lista de Exercícios Extra</title>
</head>
<body>
<?php
/*
    Leia um valor inteiro X. Em seguida apresente os 6 valores ímpares consecutivos 
    a partir de X, um valor por linha, inclusive o X ser for o caso.
    */

    $x = 13;
    $qtd_impares = 0;
    while ($qtd_impares < 6){
        if ($x % 2 != 0){
            echo $x."<br>";
            $qtd_impares++;
        }
        $x++;
    }
    
    ?>
</body>
</html>
