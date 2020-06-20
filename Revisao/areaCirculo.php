<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area do Circulo</title>
</head>
<body>
    <?php
        $raio = 2.00;
        $pi = 3.14159;
        $area = $pi*($raio*$raio);

        printf("A área do círculo é: %s",number_format($area,4));
    ?>
</body>
</html>