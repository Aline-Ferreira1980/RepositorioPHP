<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diferença de Altura</title>
</head>
<body>
    <h1> Diferença de Altura entre Chico e Juca</h1>

    <?php
        $chico = 1.50;
        $juca = 1.10;
        $anos = 0;

        while ($juca < $chico){
            
            $chico = $chico + 0.02;
            $juca = $juca +0.03;
            $anos= $anos + 1;
            
        }
        echo "Para que Juca fique maior que Chico levarão  $anos anos.";
        echo "<br>Chico ficaria com $chico mts";
        echo "<br>Juca ficaria com $juca mts";
       
    ?>
</body>
</html>