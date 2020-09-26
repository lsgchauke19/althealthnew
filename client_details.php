<?php

	$client_id = filter_input(INPUT_POST, 'client_id');
	$telephone = filter_input(INPUT_POST, 'telephone');
	$email = filter_input(INPUT_POST, 'email',FILTER_VALIDATE_EMAIL);
	$reference_id = filter_input(INPUT_POST, 'reference_id');

?>

<!DOCTYPE html>
	<html>
		<head>
			<title>Client Details</title>
				<link rel="stylesheet" type="text/css" href="main.css" />
		</head>
<main>
	<h1>Client Details</h1>
	<form action="." method="post">
		<fieldset>
			<legend>Client Information</legend>
			
					<label>Client ID: </label>
					<span><?php echo htmlspecialchars($client_id);?></span><br>
					
					<label>Telephone: </label>
					<span><?php echo htmlspecialchars($telephone);?></span><br>
					
					<label>E-mail: </label>
					<span><?php echo htmlspecialchars($email);?></span><br>
					
					<label>Reference ID: </label>
					<span><?php echo htmlspecialchars($reference_id);?></span><br>

		</fieldset>



</main>

</html>
<?php include 'footer.php';?>