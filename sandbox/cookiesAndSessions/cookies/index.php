<?php
    require_once('../../../private/initialize.php');

    //set default value of variables for initial page  load
    $investment = isset($_COOKIE['investment'])? $_COOKIE['investment']:'';
    $interest_rate = isset($_COOKIE['interest_rate'])?$_COOKIE['interest_rate']:'';
    $years = isset($_COOKIE['years'])?$_COOKIE['years']:'';
    $error_message = isset($_COOKIE['error'])?$_COOKIE['error']:'';


    $page = 6;

?> 

    <?php include(SHARED_PATH . '/header.php') ?>
    <main>
    <h1>Future Value Calculator</h1>
    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo htmlspecialchars($error_message); ?></p>
    <?php } ?>
    <form action="display_results.php" method="post">

        <div id="data">
            <label>Investment Amount:</label>
            <input type="text" name="investment"
                   value="<?php echo htmlspecialchars($investment); ?>">
            <br>

            <label>Yearly Interest Rate:</label>
            <input type="text" name="interest_rate"
                   value="<?php echo htmlspecialchars($interest_rate); ?>">
            <br>

            <label>Number of Years:</label>
            <input type="text" name="years"
                   value="<?php echo htmlspecialchars($years); ?>">
            <br>
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"><br>
        </div>

    </form>
        <button class = 'back'><a href='../../exerciseLinks.php'>BACK</a></button>
    </main>
<?php include(SHARED_PATH . '/footer.php') ?>