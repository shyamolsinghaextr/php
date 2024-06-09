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
	
	$loop = 'run';
	
	if($loop == 'run'){
		
		$i = 1;
		while ($i <= 100) {
		   echo $i.'<br>';
		  $i++;
		}
	}
	else{ echo 'loop stop'; }
	
	?>


  </div>
  
	
	<script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
