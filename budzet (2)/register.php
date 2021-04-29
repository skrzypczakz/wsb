<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Rejestracja</title>
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

    <div class="backButton">
        <a href="start.php"><img src="css/images/Backward Arrow.png" alt="back"></a>
    </div>

    <div class="logo">
        <a><img src="css/images/logo.png" alt="logo" width="100"></a>
    </div>
    
<?php
if (isset($_SESSION['error']))
	
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
            
    <form action="scripts/add_user.php" method="post">

      <div class="input-group mb-3">
        <input type="email" class="form_control" placeholder="LOGIN" name="email">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-envelope"></span>
          </div>
        </div>
      </div>

      <div class="input-group mb-3">
        <input type="password" class="form_control" placeholder="HASŁO" name="pass1">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>

      <div class="input-group mb-3">
          <input type="password" class="form_control" placeholder="Powtórz hasło" name="pass2">
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


        <div class="card-footer">
                  <button type="submit" class="wButton">utwórz konto</button>
        </div>
    </form>
   
    </div> 
    

</div>

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

</body>
</html>