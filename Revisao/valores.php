<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $num = $_GET["num"];

        if ($num < 0)
        printf('Valor negativo.');
        else if($num > 0)
        printf('Valor Positivo.');
        else
        printf('Valor é zero.')
    ?>
</body>
</html>