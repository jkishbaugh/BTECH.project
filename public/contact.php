<?php
    require_once("../private/initialize.php");
    $error = "";

    if(isPostRequest()){
        $name = $_POST['fullName'];
        $subject = $_POST['subject'];
        $phone = $_POST['number'];
        $email = $_POST['email'];
        $text = $_POST['message'];
        if(hasHeaderInjection($name)||hasHeaderInjection($email)){
            die;
        }
        $pattern = "/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/";
        if(empty($name)&& empty($subject) && empty($phone) && empty($email)){
            $error = "Must have all fields filled out to submit an email";
        }elseif (strlen($name) < 10 || !ctype_alpha(str_replace(' ','',$name))){
            $error = "Full name is required and cannot contain numbers or special characters";
        }elseif(strlen($subject)< 5){
                $error = "Subject length is not long enough";
        }elseif(!preg_match($pattern, $phone,$m)){
            $error = "Phone number must match pattern ###-###-####";
        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error =  "Please enter a valid email address";

        }elseif(strlen($text)<50){
            $error = "Message may not be long enough.";
        }else {

            $message = "From: " . $name . "\r\n";
            $message .= "Phone Number: " . $phone . "\r\n";
            $message .= $_POST['message'] . "\r\n \r\n";
            $message .= "Thanks for writing!";

            $message = wordwrap($message, 72);

            //Set the mail headers into a variable

            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
            $headers .= "From: $name <$email> \r\n";
            $headers .= "X-Priority: 1\r\n";
            $headers .= "X-MSMail-Priority: High\r\n\r\n";

            mail($email, $subject, $message, $headers);

            echo "<p>{$message}</p>";
            echo "<h5>Thanks for contacting us!</h5>
		<p>Please allow 24 hours for a response.</p>
		<p><a href='index.hmtl'>&laquo; Go to Home Page</a></p>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="Justin Kishbaugh">
    <title>The Grave Site</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Shared/css/styles.css">
    <link rel="stylesheet" href="../Shared/css/normalize.css">
    <link rel="stylesheet" href="../Shared/css/w3.css">
</head>

<body>
<header>
    <div class="navbar">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="blog.html">Blog</a></li>
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
<section id="splash">
    <img src="../img/contact.jpg" alt="Contact Image">
</section><!--end splash-->
<section id="contactForm">
    <h2>Contact Us</h2>
    <hr>
    <h3>Send us a message and we will get back to you as soon as we can.</h3>

    <?php
        if(!empty($error)){
            echo "<h4 class='error'>{$error}</h4>";
        }?>
    <h4 class='error'></h4>

    <form class="contact" action="" method="post">
        <div class="w3-row">
            <div class="w3-half">
                <input id="fullName" type="text" name="fullName" placeholder="Full Name">
            </div>
            <div class="w3-half">
                <input id="subject" type="text" name="subject" placeholder="Subject">
            </div>
        </div>
        <div class="w3-row">
            <div class="w3-half">
                <input id="phone" type="tel" name="number" placeholder="Phone Number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
            </div>
            <div class="w3-half">
                <input id="email" type="email" name="email" placeholder="Email Address">
            </div>
        </div>
        <h4>Message</h4>
        <input class="message" type="textarea" name = "message">
        <input class="contactSubmit" type="submit" name="submit" value="Send Email">
    </form>
</section>
<footer>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">about</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="blog.html">Blog</a></li>
        </ul>
    </nav>
</footer>
</body>
<script src="../scripts/dist/pristine.js"  type="text/javascript"></script>
<script type="text/javascript" src="../scripts/contactValidation.js"></script>
</html>
