<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Expressões em PHP</h1>

<?php
    $a = 5;
    $b = $a;
    $a = (3*2)+$b;
    $c = $a * F();

    printf ('$a = %d',$a);
    printf ('<br>$b= %d',$b);
    printf ('<br>$b= %d',$b);
    printf('<br>F() retorna %d', F());


    printf('<br><hr></hr>');
    printf('<br><br>$c = %d',$c);
    printf('<br>');
    
    function F(){
        $a= 1;
        $b= 2;
        return (2*($a+$b));
    }

?>
</body>
</html>