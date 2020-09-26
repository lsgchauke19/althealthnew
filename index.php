
<!DOCTYPE html>
<html>
<head> 
	<title>Client Details</title>
	<link rel="stylesheet" type="text/css" href="main.css"/>
	

</head>
<body>
	
	<h1>ALT HEALTH CARE</>
		<h3>Client Details</h3>
			<form action="client_details.php" method="post">
		
		<fieldset>
			<legend>Client Information</legend>
				<label>Client ID:</label>
				<input type="text" name="client_id" value="" class="textbox"/>
				<br>
				<label>Telephone:</label>
				<input type="text" name="telephone" value="" class="textbox"/>
				<br>
				<label>E-Mail:</label>
				<input type="text" name="email" value="" class="textbox"/>
				<br>
				
				<p>Reference ID:</p><select name="reference">
                <option value="email">Reference ID</option>
                </select>
				
				
				
				<br>
				<input type="submit" value="Submit" style="position:relative; top:20px; left: 19%;"/> 
				<br>
				<br>
				
				
		</fieldset>

		</form>


</body>
</html>


<?php include 'footer.php'; ?>