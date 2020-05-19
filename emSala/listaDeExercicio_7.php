<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$chico = 1.5;
$Juca = 1.1;
$anos= 0;

    while ($chico > $Juca){
   
    $chico = $chico + 0.02;
    $Juca = $Juca + 0.03;
    $anos = $anos + 1;
   
    
} echo "Para que Juca fique maior que Chico levarão  $anos anos.";
echo "<br>Chico ficaria com $chico mts";
echo "<br>Juca ficaria com $Juca mts";
    

?>
    
</body>
</html>