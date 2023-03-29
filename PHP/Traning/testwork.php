<!DOCTYPE html>
<html>
<head>
	<title>Clock</title>
	<style>
		body {
			background-color: black;
			color: white;
			font-size: 80px;
			text-align: center;
			margin-top: 200px;
			font-family: Arial;
		}
	</style>
</head>
<body>
	<?php
	date_default_timezone_set('Asia/Seoul');
	echo date('H:i:s');
	?>
</body>
</html>