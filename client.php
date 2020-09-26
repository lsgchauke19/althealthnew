<?php

	$client_id = filter_input(INPUT_POST, 'client_id');
	$telephone = filter_input(INPUT_POST, 'telephone');
	$email = filter_input(INPUT_POST, 'email');
	$reference_id = filter_input(INPUT_POST, 'reference_id');




?>
<!DOCTYPE html>
	<html>
	<head>
		<title>Client Details</title>
	</head>
	
	<body>
		<main>
			<h1>Client Details</h1>
			
			<label>Client Information</label>
			<span><?php echo htmlspecialchars($client_id);?>
	
	
	
	
	
	
		</main>
	</body>
</html>