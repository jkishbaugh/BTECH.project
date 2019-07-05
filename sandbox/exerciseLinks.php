<?php
    require_once('../private/initialize.php');
?>
<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="Justin Kishbaugh">
    <title>PHP Exercise Links</title>
    <link rel="shortcut icon" href="../img/pencil.ico">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Shared/css/styles.css">
    <link rel="stylesheet" href="../Shared/css/normalize.css">
    <link rel="stylesheet" href="../Shared/css/w3.css">
</head>
<body>
    <?php include(SHARED_PATH."/header.php"); ?>

    <h2>PHP Exercises</h2>
    <section class="linkList">
        <ul>
            <li><a href="../template/basic.php">Getting Started Assignment</a></li>
            <li><a href="variablesAssignment.php">Variables Assignment</a></li>
            <li><a href="logic.php">Logical Expressions Assignment </a></li>
            <li><a href="loops.php">Loops Assignment </a></li>
            <li><a href="userDefinedFunctionsAssignment.php">User Defined Functions Assignment </a></li>
            <li><a href="debugging.php">Debugging Assignment </a></li>
            <li><a href="buildWebPages/links.php">Build Website Assignment </a></li>
        </ul>
    </section>

    <?php include(SHARED_PATH."/footer.php"); ?>

    <button><a href="../public/index.html">BACK TO HOME</a></button>

</body>
