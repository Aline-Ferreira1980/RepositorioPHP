<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n = 4;
        echo fatorial ($n);
        function fatorial ($n){
            if ($n ==0)
            return 1;
            return $n*fatorial($n-1);

        }
    ?>
</body>
</html>