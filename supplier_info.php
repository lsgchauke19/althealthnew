<?php

	$telephone = filter_input(INPUT_POST, 'telephone');
	$email = filter_input(INPUT_POST, 'email',FILTER_VALIDATE_EMAIL);
	
?>

<!DOCTYPE html>
	<html>
		<head>
			<title>Supplier Details</title>
				<link rel="stylesheet" type="text/css" href="main.css" />
		</head>
<main>
	<h1>Supplier Details</h1>
	<form action="." method="post">
		<fieldset>
			<legend>Supplier Information</legend>
			
					<label>Telephone: </label>
					<span><?php echo htmlspecialchars($telephone);?></span><br>
					
					<label>E-mail: </label>
					<span><?php echo htmlspecialchars($email);?></span><br>
					

		</fieldset>



</main>

</html>
<?php include 'footer.php';?>