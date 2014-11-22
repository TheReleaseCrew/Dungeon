<!--
	@author: psyroam
	@responsible: psyroam
	@version: 0.1.1
-->
<?php
	require 'database/db.php';

	function report_exception($site,$function,$errorcode)
	{
		$stmt = $conn->prepare("SELECT * FROM exceptions WHERE `site`=:site AND `function`=:function AND `errorcode`=:errorcode;");
		$stmt->execute(array(':site'=>$site,':function'=>$function,':errorcode'=>$errorcode));

		while($row = $stmt->fetch(PDO::FETCH_OBJ))
		{
			print_r($row);
		}

	}

	function report_exception_to_us()
	{
		//not implemented yet
	}
?>