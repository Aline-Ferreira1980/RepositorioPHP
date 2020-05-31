
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Template de login, usando Bootstrap.</title>
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

    <!-- Principal CSS do Bootstrap -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="signin.css" rel="stylesheet">
  <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=0m04hpr5xbAXW6supHi_1Jd-M6Qx9ZJssSXTZT8Tw47xs9Ie4RLBNTciDjCDcfQ8Z-cvyvWYx4iux9rJo4w5AmXX7d7Cfk-tf0z10wJBdAI" charset="UTF-8"></script></head>

  <body class="text-center">
    <form class="form-signin" action= "cadastrarCliente.php" method= "POST">
      <h1 class="h3 mb-3 font-weight-normal">Faça login</h1>
      <label for="inputEmail" class="email">Email</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Seu email" required autofocus></br>
      <label for="inputCpf" class="text">CPF  </label>
      <input type="Cpf " id="inputCpf" class="form-control" placeholder="Seu cpf" required autofocus>
      <div class="checkbox mb-3">
      </div>
      <input class="btn btn-success" type="submit" value="login" name="btnLogin">      
    </form>
  </body>
</html>

