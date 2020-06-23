<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <h1>Escolha a tabuada</h1>

    <?php
        $tabuada= $_GET["tabuada"];
      

        for ($i=1; $i<=10; $i++){
           
            printf ("Tabuada $tabuada x $i = %d<br>",$i*$tabuada);
        }
        

    ?>
</body>
</html>