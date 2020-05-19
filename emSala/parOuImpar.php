<html>
<?php
$numero = $_GET["numero"];
if ($numero%2 == 0){
    echo($numero ." É um número par. "."<br>" );
     } else {
        echo($numero . " É um número ímpar. "."<br>");
     }
     
     if($numero>0){
        echo ($numero. " é positivo");
     }else{
          echo  ($numero." é negativo.");
        
    }


?>

</html>