<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRADO</title>
    <style>
        h2 {
            font-style: Arial;
        font-size: 30pt;
        color: rgb(0#cecece);
        }
        h3{
            font-style: Comic;
            font-size: 20pt;
            color: rgb(0#070707);
        }

        p{
            font-size: 15pt;
            color: rgb(0#000000);
        }
        <
    </style>
</head>
<body>
    <h2> PRODUTO CADASTRADO COM SUCESSO </h2>
    <h3>DESCRIÇÃO DO PRODUTO</h3>

   <p> Código:<?php  echo $_POST["codigo"]; ?> </br>
    Nome: <?php echo  $_POST["nome"]; ?> </br>
    Quantidade: <?php echo $_POST["quant"]; ?> </br>
    Descrição em:  <?php echo $_POST["un"]; ?> </br>
    Preço Unitário: R$ <?php echo $_POST["preco"]; ?> 
    </p>
    
</body>
</html>