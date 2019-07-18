<?php

    $category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
    $code = filter_input(INPUT_POST, 'code');
    $name = filter_input(INPUT_POST, 'name');
    $price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);
    $product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);


// Validate inputs
if ($category_id == null || $category_id == false ||
    $code == null || $name == null || $price == null || $price == false || $product_id == null || $product_id == false ) {
    $error = "Invalid product data. Check all fields and try again.";
    include('error.php');
} else{
    require_once ("database.php");
    $db = createDbConnection();
    $result = editProduct($db, $product_id, $category_id, $code, $name, $price);

    if($result){
        header("Location: index.php/?category_id={$category_id}");
        exit;
    }else{
        header("Location: database_error.php");
        exit;
    }


}
