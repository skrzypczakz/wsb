<?php
  session_start();
  
  
    

        

        require_once ('scripts/connect.php');

        if ($conn->connect_errno != 0) 
		{
            $_SESSION['error'] = 'Błędne połączenie z bazą danych!';
            header('location: ../register.php');
            exit();
        }
        
         // sprawdzanie czy istnieje email    
		$email=$_SESSION['logged']['email'];
        $sql = "SELECT * FROM `user`  WHERE `email`=?";
        $stmt = $conn->prepare($sql);
        $stmt ->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
		
        // echo $user['id'];
        
			if ($result->num_rows > 0) 
			{
				$row = $result->fetch_assoc();
			}
				
 
?>
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
            <a href="start.php"><img src="css/images/Backward Arrow.png" alt="back"></a>
        </div>

        <div id="menuBox">

            <ul id="menu">
                <li><a href="index.html"><img src="css/images/Feed.png" alt="glowna"></a>
                <li><a href="bilans1.php"><img src="css/images/Alert.png" alt="saldo"></a>
                <li><a href="kalendarz.php"><img src="css/images/Explore.png" alt="kalendarz"></a>
                <li><a href="skarbonka.php"><img src="css/images/Profile.png" alt="skarbonka"></a>
                <li><a href="#"><img src="css/images/Settings.png" alt="inne"></a>
            </ul>
        </div>

        <!-- Koniec elementów głównych-->


        <div class="avatarGlowny">
            <a href="profiles.php"><img src="css/images/Ellipse 4.png" alt="back"></a>
        </div>

        <div class="actualMoney">
            <a><?php
			echo $_SESSION['budget']." zł";
			
			?></a>
        </div>

        <div class="speedClick">
            <ul class="iconClick">
                <li> <a href="#"><img src="css/images/Icon feather-send.png"></a></li>
                <li> <a href="#"><img src="css/images/Icon material-payment.png"></a></li>
            </ul>
        </div>

        <div class="ostatnieWydatki">
      <table class="ostatnieGlowna">
           <thead>
               <tr>
                   <th>Dziś, <?php
			echo date("d/m/Y");
			?></th>
               </tr>
           </thead>
           <tbody>
               <tr>
                   <th>Wydatki miesięczne</th>
                   <th><?php echo $row['expenses']." zł";?></th>
               </tr>
               <tr>
                   <th>Jedzenie</th>
                   <th><?php 
				   echo 400+200*$row['dependents']." zł";?></th>
               </tr>
               <tr>
                   <th>Cel miesięczny</th>
                   <th><?php echo $row['goal']." zł";?></th>
               </tr>
           </tbody>
       </table></div>  

       

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