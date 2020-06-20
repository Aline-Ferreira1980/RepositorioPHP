<?php
$consumoLitro = 12;
$velocidadeMedia = 85;
$tempoViagem = 10;
$valorCombustivel = 4.00;
$valorGasto = ($velocidadeMedia*$tempoViagem)/$consumoLitro * $valorCombustivel;
 printf ("O carro faz $consumoLitro /km por litro.<br>");
 printf ("A velocidade média durante a viagem foi de $velocidadeMedia km/h.<br>");
 printf ("A viagem durou $tempoViagem horas<br>");
 printf('----------------------------------------------------------------------------<br>');
 printf ('O valor gasto na viagem foi R$ %s', number_format($valorGasto,2));
 //number_format formata a quantidade de casas a serem exibidas

?>