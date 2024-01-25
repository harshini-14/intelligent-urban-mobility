<?php include('insert.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Parking system</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Parking Availability</h2>
  </div>
 <form method="post" action="parking.php">
  	<div class="input-group">
  		<label>Location</label>
  		<input type="text" name="location" >
  	</div>
  	<div class="input-group">
  		<label>Availability</label>
  		<input type="text" name="availability">
  	</div>
  	<div class="input-group"><center>
  		<button type="submit" class="btn" name="parking_submit">Submit</button><br><br>
		<button type="submit" class="btn" name="parking_submit">Check Availability</button></center>
  	</div>
  	
  </form>
</body>
</html>