<?php 
	session_start();
	unset($_SESSION['Usuario_padre']);
	header("Location: ../servicios.php");

 ?>