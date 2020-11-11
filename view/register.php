<?php
// Get the client data
$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
$name = filter_input(INPUT_POST, 'name');
$surname = filter_input(INPUT_POST, 'surname');
$address = filter_input(INPUT_POST, 'address');
$code = filter_input(INPUT_POST, 'code');
$hometelephone = filter_input(INPUT_POST, 'hometelephone');
$worktelephone = filter_input(INPUT_POST, 'worktelephone');
$mobile = filter_input(INPUT_POST, 'mobile');
$email = filter_input(INPUT_POST, 'email');
$select_type = filter_input(INPUT_POST, 'select_type');

// Validate inputs
if ($id == null || $id == false ||
        $name == null || $surname == null || $address == null || $code == null || $hometelephone == null || $worktelephone == null || $mobile == null || $email == null) {
    $error = "Invalid client data. Check all fields and try again.";
   
} else {
    require_once('database.php');

    // Add the client to the database  
    $query = 'INSERT INTO tblclientinfo
                 (Client_ID, C_name, C_Surname, Address, Code, C_Tel_Home, C_Tel_Work, C_Tel_Cell, C_Email)
              VALUES
                 (:id, :name, :surname, :address, :code, :hometelephone, :worktelephone, :mobile, :email)';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':surname', $surname);
    $statement->bindValue(':address', $address);
	$statement->bindValue(':code', $code);
	$statement->bindValue(':hometelephone', $hometelephone);
	$statement->bindValue(':worktelephone', $worktelephone);
	$statement->bindValue(':mobile', $mobile);
	$statement->bindValue(':email', $email);
	//$statement->bindValue(':select_type', $select_type);
    $statement->execute();
    $statement->closeCursor();

    // Display the Client details
    include('success.php');
}
?>

<?php include 'view/header.php';
	require_once('database.php');
?>
		
<main>
    
<form action="success.php" method="post">
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
<select name="selectType">
<option value="">Select:</option>
<option value="website"
<?php if ($selectType=='website') { echo 'selected'; } ?>>Website</option>
            
<option value="wordbymouth"
<?php if ($selectType=='wordbymouth') { echo 'selected'; } ?>>Word By Mouth</option>
            
<option value="friend"
<?php if ($selectType=='friend') { echo 'selected'; } ?>>Friend</option>
            
<option value="facebook"
<?php if ($selectType=='facebook') { echo 'selected'; } ?>>Facebook</option>
			
<option value="myself"
<?php if ($selectType=='myself') { echo 'selected'; } ?>>Myself</option>
			
<option value="other"
<?php if ($selectType=='other') { echo 'selected'; } ?>>Other</option>
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

<?php
$query = 'SELECT * FROM tblclientinfo
                       ORDER BY Client_ID LIMIT 0, 5';
$statement = $db->prepare($query);
$statement->execute();
$clients = $statement->fetchAll();
$statement->closeCursor();
?>
<!DOCTYPE html>
<html>

<body>

<main>
   
    <section>
        <!-- display a table of products -->
       
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
				<th>Surname</th>
				<th>Address</th>
				<th>Postal Code</th>
				<th>Home Telephone</th>
				<th>Work Telephone</th>
				<th>Mobile</th>
				<th>E-Mail</th>
               
                <th>&nbsp;</th>
            </tr>

            <?php foreach ($clients as $client) : ?>
            <tr>
                <td><?php echo $client['Client_ID']; ?></td>
                <td><?php echo $client['C_name']; ?></td>
				<td><?php echo $client['C_Surname']; ?></td>
				<td><?php echo $client['Address']; ?></td>
				<td><?php echo $client['Code']; ?></td>
				<td><?php echo $client['C_Tel_Home']; ?></td>
				<td><?php echo $client['C_Tel_Work']; ?></td>
				<td><?php echo $client['C_Tel_Cell']; ?></td>
                <td class="right"><?php echo $client['C_Email']; ?></td>
                <td><form action="index.php" method="post">
                    <input type="hidden" name="Client_id"
                           value="<?php echo $client['Client_ID']; ?>">
                    
                    <input type="submit" value="Delete">
					<input type="submit" value="Edit">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>

</main>
<?php include 'view/footer.php'; ?>        