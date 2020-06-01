<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  
  
  <style>body {background-color: #eee; text-align:center;} </style>
    <?php
     session_start();
     ini_set('display_errors', 0 );
     error_reporting(0);
    $_SESSION['Login'] = "";
    
    if($_SESSION['ErroDeLogin'] != ""){
      echo "<div class='alert alert-danger'>".$_SESSION['ErroDeLogin']."</div>";
    }
    $_SESSION['ErroDeLogin'] = "";
    
     
    ?>
     <div class='container'>
       <div class='row'>
         <div class='col-md-4' style="margin-left:380px;margin-top:50px;">
           <form class="form-signin" action= "cadastrarCliente.php" method= "POST">
            <img src="https://storage.semalt.com/uploads/articles/ec790c0d6e7cb8e2a94b08cbf85cf2190.jpg" border-box="20" position="relative" width="100%" text-align="absmiddle" class="fr-fic fr-dii">
             <h1 class="h3 mb-3 font-weight-normal">Faça login</h1>
             <label for="inputEmail" class="email">Email</label>
             <input type="email" id="inputEmail" class="form-control" placeholder="Seu Email" required autofocus name="e_mail"></br>
             <label for="inputCpf" class="text">CPF</label>
             <input type="CPF" id="inputCPF" class="form-control" placeholder="Seu CPF" required autofocus name="CPF">
             <div class="checkbox mb-3">
             </div>
             <input class="btn btn-success" type="submit" value="Login" name="btnLogin">      
           </form>
         </div>
       </div>
     </div>
  </body>
</html>