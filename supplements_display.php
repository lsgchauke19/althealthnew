<?php

	$supplier_id = filter_input(INPUT_POST, 'supplier_id');
	$cost = filter_input(INPUT_POST, 'cost');
	
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
			
					<label>Supplier ID: </label>
					<span><?php echo htmlspecialchars($supplier_id);?></span><br>
					
					<label>cost: </label>
					<span><?php echo htmlspecialchars($cost);?></span><br>
					

		</fieldset>



</main>

</html>
<?php include 'footer.php';?>