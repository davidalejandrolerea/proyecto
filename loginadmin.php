<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>ADMINISTRADOR</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <form class="form-signin" method="POST" action="login2.php">
        <h2 class="form-signin-heading">Iniciar Sesion</h2>        
        <label for="inputEmail" class="sr-only">Usuario</label>
        <input type="admin" id="admin" class="form-control" placeholder="Usuario" required autofocus name="admin">
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" id="password" class="form-control" placeholder="Password" required name="password">
        <button class="btn btn-lg btn-primary" type="submit" name="btnLogin">Ingresar</button>
        <a href="index.php" class="btn btn-lg btn-success">Volver al Buscador</a>
      </form>
    </div> <!-- /container -->

    <hr>

        <!-- Footer -->
        <footer>
            <div class="container">
                    <p>Departamento &copy; Legajos</p>
            </div>
            <!-- /.row -->
        </footer>



  </body>
</html>
