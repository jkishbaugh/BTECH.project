<?php
    require_once("../private/initialize.php");
    if(isPostRequest()){
        $name = $_POST['fullName'];
        $message = $_POST['message'];
        $address = $_POST['emailAddress'];
        $subject = $_POST['subject'];

    if(hasHeaderInjection($address)|| hasHeaderInjection($name)){
        die;
        }
    if(!$name || !$address || !$message|| !$subject){
        $error = "All Fields Must Be Filled Out";
        }

        $message = wordwrap($message,72);

        //Set the mail headers into a variable

        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
        $headers .= "From: $name <$address> \r\n";
        $headers .= "X-Priority: 1\r\n";
        $headers .= "X-MSMail-Priority: High\r\n\r\n";

        //Send the email
        mail($address, $subject, $message, $headers);
    }

 include("../Shared/header.php");
    ?>

  <section id="splash">
    <img src="../img/contact.jpg" alt="Contact Image">
  </section><!--end splash-->
  <section id="contactForm">
    <h2>Contact Us</h2>
    <hr>
    <h3>Send us a message and we will get back to you as soon as we can.</h3>
    <form action="" class="contact">
      <div class="w3-row">
          <?php if($error!=""){
             echo "<h4>$error</h4>";
            }?>
        <div class="w3-half">
          <input type="text" name="fullName" placeholder="Full Name">
        </div>
        <div class="w3-half">
          <input type="text" name="subject" placeholder="Subject">
        </div>
      </div>
      <div class="w3-row">
        <div class="w3-half">
          <input type="tel" name="phoneNumber" placeholder="Phone Number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
        </div>
        <div class="w3-half">
          <input type="email" name="email" placeholder="Email Address">
        </div>
      </div>
      <h4>Message</h4>
      <input class="message" type="textarea" name = "message">
      <input type="submit" class="contactSubmit" name="submit" value="Send Email">
    </form>
  </section>
 <?php
    include("../Shared/footer.php");
 ?>
