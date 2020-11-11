<?php include 'view/header.php';
require_once('database.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
   
</head>
<body>
    
    <main>
		<fieldset>
	<legend>Add Item</legend><br>
        
        <form action="." method="post" >
            <input type="hidden" name="action" value="add">

            <label>Supplement:</label>
            <select name="productkey">
            <?php foreach($supplements as $key => $supplement) :
                $cost = number_format($product['cost'], 2);
                $name = $product['Supplement_Description'];
                $item = $name . ' ($' . $cost . ')';
            ?>
                <option value="<?php echo $key; ?>">
                    <?php echo $item; ?>
                </option>
            <?php endforeach; ?>
            </select><br>

            <label>Quantity:</label>
            <select name="itemqty">
            <?php for($i = 1; $i <= 10; $i++) : ?>
                <option value="<?php echo $i; ?>">
                    <?php echo $i; ?>
                </option>
            <?php endfor; ?>
            </select><br>

            <label>&nbsp;</label>
            <input type="submit" value="Add Item">
        </form>
        <p><a href="Index_Cart.php">View Cart</a></p>
		</fieldset>
    </main>
</body>
</html>
<?php include 'view/footer.php'; ?> 