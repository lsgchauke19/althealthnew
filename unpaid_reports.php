<?php include 'view/header.php';
		include 'database.php';


	
	$query = 'SELECT Client_ID, C_name, C_Surname, Invoice_Num
				FROM tblclientinfo c
					INNER JOIN tblinvoiceinfo i 	
					ON c.Client_ID = i.Client_ID';
		
		
					   
					   
$statement1 = $db->prepare($query);
$statement1->execute();
$invoices = $statement1->fetchAll();
$statement1->closeCursor();
		
?>
<!DOCTYPE html>
<html>
<head>
    <title>Alt Health Report</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   
			
			<div class="container">
			
				<div class="wrapper">
					<h1> System Reports</h1>
				</div>
				
				<div class="data">
				
					
						<input type="submit" name="submit" class="submit"/>
						
						<table border="1" class="table">
							<tr>
								<th>Client ID</th>
								<th>CLIENT</th>
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
				
                <td class="right"><?php echo $supplement['Nappi_Code']; ?></td>
                <td><form action="delete_product.php" method="post">
                    <input type="hidden" name="product_id"
                           value="<?php echo $supplement['Supplement_ID']; ?>">
                    <input type="hidden" name="category_id"
                           value="<?php echo $supplement['Supplement_ID']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
			
							
							
							
						</table>
						</form>
				</div>
			
			
			</div>
	
		





<?php include 'view/footer.php';?>