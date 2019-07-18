<?php
    require_once("../private/initialize.php");
    if(isPostRequest()){
        $name = $_POST['fullName'];
        $message = $_POST['message'];
        $address = $_POST['emailAddress'];

    if(hasHeaderInjection($address)|| hasHeaderInjection($name)){
        die;
        }
    if(!$name || !$address || !$message){
        $error = "All Fields Must Be Filled Out";
        }

        $message = wordwrap($message,72);
        $subject = "Message From Beyond The Grave!";
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
  <header>
    <div class="navbar">
      <nav>
        <ul>
          <li><a href="index.html">Home</a></li>
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
          <input type="tel" name="phoneNumber" placeholder="Phone Number" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
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
