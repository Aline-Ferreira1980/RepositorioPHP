<html>
<?php
$idade = $_GET["idade"];
$classificacao = $idade;
if ($classificacao< 5){
    echo "Não pode participar!";
}
elseif ($classificacao  >=5 and $classificacao<=7){
    echo "classificação Infantil A";
}elseif ($classificacao  >=8 and $classificacao<=10){
    echo "Clasisficação Infantil B";
} elseif($classificacao  >=11 and $classificacao<=13){
    echo "Classificação Juvenil A";
}elseif ($classificacao  >=14 and $classificacao<=17){
    echo "Classificação Juvenil B";
}else{
    echo "Classificação Adulto";
}
?>
</html>