<!--
	@author: psyroam
	@responsible: psyroam
	@version: 0.1.1 
-->
<?php
	require_once 'credentials.php';

	try 
	{
	  	$DBH = new PDO("mysql:host=".$host";dbname=".$dbname, $user, $pass);
	}
	catch(PDOException $e) 
	{
 		print($e->getMessage());
 	}
?>