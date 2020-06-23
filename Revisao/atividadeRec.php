<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> Recursividade - Atividade </h3>

    <?php
        $a =5;

        echo func($a);

        function func($a){

            if ($a <2)
            return 1;

            return ($a-1)*(func($a-1));
        }
    ?>
</body>
</html>