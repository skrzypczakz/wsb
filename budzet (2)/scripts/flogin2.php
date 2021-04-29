<?php
 session_start();
  if (!empty($_POST['name']) && !empty($_POST['surname'])&&!empty($_POST['birthday']))
	{
 
		require_once ('connect.php');
		$email=$_SESSION['logged']['email'];
		
		$name=$_POST['name'];
		$surname=$_POST['surname'];
		$birthday=$_POST['birthday'];
		$sql= "UPDATE `user` SET `name` = ?, `surname` = ?, `birthday` = ? WHERE `user`.`email` = ?";
		$stmt = $conn->prepare($sql);
		$stmt ->bind_param("ssss", $name, $surname,$birthday,$email);
		if($stmt->execute())
			{
				header('location: ../flogin3.php');
			}
       

    }
  else {
      $_SESSION['error'] = 'Wypełnij wszystkie pola!';
      ?>
        <script>
            history.back();
        </script>           
      <?php
    
  }
?>