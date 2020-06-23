<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $lista = array(0,1,2,3,4);
        $n=5;
        echo soma($lista, $n);

        function soma($lista,$n){
            if ($n == 1)
            return $lista[0];
            else
            return soma ($lista, $n-1)+ $lista[$n-1];
        }
 ?>
</body>
</html>