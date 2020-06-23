<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando o troco </title>
</head>
<body>

    <h1>Escopo de variáveis... </h1>
    <h1>Variável static</h1>
    <h1>Constantes em PHP</h1>

    <?php
    define("VAR", "Hello World...");
    printf( constant("VAR"));

    const NOME= "USCS";
    echo NOME;
    ?>
    <?php

    function F(){
        static $num;
        $num= $num+1;
        return $num;


    }
    for ($i=1; $i<=100; $i++)
    echo " <br>".F();

    
    $a =10;
        $b = 11;
        $total = 0;

F1();   
printf('<br>$total = %d', $total);
function F1(){

    global $a, $b, $total;
    $x=5;
    $total = $a+ $b+ $x;
}

    ?>
</body>
</html>