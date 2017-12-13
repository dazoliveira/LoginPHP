<?php
session_start();

if (!$_SESSION['autenticado']) {
    header('Location: login.php');
    die(0);
}

?>

<!DOCTYPE html>
<html>
   <head>
      <title>Logado</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap core CSS -->
      <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet" media="screen">
      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
      <![endif]-->
   </head>
   <body>
      <div class="container">
         <div class="starter-template">
            <h1>Bem vindo <?php echo $_SESSION['userName'] ?> !</h1>
            <a href="logout.php" class="btn btn-default">Logout</a>
         </div>
      </div>
      <!-- /.container -->
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.min.js"></script>
   </body>
</html>