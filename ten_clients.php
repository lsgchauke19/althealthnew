<?php include 'view/header.php';
	  include 'database.php';


	
	$query = 'SELECT
				Client_ID ,C_name, C_Surname
					FROM
					tblclientinfo
					
						GROUP BY Client_ID
						ORDER BY Client_ID DESC 
						LIMIT 0,10';
		
		
					   
					   
$statement1 = $db->prepare($query);
$statement1->execute();
$clients = $statement1->fetchAll();
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
	<legend>Top Ten Clients</legend><br>
	
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
								<th>CLIENT Name</th>
								<th>Client Surname</th>
								<th>Frequent</th>
								
							</tr>
							 <th>&nbsp;</th>
							
							
							
							
							<?php foreach ($clients as $client) : ?>
            <tr>
                <td><?php echo $client['Client_ID']; ?></td>
                <td><?php echo $client['C_name']; ?></td>
				<td><?php echo $client['C_Surname']; ?></td>
				<td><?php echo $client['Invoice_Num']; ?></td>
				
				
                
            </tr>
            <?php endforeach; ?>
			
							
							
							
						</table>
					
				
			
			
			
			</fieldset>
			</main>
			
</body>
<?php include 'view/footer.php';?>