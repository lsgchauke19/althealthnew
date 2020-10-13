<?php include 'header.php'; ?>
<main>
    <form action="." method="post" >
   
    <fieldset>
        <legend>Client Information</legend>
		
		<label>ID:</label>
        <input type="text" name="id" 
               value="<?php echo htmlspecialchars($id);?>">
        <?php echo $fields->getField('id')->getHTML(); ?><br>

        <label>Name:</label>
        <input type="text" name="name" 
               value="<?php echo htmlspecialchars($name);?>">
        <?php echo $fields->getField('name')->getHTML(); ?><br>

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
        <input type="text" name="worktelephone" 
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
		
		
    </fieldset>
	
	
    <fieldset>
        <legend>Reference Selection</legend>

        <label>Media Type:</label>
        <select name="select_type">
            <option value="">Select:</option>
           <option value="website"
              <?php if ($selectType=='website') { echo 'selected'; } ?>
            >Website</option>
            <option value="wordbymouth"
              <?php if ($selectType=='wordbymouth') { echo 'selected'; } ?>
            >Word By Mouth</option>
            <option value="friend"
              <?php if ($selectType=='friend') { echo 'selected'; } ?>
            >Friend</option>
            <option value="facebook"
              <?php if ($selectType=='facebook') { echo 'selected'; } ?>
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
        <legend>Add Client</legend>

        <label>&nbsp;</label>
        <input type="submit" name="action" value="Add">
        <input type="submit" name="action" value="Reset" ><br>
    </fieldset>
    </form>
</main>
<?php include 'footer.php'; ?>        