<?php
$con = mysqli_connect("localhost", "root", "U9", "lp1");

$sql = "CREATE TABLE Pessoa (Nome CHAR(30),Sobrenome CHAR(30), Idade INT)";

if (mysqli_query($con, $sql)){
    echo "Tabela criada com sucesso!!!";

}
else {
    echo "Erro: ".mysqli_error($con);

    }
    mysqli_close($con);

?>
