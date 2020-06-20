<?php

$conteudo = " ";

$file = fopen("arquivo1.txt","r");

while (!feof($file)){
    $conteudo = fgets($file);
  
}

fclose ($file);

$file2= fopen("arquivo2.txt","w");
fwrite($file2, $conteudo);
fclose($file2);
?>