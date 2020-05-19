<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Exercício 5</title>
</head>
<body>
    <?php
    $total = 430;
    $somaPositivo = 0;
    $somaNegativo= 0;
   for ($i= 0;$i<=$total; $i++) {
        if ($i >= 0) {
            $somaPositivo = $somaPositivo+$i;
            
        } 
        else{
            $somaNegativo = $somaNegativo + 1;
            
        }
        
    } echo "Soma dos números pares é: $somaPositivo\n.<br>";
    echo "Soma dos números ímpares é: \n $somaNegativo";

    
    ?>
</body>
</html>