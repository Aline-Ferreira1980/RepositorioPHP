<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

        $contador = -1;
        $file = fopen("arquivo2.txt","r");
        while (!feof($file)){
            $linha = fgetc($file);
            $contador++;
        }
        echo $contador;
        fclose($file);
    ?>
    
</body>
</html>

