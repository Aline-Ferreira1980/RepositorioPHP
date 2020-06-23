<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $file = fopen("arquivo1.txt","r");
        while (!feof($file)){
            $linha = fgets($file);
            echo "$linha<br>";
        } 
        fclose($file);
    ?>
</body>
</html>