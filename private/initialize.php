<?php

    define("PRIVATE_PATH", dirname(__FILE__));
    define("PROJECT_PATH", dirname(PRIVATE_PATH));
    define("SHARED_PATH",PROJECT_PATH."/Shared");
    define("PUBLIC_PATH",PRIVATE_PATH."../public" );
    define("SANDBOX_PATH", PROJECT_PATH."/sandbox");
    define("CSS_PATH", SHARED_PATH."/css");

    $public_end = strpos($_SERVER['SCRIPT_NAME'],'/public')+7;
    $doc_root = substr($_SERVER['SCRIPT_NAME'],0,$public_end);
    define("WWW_ROOT", $doc_root);


    require_once ('functions.php');

