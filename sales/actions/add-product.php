<?php
include "../classes/product.php";

#COLLECT THE FORM DATA

$product_name = $_POST['product_name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];


# CREATE AN OBJECT
$product = new Product;

#CALL THE METHOD
$product->createProduct($product_name,$price,$quantity);

?>