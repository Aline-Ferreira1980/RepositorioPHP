<?php

    
    $con = mysqli_connect('localhost', 'root', 'Uscs94066819', 'lp1');
        
    $sql = "SELECT * FROM pessoa";
    
    $resultado = mysqli_query($con, $sql);

    
        
    mysqli_close($con);


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
        <a class="btn btn-primary" href="cadastro.php">Cadastrar</a>
        <table class="table table-responsive table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Idade</th>
                    <th>Remover</th>
                </tr>
            </thead>
            <tbody>
                
                <?php
                    while ($pessoa = mysqli_fetch_array($resultado)){
                        $nome = $pessoa['nome'];
                        $sobrenome = $pessoa['sobrenome'];
                        $idade = $pessoa['idade'];
                        echo "<tr>
                                <td>$nome</td>
                                <td>$sobrenome</td>
                                <td>$idade</td>
                                <td><a class='btn btn-small btn-danger' href='excluir.php?nome=$nome&sobrenome=$sobrenome&idade=$idade'>Excluir</a></td>
                            </tr>";
                    }

                ?>
            </tbody>
        </table>        

    </div>
    

</body>
</html>