<?php
    require_once('../controller/productinfo_controller.php');

    //set a user number we know doesn't exist
    $productId = -1;
    $productName = "";

    if (isset($_POST['product_id'])) {
        $productId = $_POST['product_id'];
        $productName = get_product_name($productId);
    }
?>
<html>
    <head>
        <title>SDC310 Lab Project - Angel Avila</title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <h2>Find a Product by Product ID</h2>
        <form method="POST">
            <h3>Product ID: <input type="text" name="product_id"/></h3>
            <input type="submit" value="Submit"/>
        </form>
        <h3>Product Found: <?php echo $productName;?></h3>
        <br>
        <a href="display_products.php">Show All Products</a>
    </body>
</html>