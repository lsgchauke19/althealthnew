<?php include 'header.php';?>
	<main>
		<form action="." method="post">
		<fieldset>
			<legend>Client Details</legend>
			
			<label>Name:</label>
			<input type="text" name="name" value="<?php htmlspecialchars($name);?>">
			<?php echo $fields->getField('name')->getHTML(); ?> <br>
			
			<label>Surname:</label>
			<input type="text" name="surname" value="<?php htmlspecialchars($surname);?>">
			<?php echo $fields->getField('surname')->getHTML(); ?><br>
			
			
		
		
		
		
		</fieldset>

</main>
<?php include 'footer.php';  ?>