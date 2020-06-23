<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $file = fopen("arquivo1.txt","w");

        $conteudo = "USCS";
        fwrite($file , $conteudo);
        fwrite($file, "ADS");
        fclose($file);
    ?>
</body>
</html>