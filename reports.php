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
				
					<form action="unpaid_reports.php" method="POST">
				
						<h3>UnPaid Invoices</h3>
						<input type="submit" name="submit" class="submit"/>
					</form>
						
						<form action="birthday_reports.php" method="POST">
						<h3>Birthdays Today</h3>
						<input type="submit" name="submit" class="submit"/>
						
						</form>
						
						<form action="low_reports.php" method="POST">
						<h3>Low Stock Supplements</h3>
						<input type="submit" name="submit" class="submit"/>
						
						</form>
						
						<form action="ten_clients.php" method="POST">
						
						<h3>Top 10 Clients</h3>
						<input type="submit" name="submit" class="submit"/>
						
						</form>
						
						<form action="most_reports.php" method="POST">
						
						<h3>Most Purchases in a Month</h3>
						<input type="submit" name="submit" class="submit"/>
						</form>
						
						<form action="missing_reports.php" method="POST">
						<h3>Clients missing data</h3>
						<input type="submit" name="submit" class="submit"/>
						</form>
						
						
						
				</div>
			
			
			</div>
	
		





<?php include 'view/footer.php';?>