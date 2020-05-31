<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta name="author" content="Aline"/>
    <title>Variável</title>
</head>
<body>
    <?php
    $x= 1; // escopo global
    function exibe(){
        $y = 2; //escopo local
        echo $y;
        echo '<br>$y é do tipo :'.gettype ($y);
        if (is_integer($y)){
            echo '$y é inteiro representado por: ';
        }
    }
    exibe();
    echo '<br>$x é do tipo : '.gettype ($x);
    ?>
</body>
</html>