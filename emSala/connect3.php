<?php
$con = mysqli_connect("localhost", "root", "U9", "lp1");

if (mysqli_connect_errno()){
    echo "Falha ao conectar com MySql: ".mysqli_connect_error();

}
$sql1 = "INSERT INTO Pessoa VALUES ( 'Ana', 'Souza', 20)";
mysqli_query ($con, $sql1);

$sql2 =  "INSERT INTO Pessoa(Nome, Sobrenome,Idade) VALUES ('Carlos', 'Costa', 21)";
mysqli_query($con, $sql2);


mysqli_close($con);
?>
