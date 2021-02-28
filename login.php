<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>The Cybernet Place</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <!-- Custom Style -->
  <link rel="stylesheet" href="dist\css\custom.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="index2.php" class="h1"><b>Cybernet</b>Place</a>
    </div>
    <div class="card-body">
      <?php
        $msg = "Sign in to start your session";
        $classFor = '';
        $classForinput = '';
        if( isset($_GET['error']) && $_GET['error'] == 'Invalid username or password')
        {
          $msg = $_GET['error']; 
          $classFor = 'errorLogin';
          $classForinput = 'errorInputs';
        }
      ?>
      <div class="login-msg <?php echo $classFor; ?>">
        <b><?php echo $msg; ?></b>
      </div>

      <form action="dist/php/passer/user_getter.php" method="post">
      <label for="user_name">Username</label>
        <div class="input-group mb-3">
          
          <input type="text" class="form-control <?php echo $classForinput; ?>" placeholder="Username" name="user_name" id="user_name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <label for="pass_word">Password</label>
        <div class="input-group mb-3">
          
          <input type="password" class="form-control <?php echo $classForinput; ?>" placeholder="Password" name="pass_word" id="pass_word">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" name="sign-in">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->
      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
