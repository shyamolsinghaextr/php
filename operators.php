<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<title>bootstrap</title>
  </head>
  <body>
  
  <div class= 'container mt-5'>
	  <form method = 'POST' action= ''>
		<div class="form-check">
		  <input class="form-check-input" type="checkbox" name="Amit" id="Amit">
		  <label class="form-check-label" for="Amit">
			Amit Singha
		  </label>
		</div>

		<div class="form-check">
		  <input class="form-check-input" type="checkbox" name="Roni" id="Roni">
		  <label class="form-check-label" for="Roni">
			Roni Singha
		  </label>
		</div> 

		<div class="form-check">
		  <input class="form-check-input" type="checkbox" name="Somor" id="Somor">
		  <label class="form-check-label" for="Somor">
			Somor Singha
		  </label>
		</div> 

		<div class="form-check">
		  <input class="form-check-input" type="checkbox" name="Shishir" id="Shishir">
		  <label class="form-check-label" for="Shishir">
			Shishir Singha
		  </label>
		</div> 

		<div class="form-check">
		  <input class="form-check-input" type="checkbox" name="Prosen" id="Prosen">
		  <label class="form-check-label" for="Prosen">
			Prosen Singha
		  </label>
		</div> 
		<input type = 'submit' name='submit' value='Submit'> 
	  </form>
  </div>
  
  <?php
  
  $time_start = microtime(true);
  
  if(isset($_POST['submit'])){
	  
	  $absent = [];
	  $present = [];
	  
	  isset($_POST['Amit']) ? $present['Amit'] = 'Amit Singha' : $absent['Amit'] = 'Amit Singha';
	  isset($_POST['Roni']) ? $present['Roni'] = 'Roni Singha' : $absent['Roni'] = 'Roni Singha';
	  isset($_POST['Somor']) ? $present['Somor'] = 'Somor Singha' : $absent['Somor'] = 'Somor Singha';
	  isset($_POST['Shishir']) ? $present['Shishir'] = 'Shishir Singha' : $absent['Shishir'] = 'Shishir Singha';
	  isset($_POST['Prosen']) ? $present['Prosen'] = 'Prosen Singha' : $absent['Prosen'] = 'Prosen Singha';
	  
	  /*
	  if(isset($_POST['Amit'])){$present['Amit'] = 'Amit Singha';}
	  else{$absent['Amit'] = 'Amit Singha';}
	  if(isset($_POST['Roni'])){$present['Roni'] = 'Roni Singha';}
	  else{$absent['Roni'] = 'Roni Singha';}
	  if(isset($_POST['Somor'])){$present['Somor'] = 'Somor Singha';}
	  else{$absent['Somor'] = 'Somor Singha';}
	  if(isset($_POST['Shishir'])){$present['Shishir'] = 'Shishir Singha';}
	  else{$absent['Shishir'] = 'Shishir Singha';}
	  if(isset($_POST['Prosen'])){$present['Prosen'] = 'Prosen Singha';}
	  else{$absent['Prosen'] = 'Prosen Singha';}
	  */
	  
	  if(count($present) > 0){
		  echo "<h2>mot upostit ".count($present)." jon </h2>";
		  foreach ($present as $p){
			  echo '<h3>'.$p.'</h3>';
		  }
	  }
	  else{echo '<h2>ak jono upostit nai</h2>';}
	  
	  if(count($absent) > 0){
		  echo "<h2>mot onupostit ".count($absent)." jon </h2>";
		  foreach ($absent as $a){
			  echo '<h3>'.$a.'</h3>';
		  }
	  }
	  else{echo '<h2>ak jono onupostit nai</h2>';}
  }
	$time_end = microtime(true);
	$time = $time_end - $time_start;
	echo "script Run Time is $time seconds";
  ?>
  
	<script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
