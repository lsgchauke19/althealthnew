<?php include 'view/header.php'; ?>
<main>
    <h2>Success</h2>
    <p>Client details are added successfully</p>
    <ul>
		<li>ID: <?php echo htmlspecialchars($id); ?></li>
        <li>Name: <?php echo htmlspecialchars($name); ?></li>
        <li>surname: <?php echo htmlspecialchars($surname); ?></li>
        <li>Address: <?php echo htmlspecialchars($address); ?></li>
		<li>Code: <?php echo htmlspecialchars($code); ?></li>
        <li>Home Telephone: <?php echo htmlspecialchars($hometelephone); ?></li>
        <li>Work Telephone: <?php echo htmlspecialchars($worktelephone); ?></li>
        <li>Mobile: <?php echo htmlspecialchars($mobile); ?></li>
		<li>Email: <?php echo htmlspecialchars($email); ?></li>
        <li>Reference Selection: <?php echo htmlspecialchars($selectType); ?></li>
        
    </ul>
</main>
<?php include 'view/footer.php'; ?>