<?php include 'header.php';?>
<main>
	<h1>Add Client Details</h1><br>
	<form action="." method="post">
	<fieldset>
		<legend>Client</legend>
		
		
		<label>ID:</label>
		<input type="text" name="id" value="<?php echo htmlspecialchars($id);?>">
		<!--<?php echo $fields->getField('id')->getHTML();?>--><br>
		
		<label>Name:</label>
		<input type="text" name="name" value="<?php echo htmlspecialchars($name);?>">
		<?php echo $fields->getField('name')->getHTML();?><br>
			
		<label>Surname:</label>
        <input type="text" name="surname" 
               value="<?php echo htmlspecialchars($surname);?>">
        <?php echo $fields->getField('surname')->getHTML(); ?><br>

        <label>Address:</label>
        <input type="text" name="address" 
               value="<?php echo htmlspecialchars($address);?>">
        <?php echo $fields->getField('address')->getHTML(); ?><br>
		
		 <label>Postal Code:</label>
        <input type="text" name="code" 
               value="<?php echo htmlspecialchars($code); ?>">
        <?php echo $fields->getField('code')->getHTML(); ?><br>
		
		<label>Home Telephone:</label>
        <input type="text" name="hometelephone" 
               value="<?php echo htmlspecialchars($hometelephone); ?>">
        <?php echo $fields->getField('hometelephone')->getHTML(); ?><br>

        <label>Work Telephone:</label>
        <input type="text" name="worktelephone" maxlength="2"
               value="<?php echo htmlspecialchars($worktelephone); ?>">
        <?php echo $fields->getField('worktelephone')->getHTML(); ?><br>


        <label>Mobile:</label>
        <input type="text" name="mobile" 
               value="<?php echo htmlspecialchars($mobile); ?>">
        <?php echo $fields->getField('mobile')->getHTML(); ?><br>
		
        <label>E-Mail:</label>
        <input type="text" name="email" 
               value="<?php echo htmlspecialchars($email);?>">
        <?php echo $fields->getField('email')->getHTML(); ?><br>
		
		 <fieldset>
        <legend>References</legend>

        <label>Reference Type:</label>
        <select name="select_type">
            <option value="">Select Option:</option>
            <option value="website(m)"
              <?php if ($selectType=='website(m)') { echo 'selected'; } ?>
            >Website</option>
            <option value="wordbymouth(v)"
              <?php if ($selectType=='wordbymouth(v)') { echo 'selected'; } ?>
            >Word By Mouth</option>
            <option value="friend(a)"
              <?php if ($selectType=='friend') { echo 'selected'; } ?>
            >Friend</option>
            <option value="facebook(d)"
              <?php if ($selectType=='facebook(d)') { echo 'selected'; } ?>
            >Facebook</option>
			<option value="myself"
              <?php if ($selectType=='myself') { echo 'selected'; } ?>
            >Myself</option>
			<option value="other"
              <?php if ($selectType=='other') { echo 'selected'; } ?>
            >Other</option>
        </select>
        <?php echo $fields->getField('select_type')->getHTML(); ?><br>

	</fieldset>
	
	
	<fieldset>
        <legend>Submit App</legend>

        <label>&nbsp;</label>
        <input type="submit" name="action" value="Add">
        <input type="submit" name="action" value="Reset" ><br>
    </fieldset>

</main>
<?php include 'footer.php';?>