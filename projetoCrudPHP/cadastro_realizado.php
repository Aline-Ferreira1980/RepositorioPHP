
<?php

$mensagem = "";

if (isset($_POST['btnCadastrar'])){
    $cpf = $_POST['txtCpf'];
    $nome = $_POST['txtNome'];
    $idade = $_POST['txtIdade'];
    $email = $_POST['txtEmail'];
    $endereco = $_POST['txtEndereco'];
    
  

    $con = mysqli_connect('localhost', 'root', 'Uscs94066819', 'projetoPHP');
    
    $sql = "INSERT INTO usuario VALUES ('$cpf', '$nome', $idade, '$email', '$endereco')";

    if (mysqli_query($con, $sql)){
        $mensagem = "<div class='alert alert-success'>Registro gravado com sucesso!</div>";
    }else{
        $mensagem = "<div class='alert alert-danger'>Erro ao gravar o registro!</div>";
    }
    
    mysqli_close($con);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>CADASTRADO</title>
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
    
</head>
<body>
<h2> Cliente Cadastrado com Sucesso!!!</h2></br></br>
    <h4>Dados do Cliente:</h4></br>
    
    
   <p> 
       CPF: <?php echo $_POST["txtCpf"]; ?></br>
       Nome: <?php echo $_POST["txtNome"]; ?></br>
       Idade: <?php echo $_POST["txtIdade"]; ?></br>
       Email: <?php echo $_POST["txtEmail"]; ?></br>
       Endereco: <?php echo $_POST["txtEndereco"]; ?></br>
      
    </p>
    <div class="container">
        <?php echo $mensagem; ?>
        <form action="listarCliente.php" method="POST">

            <input class="btn btn-success" type="submit" value="Proximo" name="btnProximo">
            <a class="btn btn-primary" href="cadastrarCliente.php">Voltar</a>
        </form>
        
    </div>
    </table>
</body>
</html>