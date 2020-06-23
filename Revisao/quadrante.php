<html>
<?php
$num1 = $_GET["numero1"];
$num2 = $_GET["numero2"];

    if ($num1 > 0 && $num2 > 0)
        echo "Primeiro quadrante os pares ($num1,$num2)";
    elseif($num1 >0 && $num2 < 0)
        echo "Quarto quadrante os pares ($num1,$num2)";
    elseif ($num1 < 0 && $num2 < 0)
        echo "Terceiro quadrante os pares ($num1, $num2)";

    elseif ($num1 < 0 && $num2 > 0)
        echo "Segundo quadrante os pares ($num1, $num2)";
    else
        return 0;

?>
</html>