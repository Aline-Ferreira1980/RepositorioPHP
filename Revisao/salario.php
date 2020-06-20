<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário</title>
</head>
<body>
<?php
$salarioFixo = 5000.0;
$vendaMes = 12300.30;
$comissao = $vendaMes *(15/100);
$salarioTotal = $salarioFixo+$comissao;

printf("Salário fixo: R$%s<br>", number_format($salarioFixo,2));
printf("Valor da comissão R$%s<br>", number_format($comissao,2));

printf("<br>Salário total do vendedor é de: R$%s",number_format ($salarioTotal,2));
?>
    
</body>
</html>