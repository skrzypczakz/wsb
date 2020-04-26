<?php
 echo "Plik file.php";


?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Początek strony</h3>
    <?php
      require './file.php';
      require './file.php';

      include './file.php';
    ?>
    <h3>Koniec strony</h3>
</body>
</html>