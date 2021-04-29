<?php
 session_start();
  if ($_POST['budget']>400)
	{
 
		require_once ('connect.php');
		$email=$_SESSION['logged']['email'];
		
		$budget=$_POST['budget'];
		$dependents=$_POST['dependents'];
		$goal=$_POST['goal'];
		$expenses=$_POST['expenses'];
		$dependentsdemands=400+(($dependents-1)*200);
		$left=$budget-$dependentsdemands-$goal-$expenses;
		if($left<0)
		{
			$_SESSION['error'] = 'Cel do odłożenia='.$goal.'</br> minimalna kwota na jedzenie='.$dependentsdemands.'</br>i zaplanowane wydatki='.$expenses.'</br>przekracza założony budżet';
			?>
				<script>
					history.back();
				</script>           
			<?php
		}
		else 
		{
			$sql = "UPDATE `user` SET `budget`=?, `dependents`=?, `goal`=?,`expenses`=? WHERE `user`.`email`=?";
			$stmt = $conn->prepare($sql);
			$stmt ->bind_param("sssss", $budget, $dependents,$goal,$expenses,$email);
			if($stmt->execute())
			{
				$_SESSION['budget']=$budget;
				$_SESSION['dependentsdemands']=$dependentsdemands;
				$_SESSION['goal']=$goal;
				$_SESSION['expenses']=$expenses;
				$_SESSION['left']=$left;
				header('location: ../flogin5.php');
			}
		}
       

    }
  else {
      $_SESSION['error'] = 'Wprowadź kwotę większą niż 400zł';
      ?>
        <script>
            history.back();
        </script>           
      <?php
    
  }
?>