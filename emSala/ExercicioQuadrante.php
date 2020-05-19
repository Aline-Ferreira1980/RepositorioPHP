<html>

<?php

    $x = $_GET["x"];
    $y = $_GET["y"];
    while ($x != 0 && $y !=0){
    if ($x >0 && $y >0){
        echo ("Primeira coordenada é $x, $y");
    }elseif ($x< 0 && $y>0){
        echo "Segunda coordenada é $x, $y";
    }elseif ($x> 0 && $y <0){
        echo "Terceira coordenada é $x , $y";
    }elseif ($x <0 && $y< 0){
        echo "Quarta coordenada é $x, $y";
    }else{
    
    }
break;
}
    ?>
    
</html>
