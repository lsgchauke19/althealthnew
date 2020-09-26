<!DOCTYPE html>
<html>
<head> 
	<title>Supplement Details</title>
	<link rel="stylesheet" type="text/css" href="main.css"/>
	

</head>
<body>
	
	<h1>ALT HEALTH CARE</>
		<h3>Supplement Details</h3>
			<form action="supplements_display.php" method="post">
		
		<fieldset>
			<legend>Supplement Information</legend>
				
				<label>Supplement ID:</label>
				<input type="text" name="supplier_id" value="" class="textbox"/>
				<br>
				<label>Cost:</label>
				<input type="text" name="cost" value="" class="textbox"/>
				<br>
			
			
				<input type="submit" value="Submit" style="position:relative; top:20px; left: 19%;"/> 
				<br>
				<br>
				
				
		</fieldset>

		</form>


</body>
</html>


<?php include 'footer.php'; ?>