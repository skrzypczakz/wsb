<?php
    session_start();
    if(!empty($_POST['email']) && !empty($_POST['pass1']) && !empty($_POST['pass2']) )    
	{

        if (!isset($_POST['terms'])) 
		{      
         $error=1;    
         $_SESSION['error'] = 'Wyraź zgodę na regulamin!';
        }

        if ($_POST['pass1'] != $_POST['pass2']) 
		{
            $error=1;
            $_SESSION['error'] = 'Hasła są różne!';        
        }

        

        require_once ('connect.php');

        if ($conn->connect_errno != 0) 
		{
            $_SESSION['error'] = 'Błędne połączenie z bazą danych!';
            header('location: ../register.php');
            exit();
        }

        
        $email=$_POST['email'];
        $pass1=$_POST['pass1'];
		//$sql1="select * from user where email='$email'";
		//if($result=$conn->query($sql1))
		//{
		//	$ile=$result->num_rows;
		//	if($ile>0)
		//	{
			//	echo "email istnieje";
		//	}
		//}
		//else
		//{
			
		//	$error=1;
		//	$_SESSION['error']='gowno';
		//}
		

        

        
         // sprawdzanie czy istnieje email    

         $sql = "SELECT * FROM `user` WHERE `email`=?";
         $stmt = $conn->prepare($sql);
         $stmt ->bind_param("s", $email);
         $stmt->execute();
         $result = $stmt->get_result();
         $user = $result->fetch_assoc();
        // echo $user['id'];
        if ($conn->affected_rows == 1)  
		{
			
            $_SESSION['error'] = 'Na podany adres zostało już utworzone konto'; 
			?>
			<script type="text/javascript">
			history.back();
			</script>
			<?php
			exit();
			
		}
        else
		{
            //szyfrowanie hasła

			$pass1 = password_hash($pass1, PASSWORD_DEFAULT);

			$sql = "INSERT INTO `user`(`email`, `pass`) VALUES (?, ?)";
			$stmt = $conn->prepare($sql);
			$stmt ->bind_param("ss", $email, $pass1);
			if($stmt->execute())
			{
				$_SESSION['error'] = 'Konto utworzone poprawnie';
				header('location: ../login.php');
			}
			
        }
		$stmt->close();
        $conn->close();

             
            
         

            
         //   $_SESSION['error'] = 'Nie udało się dodać nowego użytkownika';
         // header('location: ../register.php');
        


    }
	else 
	{
        $_SESSION['error'] = 'Wypełnij wszystkie pola!';
    ?>
        <script type="text/javascript">
        history.back();
        </script>
        <?php
        exit();
    } 
?>