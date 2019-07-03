<?php
    require_once('../../private/initialize.php');
    set_include_path($_SERVER[‘DOCUMENT_ROOT’]);
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

            //Include header
            include(SHARED_PATH."/header.php");
        switch ($page){
            case 1:
                echo  "<h1>Welcome Page</h1>
                            ";
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
        //Include Footer
        include(SHARED_PATH."/footer.php")
        ?>


