<html>
<?php

$pesoIdealMulher = 0.0;
$pesoIdealHomem = 0.0;
$sexo = null;
$feminino = "F";
$masculino = "M";
$altura= $_GET["altura"];
$sexo = $_GET["sexo"];
 
  if ($sexo == $feminino){
      $pesoIdealMulher = (62.1*$altura)-44.7;
      echo ("O peso ideal é: " .number_format($pesoIdealMulher, 2, ',','.') ." para o sexo feminino.");
  } else{
      $pesoIdealHomem = (72.7*$altura)-58;
      echo("O peso ideal é: " .number_format($pesoIdealHomem, 2, ',','.')." para o sexo masculino.");
  }
?>

</html>