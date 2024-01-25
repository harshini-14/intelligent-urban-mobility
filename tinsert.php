<?php include('insert.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Traffic Analysis</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Traffic Intensity Details</h2>
  </div>
 <form method="post" action="tinsert.php">
  	<div class="input-group">
  		<label>Location</label>
  		<input type="text" name="location" >
  	</div>
  	<div class="input-group">
  		<label>Traffic Intensity</label>
  		<input type="text" name="traffic_intensity">
  	</div>
  	<div class="input-group"><center>
  		<button type="submit" class="btn" name="traffic_submit">Submit</button><br><br>
		<button type="submit" class="btn" name="traffic_submit">Check Intensity</button></center>
  	</div>
  	
  </form>
</body>
</html>