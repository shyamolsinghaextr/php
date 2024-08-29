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

	date_default_timezone_set("Asia/Dhaka");
	
	echo "The time is " . date("Y-m-d h:i:sa");
	echo '<br>';
	
	$d=mktime(1, 4, 54, 8, 12, 2010);
	echo "Created date is " . date("Y-m-d h:i:sa", $d);
	echo '<br>';
	
	$d=strtotime("10:30pm April 15 2014");
	echo "Created date is " . date("Y-m-d h:i:sa", $d);
	echo '<br>';
	
	$d=strtotime("tomorrow");
	echo date("Y-m-d h:i:sa", $d) . "<br>";
	echo '<br>';
	
	$startdate = strtotime("today");
	$enddate = strtotime("+8 days", $startdate);
	echo date("Y-m-d h:i:sa", $startdate);
	echo '<br>';
	echo date("Y-m-d h:i:sa", $enddate);
?> 
   
  
  
	<script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
