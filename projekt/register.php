<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Bank | Registration Page</title>
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

<body class="register_page">
<div class="register_box">
  <div class="register_logo">
    <a href="login.php"><img src="./css/logo_gora.gif" alt="bank" width="400px"></a>
  </div>
  <!-- end register logo -->

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

<?php
  if (isset($_GET['register'])) {
    echo <<<ERROR

      <div class="card-success">
        <div class="card-header">
         <h3 class="card-title">Prawidłowo dodano użytkownika</h3>
        </div>
      </div>
ERROR;
    unset($_SESSION['error']);
  }
?>


  <div class="card">
    <div class="register_card">
      <h1 class="register_h">Otwórz konto w naszym banku</h1>

      <form action="scripts/add_user.php" method="post">

      <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Imię" name="name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div> 
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nazwisko" name="surname">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="date" class="form-control" placeholder="Data urodzenia" name="birthday">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Hasło" name="pass1">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Powtórz hasło" name="pass2">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree" n>
              <label for="agreeTerms">
               Zgadzam się na wszystkie <a href="#">warunki</a>
              </label>
            </div>
          </div>
          <!-- /.col -->

          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Załóż konto</button>
          </div>
          <!-- /.col -->

        </div>
      </form>

      <a href="login.php" class="text-center">Mam już konto lol</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
