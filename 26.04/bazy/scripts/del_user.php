<?php
    require_once './connect.php';
    if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM `user` WHERE `user`.`id` = '$id'";
    $result = mysqli_query($connect, $sql);
}  
    header('location: ../1_shop.php');

?>    