
<?php

session_start();

if($_SESSION['Login'] === ""){
  
  if($_POST['btnLogin']="Login"){
    $_SESSION['Login'] = $_POST['e_mail'].$_POST['CPF'];
    
  }
}
if($_SESSION['Login']==="aline@uscs.edu.com.br461.415.180-95"){
  echo "<div class='alert alert-success'><h2 align=center>Bem-vindo!</h2></div>";
}else{
  $_SESSION['ErroDeLogin'] = "<b>Erro ao efetuar login!</b><br>Verifique seu e-mail e CPF novamente.";
  header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cadastro Cliente em PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Cadastro Cliente</title>
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


  </style>
</head>
<body>
<div class="container">
        
        <form action="cadastro_realizado.php" method="POST">
        
            <label for="">CPF</label>
            <input class="form-control" type="text" name="txtCpf" id="">
            <label for="">Nome</label>
            <input class="form-control" type="text" name="txtNome" id="">
            <label for="">Idade</label>
            <input class="form-control" type="text" name="txtIdade" id="">
            <label for="">Email</label>
            <input class="form-control" type="text" name="txtEmail" id="">
            <label for="">Endereco</label>
            <input class="form-control" type="text" name="txtEndereco" id="">
        
            <input class="btn btn-success" type="submit" value="Cadastrar" name="btnCadastrar">
        </form>
        <a class="btn btn-primary" href="index.php">Voltar</a>
    </div>
</body>
</html>