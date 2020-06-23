<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $i= 4;
    $j= 2;
    $x= F();

    F();
    echo $x;

    function F(){
        global $i;
        $j = 10;
        return ($i+$j);
    }
    
    ?>
</body>
</html>