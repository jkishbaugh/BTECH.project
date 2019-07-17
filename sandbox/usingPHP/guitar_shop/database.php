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

