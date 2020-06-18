<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Bank | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./css/style.css">
</head>

<body class="login_page">
<div class="login_box">
  <div class="login-logo">
    <a href="login.php"><img src="./css/logo_gora.gif" alt="bank" width="400px"></a>
  </div>
  <!-- /.login-logo -->

<?php
  if (isset($_SESSION['error'])) {
    
    echo <<<ERROR
      <div class="card-danger">
        <div class="card-header">
         <h3 class="card-title">{$_SESSION['error']}</h3>
        </div>
      </div>
ERROR;
    unset($_SESSION['error']);
  }
?>


  <div class="card">
    <h1 class="login_h">Proszę zaloguj się</h1>
    
      <form action="scripts/login2.php" method="post">

        <div class="input-group mb-3">
          <input type="email" class="form_control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form_control" placeholder="Hasło" name="pass">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-8">
            <div class="icheck_primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Pamiętaj mnie
              </label>
            </div>
          </div>
          <!-- /.col -->

          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Zaloguj się</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="forgot-password.php">Zapomniałem/am hasła</a>
      </p>
      <p class="mb-0">
        <a href="register.php" class="text-center">Otwórz nowe konto</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

</body>
</html>
