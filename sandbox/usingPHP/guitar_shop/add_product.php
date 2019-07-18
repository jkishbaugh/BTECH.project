<?php
// Get the product data
$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
$code = filter_input(INPUT_POST, 'code');
$name = filter_input(INPUT_POST, 'name');
$price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);

// Validate inputs
if ($category_id == null || $category_id == false ||
        $code == null || $name == null || $price == null || $price == false) {
    $error = "Invalid product data. Check all fields and try again.";
    include('error.php');
} else {
    require_once('database.php');

    // Add the product to the database  
    $db = createDbConnection();

    $result = insertNewProduct($db, $category_id,$code,$name,$price);

    // Display the Product List page
    if ($result){
        header("Location: index.php?id ".$category_id);
    }else{
        $error = mysqli_error($db);
        include ('database_error.php');
    }
}
?>