<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Produto Cadastrado</title>
    <h1> Produto Cadastrado com Sucesso</h1>
    <style>
        body{
            font-size:16pt;
            background-color: rgb(0#cecece);
        }
        h2{
            font-family: Arial , sans-serif;
            font-size: 20pt;
            color: green;
        }
        h1{
            font-family: Buble , sans-serif;
            background-color: rgb(0#cecece);
            font-size: 16pt;
        }
    </style>
</head>
<body>
    <?php
        echo "<h2>Dados do Produto Cadastrado:</h2>";
        echo "<p>Código: ".$_POST["codigo"]."</p>";
        echo "<p>Nome: ".$_POST["nome"]."</p>";
        echo "<p>Quantidade: ".$_POST["quantidade"]."</p>";
        echo "<p>Unidade: ".$_POST["unidade"]."</p>";
        echo "<p>Preço: ".$_POST["preco"]."</p>";
        
    ?>

    
</body>
</html>