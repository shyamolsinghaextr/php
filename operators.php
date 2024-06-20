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
	
		$taka = 30;
		$amit = 10;
		$shishir = 10;
		$somor = 10;
		$prosenjit =10;
		$roni = 10;
		
		$total = $amit + $shishir + $somor + $prosenjit + $roni;
		echo $total.'<br>';
		
		$baki_taka = $total - $taka;
		echo  $baki_taka;
		
	?>


	<script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
