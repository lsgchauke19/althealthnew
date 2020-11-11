<?php include 'view/header.php';
		include 'database.php';


	
	$query = 'SELECT Client_ID, C_name, C_Surname
				FROM tblclientinfo
				
						
					 LIMIT 0,5';
		
		
					   
					   
$statement1 = $db->prepare($query);
$statement1->execute();
$invoices = $statement1->fetchAll();
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
	<legend>Unpaid Invoices</legend><br>
	
	<!--Print Button-->
	
	<button onclick="myprint()"> Print</button>
					<script type="text/javascript">
							function myprint(){
								window.print();
							}
					</script><br>
<br>
   			</div>
				
				<div class="data">
		
						<table border="1" class="table">
							<tr>
								<th>Client ID</th>
								<th>Client Name</th>
								<th>Client Surname</th>
								<th>Invoice Number</th>
								<th>Invoice Date</th>
								
							</tr>
							 <th>&nbsp;</th>
							
							
							
							
							<?php foreach ($invoices as $invoice) : ?>
            <tr>
                <td><?php echo $invoice['Client_ID']; ?></td>
                <td><?php echo $invoice['C_name']; ?></td>
				<td><?php echo $invoice['C_Surname']; ?></td>
				<td><?php echo $invoice['Invoice_Num']; ?></td>
				<td><?php echo $invoice['Invoice_Date']; ?></td>
                
            </tr>
            <?php endforeach; ?>
			
							
							
							
						</table>
						</form>
				</div>
			
			
			</div>
			</fieldset>
			</main>
	
		





<?php include 'view/footer.php';?>