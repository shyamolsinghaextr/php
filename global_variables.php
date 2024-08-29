<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<title>bootstrap</title>
  </head>
  <body>
  
  <?php 
	
	echo $_SERVER['REQUEST_URI'];
	echo '<br>';
    echo $_SERVER['HTTP_USER_AGENT'];
	echo "<br>";
    echo $_SERVER['PHP_SELF'];
	echo "<br>";
	
	echo $_SERVER['SERVER_NAME'];
	echo "<br>";
	
	echo $_SERVER['SERVER_ADDR'];
	echo "<br>";
	
	echo $_SERVER['SERVER_PORT'];
	echo "<br>";
	
	echo $_SERVER['SERVER_PROTOCOL'];
	echo "<br>";
	
	echo $_SERVER['REQUEST_METHOD'];
	echo "<br>";
	
	
	echo $_SERVER['SCRIPT_NAME'];
	echo "<br>";
	
	echo $_SERVER['QUERY_STRING'];
	echo "<br>";
	
	
	echo $_SERVER['REMOTE_ADDR'];
	echo "<br>";
	
	echo $_SERVER['REMOTE_PORT'];
	echo "<br>";
	echo $_SERVER['SCRIPT_FILENAME'];
	echo "<br>";
	
	echo $_SERVER['SERVER_ADMIN'];
	echo "<br>";
	
	echo $_SERVER['SERVER_SOFTWARE'];
	echo "<br>";
	
	echo $_SERVER['REQUEST_TIME'];
	echo "<br>";
	
	echo $_SERVER['REQUEST_TIME_FLOAT'];
	//echo $_SERVER['FCGI_ROLE'];
	
	

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['fname']);
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}

	
  ?>
	<script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
