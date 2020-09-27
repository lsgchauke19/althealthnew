<?php include 'header.php'; ?>
<main>
    <form action="." method="post" >
   
    <fieldset>
	
        <legend>Client Information</legend>

        <label>Name:</label>
        <input type="text" name="name" 
               value="<?php echo htmlspecialchars($name);?>">
        <?php echo $fields->getField('name')->getHTML(); ?><br>

        <label>Surname:</label>
        <input type="text" name="surname" 
               value="<?php echo htmlspecialchars($surname);?>">
        <?php echo $fields->getField('surname')->getHTML(); ?><br>
		
		<label>E-Mail:</label>
        <input type="text" name="email" 
               value="<?php echo htmlspecialchars($email);?>">
        <?php echo $fields->getField('email')->getHTML(); ?><br>

        <label>Address:</label>
        <input type="text" name="address" 
               value="<?php echo htmlspecialchars($address);?>">
        <?php echo $fields->getField('address')->getHTML(); ?><br>

        <label>City:</label>
        <input type="text" name="city" 
               value="<?php echo htmlspecialchars($city); ?>">
        <?php echo $fields->getField('city')->getHTML(); ?><br>

        <label>Province:</label>
        <input type="text" name="province" maxlength="2"
               value="<?php echo htmlspecialchars($province); ?>">
        <?php echo $fields->getField('province')->getHTML(); ?><br>

        <label>Postal Code:</label>
        <input type="text" name="postal" 
               value="<?php echo htmlspecialchars($postal); ?>">
        <?php echo $fields->getField('postal')->getHTML(); ?><br>

        <label>Phone Number:</label>
        <input type="text" name="phone" 
               value="<?php echo htmlspecialchars($phone); ?>">
        <?php echo $fields->getField('phone')->getHTML(); ?><br>
		
        <label>Birth Date:</label>
        <input type="text" name="birthdate" 
               value="<?php echo htmlspecialchars($birthdate); ?>"/>
        <?php echo $fields->getField('birthdate')->getHTML(); ?><br />
    </fieldset>
	
    <fieldset>
        <legend>Reference:</legend>

        <label>Reference Options:</label>
        <select name="media">
            <option value="">Select One:</option>
            <option value="website"
              <?php if ($ref=='website') { echo 'selected'; } ?>
            >MasterCard</option>
            <option value="v"
              <?php if ($ref=='v') { echo 'selected'; } ?>
            >Visa</option>
            <option value="a"
              <?php if ($ref=='a') { echo 'selected'; } ?>
            >American Express</option>
            <option value="d"
              <?php if ($ref=='d') { echo 'selected'; } ?>
            >Discover</option>
        </select>
        <?php echo $fields->getField('media')->getHTML(); ?><br>

        
    </fieldset>
	
    <fieldset>
        <legend>Submit Client Information</legend>

        <label>&nbsp;</label>
        <input type="submit" name="action" value="Add">
        <input type="submit" name="action" value="Reset" ><br>
    </fieldset>
    </form>
</main>
<?php include 'footer.php'; ?>        