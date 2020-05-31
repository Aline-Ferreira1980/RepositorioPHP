<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Aline Ferreira">
    <title> Variáveis</title>
</head>
<body>
    <?php
    $valor = 12; //integer
    $palavras = "Mãe te amo"; //string
    $verdadeiro = false;   //boolean
    $dinheiro = 530.33; // float
    echo '<br>$numero é do tipo: ' .gettype ($valor);
    echo '<br>$palavras é do tipo: ' .gettype ($palavras);
    echo '<br>$verdadeiro é do tipo: ' .gettype ($verdadeiro);
    echo '<br>$dinheiro é do tipo: ' .gettype ($dinheiro); 

    if (is_integer($valor)){
        echo '<br> $valor é inteiro...';
    }
    if (is_string($palavras)) {
        echo '<br> $palavras é string...';
    }
    if (is_bool($verdadeiro)) {
        echo '<br> $verdadeiro é boolean...';
    } 
    if (is_double ($dinheiro)) {
        echo '<br> $dinheiro é double...';
    }

    ?>
</body>
</html>