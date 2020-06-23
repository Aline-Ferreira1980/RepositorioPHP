<html>
<?php
$altura = $_GET["altura"];
$sexo= $_GET["sexo"];

if ($sexo == 'F' || $sexo == 'f'){
    $peso = (62.1*$altura)-44.7;
    echo "Sexo Feminino: peso ideal é ".number_format($peso,1)." kilos.";
}
else if ($sexo == 'M' || $sexo='m'){
    $peso = (72.7*$altura)-58;
    echo "Sexo Masculino: peso ideal é ".number_format($peso,1)." kilos.";
}
else
    echo "Colocar um sexo e uma altura válida.";

?>
    </html>