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
	
		$i = 100;
		while ($i <= 10) {
		   echo 'This is While Loop <br>';
		   $i++;
		}	
	
		$i = 100;
		do{
		  echo 'This is Do While Loop <br>';
		  $i++;
		} while ($i <= 10);
		
		
		for ($i = 5; $i <= 10; $i++) {
		  echo "The number is: $i <br>";
		}
		
		$somor = array("somor singha", "bhanubil", "01725478");
		
		foreach ($somor as $x) {
		  echo "$x <br>";
		}
	?>


	<script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
