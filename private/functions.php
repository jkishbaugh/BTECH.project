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


function insertGrave($connection, $category_id, $product_code, $product_name, $price)
{
    $query = "INSERT INTO";
    $result = mysqli_query($connection, $query);

    return $result;

}

function hasHeaderInjection($str)
{
    return preg_match("/[\r\n]/", $str);
}

function getAllGraves($connection)
{
    $query = "SELECT firstName, lastName, middleName, birthDate, PhotoName FROM graves;";
    $result = mysqli_query($connection, $query);

    return $result;
}

?>