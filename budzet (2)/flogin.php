<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Logowanie</title>
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

    <div class="backButton">
        <a href="start.php"><img src="css/images/Backward Arrow.png" alt="back"></a>
    </div>

    <div class="logo">
        <a><img src="css/images/logo.png" alt="logo" width="100"></a>
    </div>
    
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
            Wygląda na to, że logujesz się po raz pierwszy</br>
			Uzupełnij dane aby kontynuować
    <form action="scripts/flogin2.php" method="post">

      <div class="input-group mb-3">
        <input type="text" class="form_control" placeholder="Imię" name="name">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-envelope"></span>
          </div>
        </div>
      </div>

      <div class="input-group mb-3">
        <input type="text" class="form_control" placeholder="Nazwisko" name="surname">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div></br>
	  <div class="input-group mb-3">
	  
                  data urodzenia
        
	  
        <input type="date" class="form_control" placeholder="Data urodzenia" name="birthday">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>

<!--
      <div class="row">
        <div class="col-8">
          <div class="icheck_primary">
            <input type="checkbox" id="remember">
            <label for="remember">
              Pamiętaj mnie
            </label>
          </div>
        </div> -->
        <!-- /.col -->

        <div class="card-footer">
                  <button type="submit" class="wButton">Dalej</button>
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