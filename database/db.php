<!--
	@author: psyroam
	@responsible: psyroam
	@version: 0.1.1 
-->
<?php
	session_start();

	require_once 'credentials.php';
	global $conn;
	try 
	{
		$strcon = "mysql:host=$host;dbname=$dbname;charset=utf8";
	  	$conn = new PDO($strcon, $user, $pass);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
	}
	catch(PDOException $e) 
	{
 		print($e->getMessage());
 	}
?>