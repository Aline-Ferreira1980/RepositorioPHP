<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média do aluno</title>
</head>
<body>
    <?php
    $nota1 = 9.5;
    $nota2 = 7.0;
    $nota3 = 3.0;

    $media= ($nota1+$nota2+$nota3)/3;

    printf('Nota 1 é: %s<br>',number_format($nota1,1));
    printf('Nota 2 é: %s<br>',number_format($nota2,1));
    printf('Nota 3 é: %s<br><br>',number_format($nota3,1));
    printf("Média: %s<br><br>", number_format($media,2));

    if ($media>=6)
        printf("Parabéns, você foi aprovado!");
    else
        printf("Que Pena, você foi reprovado!");
    

    ?>
</body>
</html>