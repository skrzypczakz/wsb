<?php
    session_start();
    

        

        require_once ('connect.php');

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
				
				
				// output data of each row
				 while($row = $result->fetch_assoc())
				{
					echo " " . $row["nazwa"]. "  " . $row["typ"]. " " . $row["kwota"]. "<br>";
				}
            }
			else
			{
				echo "brak wydatków w tym miesiącu";
			}
		
		$stmt->close();
        $conn->close();

             
            
         

            
         //   $_SESSION['error'] = 'Nie udało się dodać nowego użytkownika';
         // header('location: ../register.php');
        


  
?>