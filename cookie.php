<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <title>cookie value</title>
</head>
<body>

	<?php
	
	setcookie('bhanu', 'bhanubil.com1', time() + (86400 * 30));
	
	$value = 'something from somewhere';
	setcookie("TestCookie", $value, time()+3600);
	
	if(isset($_COOKIE['bhanu'])) {
	 echo $_COOKIE['bhanu'];
	} else {
	 echo 'not set cookie';
	}
	
	if(isset($_COOKIE['TestCookie'])) {
	 echo $_COOKIE['TestCookie'];
	} else {
	 echo 'not set cookie';
	}
	

	

	?>

<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
