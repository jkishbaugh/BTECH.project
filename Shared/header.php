<?php

$title = getTitle(getPage());
$favicon = PROJECT_PATH.'/img/pencil.ico?';
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title;?></title>

    <link rel="shortcut icon" href="<?php echo url_for('img/pencil.ico')?>">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for("Shared/css/styles.css");?>">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for("Shared/css/normalize.css");?>">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for("Shared/css/w3.css");?>">
</head>
<body>
<header>
    <div class="navbar">
        <nav>
            <ul>
                <li><a href="<?php echo url_for('public/index.html'); ?>">Home</a></li>
                <li><a href="<?php echo url_for('public/about.html'); ?>">About</a></li>
                <li><a href="<?php echo url_for('public/faq.html'); ?>">FAQ</a></li>
                <li><a href="<?php echo url_for('public/contact.php'); ?>">Contact</a></li>
                <li><a href="<?php echo url_for('public/blog.html'); ?>">Blog</a></li>
                <li><a href="<?php echo url_for('sandbox/exerciseLinks.php'); ?>">PHP EXERCISES</a></li>
                <li><a href="#openModal">Login</a></li>
            </ul>
        </nav>
        <div id='openModal' class="modalDialog">
            <div><a href="#close" title="Close" class="close">X</a>
                <!-- content for Modal -->
                <div class="login">
                    <h2>Sign in</h2>
                    <form>
                        <input type="email" name="email" placeholder="Email">
                        <input type="password" name="password" placeholder="Password">
                        <input type="button" value="Login">
                    </form>
                </div><!-- end login -->
            </div><!-- end close -->
        </div>
        <!--end openModal -->
    </div>
    <!--end navbar -->

</header>
<body>