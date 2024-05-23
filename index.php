<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<title>bootstrap</title>
  </head>
  <body>
  
	<form method="POST">
	  <input type="text" name='pujarkhors'>
	  <button type="submit" name='submit'>Submit</button>
	</form>
	
	<?php
	
		if (isset($_POST['submit'])){
			$p = $_POST['pujarkhors'];
			
			if($p < 500 && $p > 300){
				echo "ami pujar jonno kisu kinbona";
			}
			else if($p >= 2000){
				echo 'ahig pen juta loitow';
			}
			else if($p >= 1500){
				echo 'ahig pen loitow';
			}
			else if($p >= 1000){
				echo "ahig ahan loitow";
			}
			else{
				echo "pujat najimga";
			}
		}
	?>


	<script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
