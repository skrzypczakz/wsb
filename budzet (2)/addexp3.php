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
            
    <form action="scripts/addexp4.php" method="post">
	

        <div class="card-footer">
                  <button type="submit" class="wButton">ok</button>
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