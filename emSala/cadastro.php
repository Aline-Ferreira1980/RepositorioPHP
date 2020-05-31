<?php

    $mensagem = "";

    if (isset($_POST['btnCadastrar'])){
        $nome = $_POST['txtNome'];
        $sobrenome = $_POST['txtSobrenome'];
        $idade = $_POST['txtIdade'];
    
        $con = mysqli_connect('localhost', 'root', 'Uscs94066819', 'lp1');
        
        $sql = "INSERT INTO pessoa VALUES ('$nome', '$sobrenome', $idade)";
    
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <?php echo $mensagem; ?>
        <form action="cadastro.php" method="post">
        
            <label for="">Nome</label>
            <input class="form-control" type="text" name="txtNome" id="">
            <label for="">Sobrenome</label>
            <input class="form-control" type="text" name="txtSobrenome" id="">
            <label for="">Idade</label>
            <input class="form-control" type="text" name="txtIdade" id="">

            <input class="btn btn-success" type="submit" value="Cadastrar" name="btnCadastrar">
        </form>
        <a class="btn btn-primary" href="listar.php">Voltar</a>
    </div>
    

</body>
</html>