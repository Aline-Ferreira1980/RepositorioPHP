<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> Recursividade - Máximo Valor de um Array</h3>
    
    <?php
        $lista = array (20,41,99,6,10);
        $n = sizeof($lista);

        echo maximo($lista, $n);

        function maximo($lista, $n){

            if ($n==1)
            return $lista[0];
            return max ($lista[$n-1], maximo ($lista , $n-1));
        }
    ?>
</body>
</html>