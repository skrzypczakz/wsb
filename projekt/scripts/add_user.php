<?php
    session_start();
    if(!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['birthday']) && !empty($_POST['email']) && !empty($_POST['pass1']) && !empty($_POST['pass2']) )    {

        if (!isset($_POST['terms'])) {      
         $error=1;    
         $_SESSION['error'] = 'Wyraź zgodę na regulamin!';
        }

        if ($_POST['pass1'] != $_POST['pass2']) {
            $error=1;
            $_SESSION['error'] = 'Hasła są różne!';        
        }

        if ($error !=0) {
            ?>
             <script type="text/javascript">
             history.back();
             </script>           
            <?php
            exit();
        }

        require_once ('connect.php');

        if ($conn->connect_errno != 0) {
            $_SESSION['error'] = 'Błędne połączenie z bazą danych!';
            header('location: ./register.php');
            exit();
        }

        $name=$_POST['name']; 
        $surname=$_POST['surname']; 
        $birthday=$_POST['birthday']; 
        $email=$_POST['email'];
        $pass1=$_POST['pass1'];

        //szyfrowanie hasła

        $pass1 = password_hash($pass1, PASSWORD_ARGON2ID);

        $sql = "INSERT INTO `user`(`name`, `surname`, `birthday`, `email`, `pass`) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt ->bind_param("sssss", $name, $surname, $birthday, $email, $pass1);

        if ($stmt->execute()) {
            header('location: ../?register=success');
        }
        else {
         // sprawdzanie czy istnieje email    

         $sql = "SELECT * FROM `user` WHERE `email`=?";
         $stmt = $conn->prepare($sql);
         $stmt ->bind_param("s", $email);
         $stmt->execute();
         $result = $stmt->get_result();
         $user = $result->fetch_assoc();
        // echo $user['id'];
         if ($conn->affected_rows == 1)   {
             $S_SESSION['error'] = 'Podany adres email istnieje'; }
             else {
                 $_SESSION['error'] = 'Brak możliwości dodania użytkownika';
             }

             ?> 
              <script>
                  history.back();
                  exit();
              </script>
            <?php
            
         }

            
         //   $_SESSION['error'] = 'Nie udało się dodać nowego użytkownika';
         // header('location: ../register.php');
        


    } else {
        $_SESSION['error'] = 'Wypełnij wszystkie pola!';
    ?>
        <script type="text/javascript">
        history.back();
        </script>
        <?php
        exit();
    } 
?>