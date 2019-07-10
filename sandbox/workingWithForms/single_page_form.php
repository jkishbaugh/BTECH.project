<?php
require_once('../../private/initialize.php');
    $error_message='';
    if(!isset($_GET['id'])){
        header(url_for('/sandbox/workingWithForms/index.php'));
    }
    $id = $_GET['id'];

if(isPostRequest()) {
    $investment = filter_input(INPUT_POST, 'investment',
        FILTER_VALIDATE_FLOAT);
    $interest_rate = filter_input(INPUT_POST, 'interest_rate',
        FILTER_VALIDATE_FLOAT);
    $years = filter_input(INPUT_POST, 'years',
        FILTER_VALIDATE_INT);
// validate investment
    if ( $investment === NULL || $investment === FALSE ) {
        $error_message = 'Investment must be a valid number.'; }
    else if ( $investment <= 0 ) {
        $error_message = 'Investment must be greater than zero.'; }

// validate interest rate
    else if ( $interest_rate === NULL || $interest_rate === FALSE ) {
        $error_message = 'Interest rate must be a valid number.'; }
    else if ( $interest_rate <= 0 ) {
        $error_message = 'Interest rate must be greater than zero.'; }
    else if ($interest_rate >15){
        $error_message = 'Interest rate is too high please enter a lower rate';
    }

// validate years
    else if ( $years === NULL || $years === FALSE ) {
        $error_message = 'Number of years must be a valid whole number.'; }
    else if ( $years <= 0  ) {
        $error_message = 'Number of years must be greater than zero.'; }
    else if ( $years >31 ){
        $error_message = 'Number must be less than 31';
    }

// set error message to empty string if no invalid entries
    else {
        $error_message = ''; }
}
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

?>
<?php include(SHARED_PATH.'header.php');?>
<main>
    <h1>Future Value Calculator</h1>
    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo htmlspecialchars($error_message); ?></p>
    <?php } ?>
    <form action="<?php echo url_for('/sandbox/workingWithForms/single_page_form.php?id='.h(u($id)));?>" method="post">

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

    <button><a href='../exerciseLinks.php'>BACK</a></button>

</main>
<?php include(SHARED_PATH.'footer.php');?>