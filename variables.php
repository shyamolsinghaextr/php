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
	
	$SHYAMOLSINGHA = 100;
	$SHYAMOL_SINGHA = 200;
	$Shyamol_Singha = 300;
	$Shyamol_Singha1 = 400;
	
	echo $SHYAMOLSINGHA.'<br>'.$SHYAMOL_SINGHA.'<br>'.$Shyamol_Singha.'<br>'.$Shyamol_Singha1.'<br>';
	
	$data1 = 100;
	$data2 = 10.5;
	$data3 = 'shishir singha';
	$data4 = true;
	$data5 = false;
	$data6 = array('shishir', 'amit', 'roni', 'somor');
	$data7 = NULL;
	
	echo gettype($data1).'<br>';
	echo gettype($data2).'<br>';
	echo gettype($data3).'<br>';
	echo gettype($data4).'<br>';
	echo gettype($data5).'<br>';
	echo gettype($data6).'<br>';
	echo gettype($data7).'<br>';
	
	
	$data10 = NULL;
	
	if(gettype($data10) == 'integer'){
		echo 'this is integer';
	}
	else if(gettype($data10) == 'double'){
		echo 'this is double';
	}
	else if(gettype($data10) == 'string'){
		echo 'this is string';
	}
	else if(gettype($data10) == 'boolean'){
		echo 'this is boolean';
	}
	else if(gettype($data10) == 'double'){
		echo 'this is double';
	}
	else if(gettype($data10) == 'array'){
		echo 'this is array';
	}
	else if(gettype($data10) == 'NULL'){
		echo 'this is NULL';
	}
	else {echo 'on variable';}
	
	
	$data = array('shishir', 'amit', 'roni', 'somor');
	
	echo $data[0];
	
	$class = array('somor', "shishir", 'amit', 'roni', 'prosenjit', 'shyamol');
		
	foreach($class as $value){
		echo 'my name is '.$value.'<br>';
	}
	
	?>


	<script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
