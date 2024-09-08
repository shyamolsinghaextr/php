<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <title>session</title>
</head>
<body>

	<?php
	session_start();
	
	if(!isset($_SESSION["taka"])){
		$_SESSION["taka"] = 1000;
		echo '$_SESSION["taka"] = 1000<br>';
	}

	if(isset($_SESSION["taka"]) and $_SESSION["taka"] >= 10){
		$_SESSION["taka"] -= 10; 
	}
	
	echo $_SESSION["taka"];
	echo '<br><br>';
	
	?>

<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
