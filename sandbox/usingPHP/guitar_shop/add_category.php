<?php
    require_once ("database.php");
    require_once("../../../private/functions.php");

    $db = createDbConnection();
    if(isPostRequest()){

        $newCategoryName = $_POST['category_name'] ?? '';
        $result = insertNewCategory($newCategoryName, $db);
        header("Location: category_list.php");


    }else{
        header("Location: category_list.php");

    }