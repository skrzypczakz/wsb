<?php
 session_start();
 
 
		require_once ('connect.php');
		$email=$_SESSION['logged']['email'];
		$_SESSION['error']='Popraw dane';
		header('location: ../flogin3.php');
?>