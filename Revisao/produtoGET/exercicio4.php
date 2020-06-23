<html>
<?php

$idade = $_GET["idade"];

if ($idade <5)
    echo "Classificação Imprópria";
else if ($idade >= 5 && $idade <=7)
    echo "Classificação Infantil A";
else if ($idade >= 8 && $idade <=10)
    echo "Classificação Infantil B";
else if ($idade >= 11 && $idade <=13)
    echo   "Classificação Juvenil A";
else if ($idade >= 14 && $idade <=17)
    echo "Classificação Juvenil B";
else 
    echo "Classificação Adulto";
?>
</html>