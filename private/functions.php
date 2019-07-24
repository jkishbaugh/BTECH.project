<?php
require_once("db_creds.php");

function createDbConnection()
{
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    if (!$connection) {
        header("Location: /database_error.php");
        exit;
    }
    return $connection;
}

function closeDbConnection($connection)
{
    if (isset($connection)) {
        mysqli_close($connection);
        return;
    }
}


function url_for($script_path)
{

    if ($script_path[0] != '/') {
        $script_path = "/" . $script_path;
    }
    return WWW_ROOT . $script_path;
}

function u($string = "")
{
    return urlencode($string);
}

function raw_u($string = "")
{
    return rawurlencode($string);
}

function h($string = "")
{
    return htmlspecialchars($string);
}

function getPage()
{
    $page = '';
    if (isset($_GET["page"])) {
        $page = ($_GET["page"]);
    }
    return $page;
}

function getTitle($int)
{
    if (!isset($int)) {
        $int = 1;
    }
    switch ($int) {
        case 1:
            $title = "Welcome Page";
            return $title;
        case 2:
            $title = "Hobbies";
            return $title;
        case 3:
            $title = "About";
            return $title;
        case 4:
            $title = "Favorite Vacation";
            return $title;
        case 5:
            $title = " Redirect to IMDB";
            return $title;
            break;
        default:
            $title = "PHP exercises";
            return $title;
    }
}

function isPostRequest()
{
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}


function hasHeaderInjection($str)
{
    return preg_match("/[\r\n]/", $str);
}

function getAllGraves($connection){
    $query = "SELECT * FROM graves LIMIT 6;";
    $result_set =  mysqli_query($connection, $query);

        return $result_set;


}

function insertNewGraveRecord($connection, $firstName, $lastName, $birthdate, $veteranStatus, $famous, $photoName){
    $query = "Insert Into graves('firstName', 'lastName', 'birthDate', 'veteranStatus', 'famous', 'photoName') ";
    $query .= "Values('{$firstName}', '{$lastName}', '{$birthdate}', {$veteranStatus}, '{$famous}', '{$photoName}');";
    $result = mysqli_query($connection, $query);

    return $result;

}

function findAncestor($connection, $nameString){

    $nameArray = explode(" ", $nameString);
    if(count($nameArray)> 0){
        $query="";
        if(count($nameArray)==1){
            $name= $nameArray[0];
            $query = "SELECT * FROM graves WHERE 'firstName' LIKE '{$name}' OR 'lastName' LIKE '{$name}';";
        }else{
            $firstName= $nameArray[0];
            $lastName = $nameArray[1];
            $query = "SELECT * FROM graves WHERE 'firstName' LIKE '{$firstName}' OR 'lastName' LIKE '{$lastName}' OR 'firstName' LIKE '{$lastName}' OR 'lastName' LIKE '{$firstName}';";
        }
        $result = mysqli_query($connection, $query);
        return $result;
    }else{
        return;
    }

}

function uploadImage(){
    $target_dir = "../img/uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    if(isPostRequest()) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

?>