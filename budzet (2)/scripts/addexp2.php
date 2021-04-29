<?php
 session_start();
 
 
		require_once ('connect.php');
		$email=$_SESSION['logged']['email'];
		if(!empty($_POST['type']) && !empty($_POST['name'])&&!empty($_POST['amount']))
		{
			$type=$_POST['type'];
			$name=$_POST['name'];
			$amount=$_POST['amount'];
			$sql = "INSERT INTO `koszty`(`email`,`nazwa`, `typ`,`kwota`,`data`) VALUES (?, ?, ?, ?,?)";
			$stmt = $conn->prepare($sql);
			$date=date("Y-m-d");
			$stmt ->bind_param("sssss", $email,$name, $type, $amount,$date);
			if($stmt->execute())
			{
				
				$_SESSION['error'] = 'Dodano wydatek '.$date;
				header('location: ../addexp3.php');
			}
		}
		else
		{
			$_SESSION['error'] = 'Wypełnij wszystkie pola!';
      ?>
        <script>
            history.back();
        </script>           
      <?php
		}
?>