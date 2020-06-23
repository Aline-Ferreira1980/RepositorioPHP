<html>
<?php
$num= $_GET["numero"];

if ($num > 0 && $num%2 == 0)
    echo "Número é positivo e par";
else if ($num > 0 && $num%2 != 0)
    echo "Número é positivo e ímpar";
else if ($num < 0 && $num %2 == 0)
    echo "Número é negativo e par";
else
    echo "Número é negativo e ímpar";
?>
</html>