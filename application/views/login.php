<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Prijava</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class = "col-lg-3 col-lg-offset-2">
    <h1>Prijavi se!</h1>

    <form action = "index.php/welcome/preveri" method = "POST">
        <div class = "form-group">
            <label for = "username">Uporabniško ime: </label>
            <input class = "form-control" required name = "username" id = "username" type = "text">
        </div>
        
        <div class = "form-group">
            <label for = "password">Geslo: </label>
            <input class = "form-control" required name = "password" id = "password" type = "password">
        </div>
        

        
        <div>
            <button class = "btn btn-primary" name = "register">Prijava</button>
        </div>
        </form>
    </div> 

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>