<?php

    function url_for($script_path){

        if($script_path[0]!= '/'){
            $script_path = "/".$script_path;
        }
        return WWW_ROOT.$script_path;
    }

    function u($string=""){
        return urlencode($string);
    }

    function raw_u($string=""){
        return rawurlencode($string);
    }

    function h($string=""){
        return htmlspecialchars($string);
    }

    function getPage(){
        $page = '';
        if(isset( $_GET["page"])){
            $page = ($_GET["page"]);
        }
        return $page;
    }

    function getTitle($int){
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

    function isPostRequest(){
         return $_SERVER['REQUEST_METHOD'] == 'POST';
    }
?>