<?php

    
    $con = mysqli_connect('localhost', 'root', 'Uscs94066819', 'projetoPHP');
        
    $sql = "SELECT * FROM usuario";
    
    $resultado = mysqli_query($con, $sql);

    
        
    mysqli_close($con);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Lista de Cliente</title>
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
<div class="container">
        <a class="btn btn-primary" href="excluirCliente.php">Exclusão</a>
        <table class="table table-responsive table-striped">
            <thead>
                <tr>
                    <th>CPF</th>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Email</th>
                    <th>Endereco</th>
                    <th>Remover</th>
                </tr>
            </thead>
            <tbody>
                
                <?php
                    while ($usuario = mysqli_fetch_array($resultado)){
                        $cpf = $usuario['cpf'];
                        $nome = $usuario['nome'];
                        $email = $usuario['email'];
                        $idade = $usuario['idade'];
                        $endereco = $usuario['endereco'];
                        
                       
                        echo "<tr>
                                <td>$cpf</td>
                                <td>$nome</td>
                                <td>$idade</td>
                                <td>$email</td>                                
                                <td>$endereco</td>
                                <td><a class='btn btn-small btn-danger' href='excluirCliente.php?cpf=$cpf&nome=$nome&idade=$idade&email=$email&endereco=$endereco'>Excluir</a></td>
                            </tr>";
                    }

                ?>
            </tbody>
        </table>        

    </div>
    
</body>
</html>