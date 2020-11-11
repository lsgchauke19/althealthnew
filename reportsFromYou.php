<?php include 'view/header.php';
	
		
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
				
					<form action="index_report.php" method="POST">
				
					<select name="standard">
						<option>Select</option>
						<option>1 PUC</option>
						<option>2 PUC</option>
					
					
					</select>
					
					<select name="courses">
					
					<option>Select</option>
						<option>1 PUC</option>
						<option>2 PUC</option>
					
					</select>
					
						<input type="submit" name="submit" class="submit"/>
						
						<table border="1" class="table">
							<tr>
								<th>Student Name</th>
								<th>Gender</th>
							</tr>
							
						</table>
						</form>
				</div>
			
			
			</div>
	
		





<?php include 'view/footer.php';?>