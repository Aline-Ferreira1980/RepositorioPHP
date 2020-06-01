
<?php

$cpf = $_GET['cpf'];
$nome = $_GET['nome'];
$idade = $_GET['idade'];
$email = $_GET['email'];
$endereco = $_GET['endereco'];


$con = mysqli_connect('localhost', 'root', 'Uscs94066819', 'projetoPHP');
    
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

.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
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

