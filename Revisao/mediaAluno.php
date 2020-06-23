<?php
$notaP1 = 8.0;
$notaP2 = 7.6;
$pesoP1 = 3;
$pesoP2 = 4;

$mediaPonderada = (($notaP1*$pesoP1) + ($notaP2* $pesoP2))/(3+4);
echo number_format($mediaPonderada,2);
?>