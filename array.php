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
	
	$data = array(
	'shi'=> array(
					'name'=>'shishir',
					'last'=>'singha',
					'phone'=>'014578454455'
				),
	'am'=>array(
					'name'=>'amit',
					'last'=>'singha',
					'phone'=>'014578454455'
				),
	'ro'=>array(
					'name'=>'roni',
					'last'=>'singha',
					'phone'=>'014578454455'
				), 
	'so'=>array(
					'name'=>'somor',
					'last'=>'singha',
					'phone'=>'014578454455'
				),
	);
	
	foreach ($data as $key => $value) {
		echo 'my name is ' . $value['name'] . '<br>';
	}
	
	
	$data1 = array(
	array(
					'name'=>'shishir',
					'last'=>'singha',
					'phone'=>'014578454455'
				),
	array(
					'name'=>'amit',
					'last'=>'singha',
					'phone'=>'014578454455'
				),
	array(
					'name'=>'roni',
					'last'=>'singha',
					'phone'=>'014578454455'
				), 
	array(
					'name'=>'somor',
					'last'=>'singha',
					'phone'=>'014578454455'
				),
	);
	
	foreach ($data as $value) {
		echo 'my name is ' . $value['name'] . '<br>';
	}
	
	
	$class = array('somor', "shishir", 'amit', 'roni', 'prosenjit', 'shyamol');
	
	foreach ($class as $value) {
		echo 'my name is ' . $value. '<br>';
	}
	
	?>


	<script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
