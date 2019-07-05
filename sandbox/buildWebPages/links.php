<?php
    require_once('../../private/initialize.php');
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Links Page</title>
        <link rel="stylesheet" type="text/css" href="<?php echo "../../Shared/styles.css";?>">
    </head>
    <body>
    <?php include(SHARED_PATH."/header.php"); ?>
    <section class='phpTop'></section><h1>Welcome Page</h1></section>
        <section class="linkList">
            <ul>
                <li><a href="links2.php?page=1">Page 1</a></li>
                <li><a href="links2.php?page=2">Page 2</a></li>
                <li><a href="links2.php?page=3">Page 3</a></li>
                <li><a href="links2.php?page=4">Page 4</a></li>
                <li><a href="links2.php?page=5">Page 5</a></li>
            </ul>
        </section>
    <?php include(SHARED_PATH."/footer.php"); ?>
    </body>
</html>
