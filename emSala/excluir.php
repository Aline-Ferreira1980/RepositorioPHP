<?php

    //NO CASO DE HOUVER UMA CHAVE PRIMÁRIA PARA IDENTIFICAÇÃO DE CADA UM DOS REGISTROS,
    //EX: SE NESTE CASO DA PESSOA HOUVESSE UM CPF, PASSARIA-SE APENAS O CPF PARA A 
    //EXECUÇÃO DA EXCLUSÃO, COMO NESTE CASO NÃO TEMOS NENHUM IDENTIFICADO ÚNICO PARA O REGISTRO
    //ESTAMOS PASSANDO MAIS DE UM PARAMETRO PARA PERFORMAR A EXCLUSÃO.

    $nome = $_GET['nome'];
    $sobrenome = $_GET['sobrenome'];
    $idade = $_GET['idade'];

    $con = mysqli_connect('localhost', 'root', 'Uscs94066819', 'lp1');
        
    $sql = "DELETE FROM pessoa WHERE nome = '$nome' AND sobrenome = '$sobrenome' AND idade = $idade";
    
    if (mysqli_query($con, $sql)){
        header('Location: listar.php');
    }else{
        echo "Erro ao efetuar exclusão";
    }

    mysqli_close($con);
?>