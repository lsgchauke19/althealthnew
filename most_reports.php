<?php include 'view/header.php';
		include 'database.php';


	
	$query = 'SELECT
				Invoice_Date, Invoice_Num
				FROM tblinvoiceinfo
				ORDER BY extract(month from Invoice_Date)
				LIMIT 0,8';
				
		
		
					   
					   
$statement1 = $db->prepare($query);
$statement1->execute();
$months = $statement1->fetchAll();
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
	<legend>Most Purchases in a Month</legend><br>
	
	<!--Print Button-->
	
	<button onclick="myprint()"> Print</button>
					<script type="text/javascript">
							function myprint(){
								window.print();
							}
					</script><br>
   
						
						<br><table border="1" class="table">
							<tr>
								<th>Invoice_Date</th>
								<th>Invoice Number</th>
							
								
							</tr>
							 <th>&nbsp;</th>
							
							<?php foreach ($months as $month) : ?>
            <tr>
                <td><?php echo $month['Invoice_Date']; ?></td>
                <td><?php echo $month['Invoice_Num']; ?></td>
				
                
            </tr>
            <?php endforeach; ?>
			
						</table>
						
	</fieldset>
	</main>
	
</body>
<?php include 'view/footer.php';?>