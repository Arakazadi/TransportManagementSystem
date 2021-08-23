<?php
	$host = 'remotemysql.com';
	$db = 'h1WpPEvBS9';
	$user = 'h1WpPEvBS9';
	$pass = 'YjCR6xd4pk';
	$charset = '';

	$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

	try{
		$pdo = new PDO($dsn, $user, $pass);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	} catch(PDOException $e) {
		throw new PDOException($e->getMessage());
	}


?>