<?php
 session_start();
  if (!empty($_POST['email']) && !empty($_POST['pass'])) {
 
    require_once ('connect.php');
   
    $email = $_POST['email'];
    $email = $_POST['pass'];
    $sql = "SELECT * FROM `user` WHERE `email`=?";
    $stmt = $conn->prepare($sql);
    $stmt ->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
   // echo $user['id'];
    $error=0;
    if ($conn->affected_rows == 1)   {
       $passdb = $user['pass'];
       //porownanie haseł
       if (password_verify($pass, $passdb)){
         $_SESSION['logged']['name'] = $user['name'];
         $_SESSION['logged']['name'] = $user['surname'];
         $_SESSION['logged']['name'] = $user['email'];

         //0:52 05-30

       } else {
         $error=1;
       }
      } else {
           $error=1;
        }
   
        if ($error != 0) {
            $_SESSION['error'] = 'Błędny login lub hasło';
            header('location: ../login.php'); 
            exit();
        }
        $stmt->close();
        $conn->close();

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