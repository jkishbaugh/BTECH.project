<?php
require_once('database.php');

// Get IDs
$product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);

// Delete the product from the database
$db = createDbConnection();
$result = deleteProduct($db, $product_id);


// Display the Product List page
if($result){
    header("Location: index.php/?".$category_id);
}else{
    
    header("Location: database_error.php");
}
