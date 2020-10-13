<?php include 'header.php'; ?>
<main>
    <h2>Success</h2>
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
<?php include 'footer.php'; ?>