<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Inventario</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <?php error_reporting(0);
            $msg=$_GET['msg'];
            if($msg != ""){
              echo"<div class='form-group'><font color='red'><strong><center>$msg</center></strong></font></div>";
            }
            ?>
        <form action="validar.php" method="post" id="frmdo" name="frmdo">
          <div class="form-group">
            <label for="username">Usuario</label>
            <input class="form-control" id="username" name="username" type="text" placeholder="Username">
          </div>
          <div class="form-group">
            <label for="pswd">Contraseña</label>
            <input class="form-control" id="pswd" name="pswd" type="password" placeholder="Password">
          </div>
          <!--<div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>-->
          <!--<a class="btn btn-primary btn-block" href="index.html">Login</a>-->
          <input type="submit" name="btn" class="btn btn-primary btn-block" value="Ingresar" />
        </form>
        <!--<div class="text-center">
          <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      -->
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
