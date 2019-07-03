<?php

    define("PRIVATE_PATH", dirname(__FILE__));
    define("PROJECT_PATH", dirname(PRIVATE_PATH));
    define("SHARED_PATH",PROJECT_PATH."/Shared");
    define("PUBLIC_PATH",PROJECT_PATH."/public" );
    define("SANDBOX_PATH", PROJECT_PATH."/sandbox");
    define("CSS_PATH", SHARED_PATH."/css");

    require_once ('functions.php');

