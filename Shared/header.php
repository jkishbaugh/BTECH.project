<body>
<header>
    <div class="navbar">
        <nav>
            <ul>
                <li><a href="<?php echo PROJECT_PATH."/index.html"; ?>">Home</a></li>
                <li><a href="<?php echo PROJECT_PATH."/about.html"; ?>">About</a></li>
                <li><a href="<?php echo PROJECT_PATH."/faq.html"; ?>">FAQ</a></li>
                <li><a href="<?php echo PROJECT_PATH."/contact.html"; ?>">Contact</a></li>
                <li><a href="<?php echo PROJECT_PATH."/blog.html"; ?>">Blog</a></li>
                <li><a href="<?php echo SANDBOX_PATH."/exerciseLinks.php"; ?>">PHP EXERCISES</a></li>
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