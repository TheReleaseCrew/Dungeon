<!--
	@author: psyroam
	@responsible: psyroam
	@version: 0.1.1
-->
<?php
	require_once('/../cryption.php');
	require_once('/../../exceptions/exceptions.php');
	require_once('/../../database/db.php');

	function register($email,$plain_password)
	{
		$connection = connect();
		$stmt = $connection -> prepare("INSERT INTO login (`email`,`password`,`salt`) VALUES(:email,:password,:salt);");
		
		$salt = salt();
		$hashed_password = hash_blowfish($plain_password,$salt);

		$stmt->execute(array(':email'=>$email,':password'=>$hashed_password,':salt'=>$salt));

		$connection = null;
	}
?>