<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/table.css"
    <title>Document</title>
</head>
<body>
    <h3>Wyświetlanie tabeli użytkownicy</h3>
    <?php
        require_once './scripts/connect.php';

//        $sql = "SELECT * FROM `user`";
        $sql = "SELECT `user`. `name`, `user`.`surname`, user.birthday, user.id, `city`.`city`";
        $result = mysqli_query('$connect', $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['name'];
        }

        echo <<<TABLE
        <table>
        <tr>
        <th>Id</th>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Data urodzenia</th>
        <th>Miasto</th>
        </tr>

TABLE;        
        
        
        while ($row = mysqli_fetch_assoc($result)) {
          echo   <<<ROW
            <tr>
             <td>$row[id]</td>
             <td>$row[name]</td>
             <td>$row[surname]</td>
             <td>$row[birthday]</td>
             <td>$row[city]</td>
             <td><a href="./scripts/del_user.php?id=$row[id]">Usuń</a></td>
            </tr> 
ROW;            
        }
        echo "</table>";
    ?>
</body>
</html>