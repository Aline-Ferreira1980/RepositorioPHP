<?php
$base = $_GET["base"];
$altura = $_GET["altura"];
$area = ($base * $altura)/2;

if ($base !=0 && $altura!= 0){
    echo "Area do triângulo é $area";
}else{
    echo "Colocar um valor válido para cálculo!";
}
?>