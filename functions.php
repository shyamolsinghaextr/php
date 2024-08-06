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
	
	function xyz(int $x, int $y):int {
		$z = $x + $y;
		return $z;
	}
	
	function xyz1($x, $z, $y = 10) {
		$z = $x + $y + $z;
		echo $z;
	}
	

	function sum($y, int ...$x):int {
		//$x = array(41,41,54,74);
		$n = 0;
		$len = count($x);
		for($i = 0; $i < $len; $i++) {
			$n += $x[$i];
		  }
		return $n+$y;  
	}
	
	echo sum(2000,40,12,45,75,78,45,12,42,10);
	
  ?>
	<script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
