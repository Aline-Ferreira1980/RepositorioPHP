<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $array_01 = array();
    $array_01[0]=10;

    for ($i= 1; $i<5;$i++){

        $array_01 [$i] = $array_01[$i-1] +10;
    }
    for ($i= 1; $i<5; $i++){
        echo $array_01[$i]." ";
    }
    ?>
</body>
</html>