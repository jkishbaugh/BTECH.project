<?php
    require_once ("../private/initialize.php");
?>
<!DOCTYPE html>
<html lang="en" dir=" ">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="Justin Kishbaugh">
    <title>Debug</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Shared/css/styles.css">
    <link rel="stylesheet" href="../Shared/css/normalize.css">
    <link rel="stylesheet" href="../Shared/css/w3.css">
</head>
<body>
    <?php include('../Shared/header.php');?>
<h4>Part 1</h4>
<p>
    <?php include('temperature.php'); ?>
</p>
<h4>Part 2</h4>
<p>
    <?php include('debugPart2/index.php'); ?>
</p>
<h4>Part 3</h4>
<p>
    <?php include('debugPart3/index.html'); ?>
</p>
<button><a href="exerciseLinks.php">BACK</a></button>

    <?php include('../Shared/footer.php');?>

</body>
