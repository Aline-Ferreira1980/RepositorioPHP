<?php
$file = fopen("arquivo1.txt","r+");
$file2 = fopen ("arquivo2.txt","a+");

$conteudo = "Ciencia da Computaçao";

fwrite ($file2,$conteudo);
fwrite($file, " Aline ");

if ($file != $file2)
fwrite ($file2, $conteudo);


fclose($file);
?>