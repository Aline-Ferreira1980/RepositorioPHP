<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distancia entre dois Pontos</title>
</head>
<body>
    <?php
      
        $x1 = 2.0;
        $y1 = 2.0;
        $x2 = 5.0;
        $y2 = 5.0;

        $distancia= (sqrt($x2-$x1)^2+($y2-$y1)^2);

        printf("Distancia entre os pontos A e B é: %s cm",number_format($distancia,2));
    ?>
</body>
</html>