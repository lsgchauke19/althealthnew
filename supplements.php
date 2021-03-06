<?php require_once('database.php');
		include 'view/header.php';

?>
<!DOCTYPE html>
<html>

<!-- the body section -->
<body>

<main><br>	
	<fieldset>
	<legend>Supplements</legend><br>
	
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
                       ORDER BY Supplement_ID LIMIT 0,10' ;
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
				<th>Nappi Code</th>
               
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
				<td><?php echo $supplement['Current_Stock_Levels']; ?></td>
				<td><?php echo $supplement['Nappi_Code']; ?></td>
                <td class="right"><?php echo $supplement['Nappi_Code']; ?></td>
                <td><form action="supplements.php" method="post">
                    <input type="hidden" name="Supplement_ID"
                           value="<?php echo $supplement['Supplement_ID']; ?>">
                    
					
                    <input type="submit" value="Delete">
					<input type="submit" value="Edit">
					
                </form></td>
            </tr>
            <?php endforeach; ?>
			
			
        </table>
		
			
				
        <p><a href="add_product_form.php">Add Supplement</a></p>
             
    </section>
	</fieldset>
</main>

</body>
</html>
<?php include 'view/footer.php'; ?> 