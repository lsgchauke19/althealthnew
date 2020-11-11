<?php
require_once('model/database.php');
require 'view/register.php';



// Get client details
$queryClient = 'SELECT * FROM tblClientInfo
                  WHERE Client_Id = :Client_Id
                  ORDER BY Client_Id';
$statement = $db->prepare($queryClient);
$statement->bindValue(':Client_Id', $id);
$statement->bindValue(':C_name', $name);
$statement->bindValue(':C_surname', $surname);
$statement->bindValue(':Code', $code);
$statement->bindValue(':C_Tel_H', $hometelephone);
$statement->bindValue(':C_Tel_W', $worktelephone);
$statement->bindValue(':C_Tel_Cell', $mobile);
$statement->bindValue(':C_Email', $email);
$statement->execute();
$clients = $statement->fetchAll();
$statement->closeCursor();
?>

<!DOCTYPE html>
<html>

<!-- the body section -->
<body>

<main>
   
<section>
<!-- display a table of clients -->
       
<table>
	<tr>
    <th>ID Number</th>
    <th>Name</th>
	<th>Surname</th>
	<th>Address</th>
	<th>Postal Code</th>
	<th>Home Telephone</th>
	<th>Work Telephone</th>
	<th>Mobile</th>
	<th>E-mail</th>
    <th>&nbsp;</th>
    </tr>

<?php foreach ($clients as $client) : ?>
    <tr>
    <td><?php echo $client['Client_Id']; ?></td>
    <td><?php echo $client['C_name']; ?></td>
	<td><?php echo $client['C_surname']; ?></td>
	<td><?php echo $client['Address']; ?></td>
	<td><?php echo $client['Code']; ?></td>
	<td><?php echo $client['C_Tel_H']; ?></td>
	<td><?php echo $client['C_Tel_W']; ?></td>
	<td><?php echo $client['C_Tel_Cell']; ?></td>
	<td><?php echo $client['C_Email']; ?></td>
    <td><form action="delete_client.php" method="post">
        <input type="hidden" name="client_id"
               value="<?php echo $client['Client_Id']; ?>">
        <input type="hidden" name="Client_Id"
               value="<?php echo $client['Client_Id']; ?>">
        <input type="submit" value="Delete">
        </form></td>
    </tr>
<?php endforeach; ?>
</table>

<p><a href="add_client_form.php">Add client</a></p>
                
</section>
</main>

</body>
</html>
<?php include 'view/footer.php';?>