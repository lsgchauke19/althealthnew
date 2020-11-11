<?php require_once('database.php');
include 'view/header.php';




?>
<!DOCTYPE html>
<html>
<head>
    <title>Suppliers</title>
    
</head>
<!-- the body section -->
<body>

<main>
	<fieldset>
	<legend>Suppliers</legend><br>
	
	<!--Print Button-->
	
	<button onclick="myprint()"> Print</button>
					<script type="text/javascript">
							function myprint(){
								window.print();
							}
					</script><br>

<br>
	
<?php	
	$query = 'SELECT * FROM tblsupplierinfo
                       ORDER BY Supplier_ID';
$statement = $db->prepare($query);
$statement->execute();
$suppliers = $statement->fetchAll();
$statement->closeCursor();

?>
   
    <section>
        <!-- display a table of products -->
       
        <table>
            <tr>
                <th>Supplier ID</th>
                <th>Contact Person</th>
				<th>Supplier Telephone</th>
				<th>Supplier E-mail</th>
				<th>Bank</th>
				<th>Bank Code</th>
				<th>Supplier Bank Number</th>
				<th>Supplier Bank Type</th>
               
                <th>&nbsp;</th>
            </tr>

            <?php foreach ($suppliers as $supplier) : ?>
            <tr>
                <td><?php echo $supplier['Supplier_ID']; ?></td>
                <td><?php echo $supplier['Contact_Person']; ?></td>
				<td><?php echo $supplier['Supplier_Tel']; ?></td>
				<td><?php echo $supplier['Supplier_Email']; ?></td>
				<td><?php echo $supplier['Bank']; ?></td>
				<td><?php echo $supplier['Bank_Code']; ?></td>
				<td><?php echo $supplier['Supplier_Bank_Num']; ?></td>
                <td class="right"><?php echo $supplier['Supplier_Bank_Type']; ?></td>
                <td><form action="delete_product.php" method="post">
                    <input type="hidden" name="product_id"
                           value="<?php echo $product['productID']; ?>">
                    <input type="hidden" name="category_id"
                           value="<?php echo $product['categoryID']; ?>">
						   <input type="submit" value="Edit">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="add_product_form.php">Add Supplier</a></p>
             
    </section>
	</fieldset>
</main>

</body>
</html>
<?php include 'view/footer.php'; ?> 