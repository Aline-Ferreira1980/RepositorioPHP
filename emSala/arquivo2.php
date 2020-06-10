<?php
$file =fopen("arquivo2.txt","w");

$conteudo = "uscs";

fwrite($file,$conteudo);
fwrite($file, "ads");
fclose($file);

echo ($conteudo);
?>