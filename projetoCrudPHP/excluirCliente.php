<?php
session_start();
$cpf = $_GET['cpf'];
$nome = $_GET['nome'];
$idade = $_GET['idade'];
$email = $_GET['email'];
$endereco = $_GET['endereco'];


$con = mysqli_connect('localhost', 'root', ' ', 'projetoPHP');
    
$sql = "DELETE FROM usuario WHERE cpf= '$cpf' and nome='$nome' and idade='$idade' and email='$email' and endereco = '$endereco'";

if (mysqli_query($con, $sql)){
    header('Location: listarCliente.php');
}else{
    echo "Erro ao efetuar exclusão";
}

mysqli_close($con);
?>
<style>
        body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
}


  </style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Exclusão de Cliente</title>
</head>
<body>
<form action="listarCliente.php" method="POST">

<input class="btn btn-success" type="submit" value="confirmar" name="btnConfirmar">
<a class="btn btn-primary" href="listarCliente.php">Voltar</a>
</form>
</body>
</html>

