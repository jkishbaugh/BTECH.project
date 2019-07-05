<?php
    require_once('../../private/initialize.php');
    $page = (int) $_GET["page"];
    if(!isset($page)){$page=1;}
    switch ($page){
        case 1:
            $title = "Welcome Page";
            break;
        case 2:
            $title = "Hobbies";
            break;
        case 3:
            $title = "About";
            break;
        case 4:
            $title = "Favorite Vacation";
            break;
        case 5:
            $title = " Redirect to IMDB";
            break;
        default:
            $title = "Welcome Page";
            break;
    }

    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Product Discount Calculator</title>
        <link rel="stylesheet" type="text/css" href="<?php echo SHARED_PATH."/styles.css";?>">
    </head>

    <body>
        <main>
          <?php      //Include header
                include(SHARED_PATH."/header.php");
            switch ($page){
                case 1:
                    echo  "<h1>Welcome Page</h1>
                                ";
                    break;
                case 2:
                    $title = "<h1>Hobbies</h1>
                                ";
                    break;
                case 3:
                    "<h1>About</h1>
                                ";
                    break;
                case 4:
                    "<h1>Favorite Vacation</h1>
                                ";
                    break;
                case 5:
                    header("Location: https://www.imdb.com/title/tt0491738/");
                    break;
                default:
                    $title = "Welcome Page";
                    break;
            }
            //Include Footer
            include(SHARED_PATH."/footer.php")
            ?>
        </main>
    </body>
</html>

