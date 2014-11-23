<!--
	@author: psyroam
	@responsible: psyroam
	@version: 1.0.0rc
-->
<?php

	//print("<script>alert('".hash_blowfish("123")."');</script>");

	function hash_blowfish($plaintext,$salt,$rounds = 10)
	{
		return crypt($plaintext,sprintf("$2a$%02d$",$rounds) . $salt);
	}

	function salt()
	{
		$salt = ""; 
		$salt_chars = array_merge(range('A','Z'), range('a','z'), range(0,9)); 
		for($i=0; $i < 255; $i++) 
		{ 
			$salt .= $salt_chars[array_rand($salt_chars)]; 
		}

		return $salt;
	}
?>