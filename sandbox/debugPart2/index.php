<?php
//set default value of variables for initial page load
if (!isset($investment)) { $investment = ''; }
if (!isset($interest_rate)) { $interest_rate = ''; }
if (!isset($years)) { $years = ''; }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-16">
    <title>Future Value Calculator</title>
    <link rel="stylesheet" type="text/css" href="../../css/styles.css"/>
</head>

<body>
    <main>
    <h1>Future Value Calculator</h1>
    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo $error_message; ?></p>
    <?php } //end_if ?>
        <form action="display_results.php" method="get">

        <div id="data">
            <label>Investment Amount:
            <input type="text" name="investment"
                   value="<?php echo $investment; ?>">
            </label>
            <br>

            <label>Yearly Interest Rate:
            <input type="text" name="interest_rate"
                   value="<?php echo $interest_rate; ?>">
            </label>
            <br>

            <label>Number of Years:
            <input type="text" name="years"
                   value="<?php echo $years; ?>">
            </label>
            <br>
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <button type="submit" value="Calculate">Calculate</button>
            <br>
        </div>

      </form>
    </main>
</body>
</html>