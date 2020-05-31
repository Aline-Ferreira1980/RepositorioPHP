<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>CADASTRADO</title>
    
</head>
<body>
<h2> Cliente Cadastrado com Sucesso!!!</h2></br></br>
    <h4>Dados do Cliente:</h4></br>

   <p> 
       CPF: <?php echo $_POST["cpf"]; ?></br>
       Nome:<?php echo $_POST["nome"]; ?></br>
       Idade:<?php echo $_POST["idade"]; ?></br>
       Email:<?php echo $_POST["email"]; ?></br>
       Endereco: <?php echo $_POST["endereco"]; ?></br>    
    </p>
    
</body>
</html>