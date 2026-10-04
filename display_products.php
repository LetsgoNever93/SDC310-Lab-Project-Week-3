<?php
    require_once('../controller/productinfo_controller.php');
    $product_arr = get_products();
?>

<html>
    <head>
        <title>SDC310 Lab Project - Angel Avila</title>
    </head>
    <body>
        <h2>Current Products:</h2>
        <table>
            <tr style="font-size:large;">
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Product Description</th>
                <th>Product Cost</th>
                <th>Quantity in the Cart</th>
            </tr>

            <?php foreach($product_arr as $product):;?>
                <tr>
                    <td><?php echo $product["ProductId"];?></td>
                    <td><?php echo $product["ProductName"];?></td>
                    <td><?php echo $product["ProductDescription"];?></td>
                    <td><?php echo $product["ProductCost"];?></td>
                    <td><?php echo $product["Quantity"];?></td>
                </tr>
            <?php endforeach;?>
        </table>
        <a href="find_product.php">Find a Product</a>
    </body>
</html>