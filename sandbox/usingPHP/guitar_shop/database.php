<?php
//Create database connection
require_once ("../../../private/db_creds.php");

function createDbConnection(){
   $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
   if(!$connection){
       header("Location: /database_error.php");
       exit;
   }
   return $connection;
}

function closeDbConnection($connection){
    if(isset($connection)) {
        mysqli_close($connection);
        return;
    }
}

function getAllCategories($connection){
    $query = "SELECT * FROM categories;";
    $category_set = mysqli_query($connection, $query);
    return $category_set;
}

function findCategoryName($connection, $id){
    $query = "SELECT categoryName FROM categories WHERE categoryID = ".$id.";";
    $category_result = mysqli_query($connection, $query);
    $category = mysqli_fetch_assoc($category_result);
    $category_name = $category['categoryName'];
    return $category_name;
}

function getAllProducts($connection, $id){
    $query = "SELECT * FROM products WHERE categoryID = ".$id.";";
    $products = mysqli_query($connection, $query);
    return $products;
}


function insertNewCategory($name, $connection){
    $query = " INSERT INTO categories(categoryName)
            VALUES (";
    $query .= "'".$name ."');";
    $result = mysqli_query($connection, $query);

    if($result){
        return true;
    }else{
         echo mysqli_error($connection);
            closeDbConnection($connection);
            exit;

    }
}

function insertNewProduct($connection){

}