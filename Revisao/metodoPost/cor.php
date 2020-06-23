
<?php
        switch($_POST["cor"]){

            case "r": $background = "rgb(255,0,0)";break;
            case "g": $background = "rgb(0,255,0)"; break;
            case "b": $background = "rgb(0,0,255)"; break;
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style = "background:<?php echo $background;?>">
        <?php echo "<h1> Olá ". $_POST["nome"]."</h1>" ?>
    
</body>
</html>