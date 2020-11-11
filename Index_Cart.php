<?php require_once('database.php');
	  include 'view/header.php';
		
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Items</title>
    
</head>
<!-- the body section -->
<body>

<main>
		<fieldset>
	<legend>Shopping Cart</legend><br>
	
	<!--Print Button-->
	<button onclick="myprint()"> Print</button>
					<script type="text/javascript">
							function myprint(){
								window.print();
							}
					</script><br>

<br>
	
	
	<?php 
$query = 'SELECT * FROM tblsupplements
                       ORDER BY Supplement_ID LIMIT 0, 10';
$statement = $db->prepare($query);
$statement->execute();
$supplements = $statement->fetchAll();
$statement->closeCursor();
?>
   
    <section>
        <!-- display a table of products -->
       
        <table>
            <tr>
                <th>Supplement ID</th>
                <th>Supplier ID</th>
				<th>Supplement_Description</th>
				<th>Costs Excl</th>
				<th>Costs Incl</th>
				<th>Min Levels</th>
				<th>Current Stock Levels</th>
				
               
                <th>&nbsp;</th>
            </tr>

            <?php foreach ($supplements as $supplement) : ?>
            <tr>
			
				
                <td><?php echo $supplement['Supplement_ID']; ?></td>
                <td><?php echo $supplement['Supplier_ID']; ?></td>
				<td><?php echo $supplement['Supplement_Description']; ?></td>
				<td><?php echo $supplement['Costs_Excl']; ?></td>
				<td><?php echo $supplement['Cost_Incl']; ?></td>
				<td><?php echo $supplement['Min_Levels']; ?></td>
		        <td class="right"><?php echo $supplement['Current_Stock_Levels']; ?></td>
                <td><form action="add_item_view.php" method="post">
                    <input type="hidden" name="product_id"
                           value="<?php echo $product['productID']; ?>">
                    <input type="hidden" name="category_id"
                           value="<?php echo $product['categoryID']; ?>">
                    <input type="submit" value="Add Item to Cart">
                </form></td>
				
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="add_product_form.php">Add Product</a></p>
             
    </section>
	</fieldset>
</main>

</body>
</html>
<?php include 'view/footer.php'; ?> 