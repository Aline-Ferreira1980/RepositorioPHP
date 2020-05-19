<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$consumo = 12;
$tempo = 10;
$preco= 4.00;
$velocidadeMedia= 85;
$percurso= $tempo * $velocidadeMedia;
$valorMedio = $percurso / $consumo;
$valorGasto= $valorMedio * $preco;
echo "Consumo médio é de ". $consumo ." Km/L.<br>" ;
echo "Tempo percorrido é de ". $tempo ." horas.<br>";
echo "O valor da gasolina é ". number_format ($preco,2) ." P/L<br>";
echo "Média de consumo ". $consumo ." Km/L.<br>";
echo "Gasto com a viagem é de R$". number_format($valorGasto, 2) ."<br>";
?>
</body>
</html>


