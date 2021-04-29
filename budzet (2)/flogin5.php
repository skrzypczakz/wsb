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
            <p>Proponowany plan:</p></br>
			<?php
				echo "Budżet miesięczny: ".$_SESSION['budget']."zł</br>";
				echo "Wydatki w tym miesiącu: ".$_SESSION['expenses']."zł</br>";
				echo "Jedzenie: Minimum ".$_SESSION['dependentsdemands']."zł</br>";
				echo "Odłożysz: ".$_SESSION['goal']."zł</br>";
				echo "Na przyjemności zotaje Ci: ".$_SESSION['left']."zł</br>";
			?>
			<form action="scripts/flogin6.php" method="post">
		<div class="card-footer">
                  <button type="submit" class="wButton">OK</button>
        </div>
		
		</form>
		<form action="scripts/flogin7.php" method="post">
		<div class="card-footer">
                  <button type="submit" class="wButton">Popraw</button>
        </div>
		
		</form>
   
     
    
      
	</div>

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

</body>
</html>