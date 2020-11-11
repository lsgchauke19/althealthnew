<?php include 'view/header.php'; 
	$id = trim(filter_input(INPUT_POST, 'id'));
	$name = trim(filter_input(INPUT_POST, 'name'));
    $surname = trim(filter_input(INPUT_POST, 'surname'));
    $address = trim(filter_input(INPUT_POST, 'address'));
	$code = filter_input(INPUT_POST, 'code');
    $hometelephone = trim(filter_input(INPUT_POST, 'hometelephone'));
    $worktelephone = filter_input(INPUT_POST, 'worktelephone');
    $mobile = filter_input(INPUT_POST, 'mobile');
	$email = trim(filter_input(INPUT_POST, 'email'));
    $selectType = filter_input(INPUT_POST, 'selectType');
		
?>
<main>
<h2>Success</h2><br>

<button onclick="myprint()"> Print</button>
					<script type="text/javascript">
							function myprint(){
								window.print();
							}
					</script><br>

<br>



<p>Client information submitted successfully.</p>
    
<ul>

<li>ID: <?php echo htmlspecialchars($id); ?></li>
<li>Name: <?php echo htmlspecialchars($name); ?></li>
<li>Surname: <?php echo htmlspecialchars($surname); ?></li>
<li>Address: <?php echo htmlspecialchars($address); ?></li>
<li>Postal Code: <?php echo htmlspecialchars($code); ?></li>
<li>Home Telephone <?php echo htmlspecialchars($hometelephone); ?></li>
<li>Work Telephone <?php echo htmlspecialchars($worktelephone); ?></li>
<li>Mobile <?php echo htmlspecialchars($mobile); ?></li>
<li>Email: <?php echo htmlspecialchars($email); ?></li>
<li>Reference Type: <?php echo htmlspecialchars($selectType); ?></li>
        
</ul>
</main>
<?php include 'view/footer.php'; ?>