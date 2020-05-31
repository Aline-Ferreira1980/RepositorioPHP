
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
    <title>Cadastro Cliente em PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Cadastro Cliente</title>
</head>
<body>
<div class="container">
        <?php echo $mensagem; ?>
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
        <a class="btn btn-primary" href="listarCliente.php">Voltar</a>
    </div>
</body>
</html>

