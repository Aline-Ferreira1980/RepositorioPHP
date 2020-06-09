<?php
session_start();
$mensagem = "";

if (isset($_POST['btnCadastrar'])){
    $cpf = $_POST['txtCpf'];
    $nome = $_POST['txtNome'];
    $idade = $_POST['txtIdade'];
    $email = $_POST['txtEmail'];
    $endereco = $_POST['txtEndereco'];

    $con = mysqli_connect('localhost', 'root', ' ', 'projetoPHP');
    
    $sql = "INSERT INTO usuario VALUES ('$cpf', '$nome', $idade, '$email', '$endereco')";

    if (mysqli_query($con, $sql)){
        $mensagem = "<div class='alert alert-success'>Registro gravado com sucesso!</div>";
    }else{
        $mensagem = "<div class='alert alert-danger'>Erro ao gravar o registro! Cadastro existente ou falta de dados.</div>";
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


  </style>
    
</head>
<body>

    <h3>Dados do Cliente:</h3></br>

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

            
            <input class="btn btn-success" type="submit" value="Proximo" name="btnProximo"></br></br>
            <a class="btn btn-primary" href="cadastrarCliente.php">Voltar</a>
        </form>
        
    </div>
    
</body>
</html>
