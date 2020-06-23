<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
</head>
<body>
    <h1>Fatorial</h1>

    <?php
        $fatorial = $_GET["fatorial"];
        $soma= 1;
        
        for($i=1; $i<=$fatorial; $i++){    
            $soma = $soma*$i;        
           
             
        }printf ($soma);
    
    ?>
</body>
</html>