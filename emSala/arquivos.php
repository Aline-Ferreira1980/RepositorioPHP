<?php
$file = fopen("arquivo1.txt", "r");

while (!feof($file)){
    
    $linha= fgets($file);

    echo "$linha<br>";


}

fclose($file);

?>