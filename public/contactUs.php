<?php
require_once("../private/initialize.php");
$error = "";

if(isPostRequest()){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $phone = $_POST['phoneNumber'];
    $email = $_POST['email'];

    if(hasHeaderInjection($name)||hasHeaderInjection($email)){
        die;
    }
    if(!$name||!$email||!$phone){
        $error = "Must have all fields filled out to submit an email";
    }

    $message = "From: ".$name."\r\n";
    $message .= "Phone Number: ".$phone."\r\n";
    $message .= $_POST['message']."\r\n \r\n";
    $message .="Thanks for writing!";

    $message = wordwrap($message,72);

    //Set the mail headers into a variable

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
    $headers .= "From: $name <$email> \r\n";
    $headers .= "X-Priority: 1\r\n";
    $headers .= "X-MSMail-Priority: High\r\n\r\n";

    mail($email, $subject, $message, $headers);

    if ($error != "") {
        echo "<h4>$error</h4>";
    }

    echo "<p>{$message}</p>";
    echo "<h5>Thanks for contacting us!</h5>
		<p>Please allow 24 hours for a response.</p>
		<p><a href='index.hmtl'>&laquo; Go to Home Page</a></p>";

}
?>