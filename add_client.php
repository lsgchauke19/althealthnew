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