<?php
 session_start();
 
 
		require_once ('connect.php');
		$email=$_SESSION['logged']['email'];
		header('location: ../bilans1.php');
?>