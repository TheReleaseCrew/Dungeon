<!--
	@author: psyroam
	@responsible: psyroam
	@version: 0.1.1
-->
<?php
	session_start();

	
	require_once 'cryption.php';
	require_once('exceptions/exceptions.php');
	require_once('/database/db.php');

	function try_log($email,$password)
	{
		if(!check_if_email_is_valid($email))
		{
			$_SESSION['login']['logged'] = false;
			$_SESSION['login']['exceptions'] = report_exception("clogin.php","try_log","0x0001");
			die();
		}
		
		$stmt = $conn -> prepare("SELECT * FROM login WHERE `email`= :txt;");
		$stmt->execute(array(':txt'=>$email));
/*
		while($row = $stmt->fetch(PDO::FETCH_OBJ))
		{
			if($stmt->rowCount()>0)
			{
				if(hash_equals($row['password'],hash_blowfish($password)))
				{
					$_SESSION['login']['logged'] = true;
				}
				else
				{

				}
			}
		}*/
	}

	function check_if_email_is_valid($email)
	{
		//not implemented yet
		return true;
	}
?>