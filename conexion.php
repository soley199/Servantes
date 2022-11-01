<?php
	$dsn = 'mysql:dbname=bd_servantes;host=localhost';
	$user = 'root';
	$pass = '';

	try {
		$pdo = new PDO($dsn, $user, $pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''));
		
	} catch (PDOException $e) {
		echo 'Error al conectar '. $e->getMessage();
	}
?>