<?php
    require_once ('../private/initialize.php');

    $graves_set = getAllGraves($db);

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
          <li><a href="../sandbox/exerciseLinks.php">PHP EXERCISES</a></li>
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
  <section id="hero">
    <h1>Welcome to the Grave Site</h1>
    <div class="search">
      <form action="index.php">
        <input type="search" name="ancestor_search" placeholder="Find your Ancestor">
      </form>
    </div>
    <!--end search-->
  </section>
  <!--end hero-->
  <section id="description">
    <h2>The Grave Site</h2>
    <p>As you develop the grave site you will learn the basics of
      coding a website. A quick reference can be found <a href="http://www.w3schools.com">here.</a>
    </p>
  </section>
  <!--end description-->
  <section id="classes">
      <?php while($grave = mysqli_fetch_assoc($graves_set)){ ?>
    <div class="w3-row">
        <div class="w3-card">
          <div id="essentials">
            <img src="<?php echo '../img/'.$grave["PhotoName"];?>" alt="headstone">
              <h3><?php
                    echo $grave['firstName']." ".$grave['lastName'];
                  ?></h3>
            <p>In Web Dev Essentials <em>we will learn how to code the basic structure of an HTML page.</em></p>
          </div>
          <!--end essentials-->
        </div>
        <!--end card-->
    </div>
    <!--end row-->
      <?php } ?>
  </section>
  <!--end classes-->
  <footer>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="faq.html">FAQ</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="blog.html">Blog</a></li>
      </ul>
    </nav>
  </footer>
</body>

</html>
