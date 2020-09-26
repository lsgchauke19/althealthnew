<!DOCTYPE html>
<html>
<head> 
	<title>Supplier Details</title>
	<link rel="stylesheet" type="text/css" href="main.css"/>
	

</head>
<body>
	
	<h1>ALT HEALTH CARE</>
		<h3>Supplier Details</h3>
			<form action="supplier_info.php" method="post">
		
		<fieldset>
			<legend>Supplier Information</legend>
				
				<label>Telephone:</label>
				<input type="text" name="telephone" value="" class="textbox"/>
				<br>
				<label>E-Mail:</label>
				<input type="text" name="email" value="" class="textbox"/>
				<br>
			
			
				<input type="submit" value="Submit" style="position:relative; top:20px; left: 19%;"/> 
				<br>
				<br>
				
				
		</fieldset>

		</form>


</body>
</html>


<?php include 'footer.php'; ?>