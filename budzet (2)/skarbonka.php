<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Portfel</title>
    <link rel='stylessheet' href="./css/style.css">


    <!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a3/jquery.mobile-1.0a3.min.css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.0a3/jquery.mobile-1.0a3.min.js"></script>   -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../AdminLTE-3.0.5/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../AdminLTE-3.0.5/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./css/style.css">

    

</head>

<body>

    <div data-role="page" id="glowna">

        <!-- Elementy głowne-->
        <div class="backButton">
           Aby osiągnąć cel miesięczny nie możesz wydać więcej niż:
		   <?php
    session_start();
    

        

        require_once ('scripts/connect.php');

        if ($conn->connect_errno != 0) 
		{
            $_SESSION['error'] = 'Błędne połączenie z bazą danych!';
            header('location: ../register.php');
            exit();
        }
		
		$email=$_SESSION['logged']['email'];
        $sql = "SELECT sum(`kwota`) as `suma` FROM `koszty`  WHERE `email`=?";
        $stmt = $conn->prepare($sql);
        $stmt ->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
		$row = $result->fetch_assoc();
		$sql2 = "SELECT * FROM `user`  WHERE `email`=?";
        $stmt2 = $conn->prepare($sql2);
        $stmt2 ->bind_param("s", $email);
        $stmt2->execute();
        $result2 = $stmt2->get_result();
		$row2 = $result2->fetch_assoc();
		echo $_SESSION['budget']-$row['suma']-$row2['goal'];
		
		?>
        </div>
		

        <div id="menuBox">

            <ul id="menu">
                <li><a href="index.html"><img src="css/images/FeedOp.png" alt="glowna"></a>
                <li><a href="bilans1.php"><img src="css/images/Alert.png" alt="saldo"></a>
                <li><a href="kalendarz.php"><img src="css/images/Explore.png" alt="kalendarz"></a>
                <li><a href="skarbonka.php"><img src="css/images/ProfileWh.png" alt="skarbonka"></a>
                <li><a href="#"><img src="css/images/Settings.png" alt="inne"></a>
            </ul>
        </div>

        <!-- Koniec elementów głównych-->

        <div class="grayBox">
            <a>Cel:</a>
			
        </div>


        <div class="grayBox">
         <a> Odłożyć w tym miesiącu: <?php
				echo $_SESSION['goal'];?>  </a>

        </div>

    </div>


<!-- jQuery -->
<script src="../AdminLTE-3.0.5/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../AdminLTE-3.0.5/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="../AdminLTE-3.0.5/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="../AdminLTE-3.0.5/plugins/chart.js/Chart.min.js"></script>
<script src="../AdminLTE-3.0.5/dist/js/demo.js"></script>
<script src="../AdminLTE-3.0.5/dist/js/pages/dashboard3.js"></script>

</body>

</html>