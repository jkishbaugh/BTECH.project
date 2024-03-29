<?php

$title = getTitle(getPage());
$favicon = PROJECT_PATH.'/img/pencil.ico?';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title;?></title>

    <link rel="shortcut icon" href="../img/pencil.ico">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../Shared/css/styles.css">
    <link rel="stylesheet" type="text/css" href="../Shared/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../Shared/css/w3.css">
</head>
<body>
<header>
    <div class="navbar">
        <nav>
            <ul>
                <li><a href="<?php echo '../public/index.php'; ?>">Home</a></li>
                <li><a href="<?php echo '../public/about.html'; ?>">About</a></li>
                <li><a href="<?php echo '../public/faq.html'; ?>">FAQ</a></li>
                <li><a href="<?php echo '../public/contact.php'; ?>">Contact</a></li>
                <li><a href="<?php echo '../public/blog.html'; ?>">Blog</a></li>
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