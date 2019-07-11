<?php
require_once('../../private/initialize.php');

    //set default value of variables for initial page load
    if (!isset($investment)) {
        $investment = '';
    }
    if (!isset($interest_rate)) {
        $interest_rate = '';
    }
    if (!isset($years)) {
        $years = '';
    }

    $error_message='';


if(isset($_POST['submit'])) {
    if(!empty($_POST['investment'])){
        $investment = filter_input(INPUT_POST, "investment",
            FILTER_VALIDATE_FLOAT);
        if ( $investment <= 0 || !is_numeric($investment)) {
            $error_message = 'Investment must be greater than zero.'; }
    }else{
        $error_message = "Investment cannot be left blank";
    }
    if(!empty($_POST['interest_rate'])){
        $interest_rate = filter_input(INPUT_POST, "interest_rate",
            FILTER_VALIDATE_FLOAT);
        if(!is_numeric($interest_rate)|| $interest_rate <=0){
            $error_message = "Interest rate must be a number greater than 0";
        }elseif($interest_rate > 15){
            $error_message = "Interest rate cannot be more than 15 ";
        }
    }else{
        $error_message = "Interest rate must have a value entered";
    }
    if(!empty($_POST['years'])){
        $years = filter_input(INPUT_POST, "years",
            FILTER_VALIDATE_INT);
        if(!is_numeric($years)|| $years <= 0){
            $error_message ="Years must be a number greater than 0";
        }elseif ($years > 30){
            $error_message = "Years cannot be greater than 30";
        }
    }else{
        $error_message = "Years must have a value entered";
    }
}

?>


<?php include(SHARED_PATH.'/header.php');?>
<main>
    <h1>Future Value Calculator</h1>
    <?php if ($error_message != ''|| count($_POST)==0) {
    ?>
    <?php if (!empty($error_message)) { ?>

        <p class="error"><?php echo htmlspecialchars($error_message); ?></p>
    <?php } ?>
    <form action="single_page_form.php" method="post">

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
            <input type="submit" name="submit" value="Calculate"><br>

            <button class='back'><a href='../exerciseLinks.php'>BACK</a></button>
        </div>

    </form>
    <?php
        }else{
            $futureValue = $investment;
            for($i = 1;$i<=$years;$i++){
                $futureValue = $futureValue + ($futureValue * $interest_rate *.01);
            }
    // format numbers
    $investment_formatted = '$'.number_format($investment, 2);
    $yearly_rate_formatted = $interest_rate.'%';
    $future_value_formatted = '$'.number_format($future_value, 2);
    ?>
    <label>Investment Amount:</label>
    <span><?php echo $investment_formatted; ?></span><br>

    <label>Yearly Interest Rate:</label>
    <span><?php echo $yearly_rate_formatted; ?></span><br>

    <label>Number of Years:</label>
    <span><?php echo $years; ?></span><br>

    <label>Future Value:</label>
    <span><?php echo $future_value_formatted; ?></span>
    <?php
        }
    ?>

</main>
<?php include(SHARED_PATH . '/footer.php'); ?>

