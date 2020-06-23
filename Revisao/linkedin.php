<?php
    if (isset($_GET['enviar'])){
        $email = $_GET['email'];
        $senha = $_GET['senha'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body style="background-color: rgb(21, 32, 43)">
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="margin-left:250px;margin-top:200px;">
                <svg style="width:50px;height:50px;margin-left:200px;" viewBox="0 0 24 24" class="r-jwli3a r-4qtqp9 r-yyyyoo r-j66t93 r-dnmrzs r-bnwqim r-1plcrui r-lrvibr"><g><path d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z"></path></g></svg>
                <h3 style="color:#fff;margin-left:120px;">Log In to Twitter</h3>
                <br>
                <?php
                    if (isset($_GET['enviar'])){
                        if ($email === "raphael@uscs.edu.br" && $senha === "123"){
                            ?>
                            <div class="alert alert-success">Usuário e senha corretos!</div>
                            <?php
                        }else{
                            ?>
                            <div class="alert alert-danger">Usuário ou senha incorretos!</div>
                            <?php
                        }
                    }
                ?>
                <form action="index3.php" method="get">
                    <div class="form-group">
                        <input class="form-control" type="text" name="email" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="senha" placeholder="Senha">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-block btn-primary" style="border-radius: 30px;" type="submit" value="Enviar" name="enviar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>