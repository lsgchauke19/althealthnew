<?php include 'header.php'; ?>
<main>
    <h2>Successfully added</h2>
    <p>The following Client information has been successfully
       submitted.</p>
    <ul>
        
        <li>Name: <?php echo htmlspecialchars($name); ?></li>
        <li>Surname: <?php echo htmlspecialchars($surname); ?></li>
		<li>Email: <?php echo htmlspecialchars($email); ?></li>
        <li>Address: <?php echo htmlspecialchars($address); ?></li>
        <li>City: <?php echo htmlspecialchars($city); ?></li>
        <li>Province: <?php echo htmlspecialchars($province); ?></li>
        <li>Postal: <?php echo htmlspecialchars($postal); ?></li>
        <li>Phone: <?php echo htmlspecialchars($phone); ?></li>
        
    </ul>
</main>
<?php include 'footer.php'; ?>