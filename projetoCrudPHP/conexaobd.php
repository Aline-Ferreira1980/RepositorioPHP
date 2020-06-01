<?php

$con = mysqli_connect("localhost", "root", " ");

if (mysqli_connect_errno($con)){
    echo "Erro ao conectar com a base de dados: ".mysqli_connect_error();
}
else {
    $sql  = "CREATE DATABASE projetoPHP";
    if (mysqli_query($con, $sql)){
    echo "Base de dados criada com sucesso!!!";
    }
    else {
        echo "Erro...".mysqli_error($con);
    }
    mysqli_close($con);

}

$con = mysqli_connect("localhost", "root", " ", "projetoPHP");

$sql = "CREATE TABLE usuario (cpf CHAR (14) PRIMARY KEY, nome CHAR (50), idade INTEGER, email CHAR (50),endereco CHAR (50))";

if (mysqli_query($con, $sql)){
    echo "Tabela criada com sucesso!!!";

}
else {
    echo "Erro: ".mysqli_error($con);

    }
    mysqli_close($con);

?>

