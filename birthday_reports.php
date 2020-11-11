<?php include 'view/header.php';
		include 'database.php';


	$query = 'SELECT
				Client_ID, C_name, C_Surname
				FROM tblclientinfo
				WHERE
				 substr(date(substr(Client_ID,1,6)),6,10) = substr(CURRENT_DATE,6,10)';
					
					
					
					   
$statement1 = $db->prepare($query);
$statement1->execute();
$birthdays = $statement1->fetchAll();
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
	<legend>Today's Birthdays</legend><br>
	
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
								<th>Client Name</th>
								<th>Client Surname</th>
								
							</tr>
							 <th>&nbsp;</th>
							
							<?php foreach ($birthdays as $birthday) : ?>
            <tr>
                <td><?php echo $birthday['Client_ID']; ?></td>
                <td><?php echo $birthday['C_name']; ?></td>
				<td><?php echo $birthday['C_Surname']; ?></td>
				
              
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