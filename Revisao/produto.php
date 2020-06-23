<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto do Numero</title>
</head>
<body>
    <h1>Produto de um Numero e sua sequência</h1>

    <?php
        $num = $_GET["num"];
        $prod = $num*$num;
        for ($i=1; $i<= $prod; $i++){
            printf("Sequencia de $prod é: %d<br>", $i);
           
       }

    ?>
</body>
</html>
