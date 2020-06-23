<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Positivos</title>
</head>
<body>
    <h1>Soma dos Números Positivos</h1>
<?php

$numero= 430;
$positivo = 0;
$negativos=  0;


for ($i=1; $i<=$numero; $i++){
    if ($numero<0){
    $negativos = $negativos + 1;
}else{
    $positivo = $positivo+1;
    
}
}printf("Quantidade de positivos é: %d<br>", $positivo);
printf("Quantidade de números negativos é: %d<br>", $negativos);
?>

</body>
</html>