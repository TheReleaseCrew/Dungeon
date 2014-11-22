<!--
	@author: 
	@responsible: -
	@version: 0.1.1
-->
<?php
	session_start();
	require_once 'functions/clogin.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style/backbone.css">
		<link rel="stylesheet" type="text/css" href="style/forms.css">
	</head>
	<body>
		<div id="page">
			<div id="header">

			</div>
			<div id="dbody">
				<div id="dbody_left">

				</div>
				<div id="dbody_middle">
				<?php
					if(isset($_SESSION['login']['logged']))
					{
						echo "set";
					}

					try_log("kev@gailer.net","123");
				?>
				</div>
				<div id="dbody_right">

				</div>
			</div>
		</div>
	</body>
</html>