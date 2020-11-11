<?php include 'view/header.php';
		include 'database.php';


	
	$query = 'SELECT
				Client_ID, C_Tel_Home, C_Tel_Work, C_Tel_Cell, C_EMAIL
				FROM tblclientinfo 
				LIMIT 0,6';
				
				
					   
$statement1 = $db->prepare($query);
$statement1->execute();
$missing = $statement1->fetchAll();
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
	<legend>Clients with Missing Information</legend><br>
	
	<!--Print Button-->
	
	<button onclick="myprint()"> Print</button>
					<script type="text/javascript">
							function myprint(){
								window.print();
							}
					</script><br>
   
						
						<br><table border="1" class="table">
							<tr>
								<th>Client ID</th>
								<th>Te Home</th>
								<th>Tel Work</th>
								<th>Tel Cell</th>
								<th>E-Mail</th>
								
							</tr>
							 <th>&nbsp;</th>
							
							
							<?php foreach ($missing as $miss) : ?>
            <tr>
                <td><?php echo $miss['Client_ID']; ?></td>
                <td><?php echo $miss['C_Tel_Home']; ?></td>
				<td><?php echo $miss['C_Tel_Work']; ?></td>
				<td><?php echo $miss['C_Tel_Cell']; ?></td>
				<td><?php echo $miss['C_EMAIL']; ?></td>
				
               
            </tr>
            <?php endforeach; ?>
			
							
							
							
						</table>
						
		</fieldset>
	</main>
</body>
<?php include 'view/footer.php';?>