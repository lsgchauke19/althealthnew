<?php include 'view/header.php';
		include 'database.php';


	$query = 'SELECT 
				Supplement_ID, Supplier_ID, Supplement_Description, Min_Levels, Current_Stock_Levels
				FROM tblsupplements
				WHERE Current_Stock_Levels < Min_Levels
				
				ORDER BY Supplier_ID LIMIT 0,25';
					
					   
$statement1 = $db->prepare($query);
$statement1->execute();
$supplements = $statement1->fetchAll();
$statement1->closeCursor();
		
?>
<!DOCTYPE html>
<html>
<head>
    <title>Alt Health Report</title>
    
</head>
<body>
	<main>
		<fieldset>
	<legend>Minimum Level Supplements</legend><br>
	
	<!--Print Button-->
	
	<button onclick="myprint()"> Print</button>
					<script type="text/javascript">
							function myprint(){
								window.print();
							}
					</script><br>
   
			
						
						<br><table border="1" class="table">
							<tr>
								<th>Supplemet ID</th>
								<th>Supplier ID</th>
								<th>Supplement Description</th>
								<th>Min Levels</th>
								<th>Current Stock Levels</th>
								
								
							</tr>
							 <th>&nbsp;</th>
							
							<?php foreach ($supplements as $supplement) : ?>
            <tr>
                <td><?php echo $supplement['Supplement_ID']; ?></td>
                <td><?php echo $supplement['Supplier_ID']; ?></td>
				<td><?php echo $supplement['Supplement_Description']; ?></td>
				<td><?php echo $supplement['Min_Levels']; ?></td>
				<td><?php echo $supplement['Current_Stock_Levels']; ?></td>
				
               
            </tr>
            <?php endforeach; ?>
			
							
							
							
						</table>
						</form>
				</div>
			
			
			</div>
	
		

		</fieldset>
	</main>
</body>

<?php include 'view/footer.php';?>