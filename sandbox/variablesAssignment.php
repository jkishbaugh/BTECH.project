<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="Justin Kishbaugh">
    <title>Hello World</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/w3.css">
</head>
<body>
<h3>Part 1</h3>
    <?php
    //************************Beginning Part 1*************************************************
    echo "Twinkle Twinkle Little Star";
    ?>
    <br>
    <?php
    $twinkle = "Twinkle";
    $star = "Star";
    echo $twinkle. " ".$twinkle.  " little ".$star;
    ?>
    <br>
    <h3>Part 2</h3>
    <?php
    //************************ Beginning Part 2*****************************************
        $x = 10;
        $y = 7;
        $result = 0;
        echo  $x + $y;
    ?><br>
    <?php echo $x - $y; ?><br>
    <?php echo $x*$y     ?><br>
    <?php echo $x/$y   ?><br>
    <?php echo  $x%$y   ?><br>
    <h3>Part 3</h3>
    <?php
    //**********************************Beginning Part 3************************************
        $variable = 8;
        echo "Value is now ".$variable;
        $variable=$variable+2;
        echo nl2br("\nValue is now ".$variable);
        $variable=$variable-4;
        echo nl2br("\nValue is now ".$variable);
        $variable = $variable*5;
        echo nl2br("\nValue is now ".$variable);
        $variable = $variable/3;
        echo nl2br("\nValue is now ".$y);
        $variable++;
        echo nl2br("\nValue is now ".$y);

    ?>
<h3>Part 4</h3>
    <?php
    //**********************************Beginning Part 4************************************
    $around="around";
    echo 'What goes '.$around.' comes '.$around.'.';
    ?>
<h3>Part 5</h3>
    <?php
    //**********************************Beginning Part 5************************************
    $weather = ['rain','sunshine','clouds','hail','sleet','snow','wind'];

    echo 'We\'ve seen all kinds of weather this month. At the beginning of the month, we had '.$weather[5].' and '.$weather[count($weather)-1].' .Then came '.$weather[1].' with a few '.$weather[2].' and some '.$weather[0].'. At least we didn\'t get any '.$weather[3].' or '.$weather[4].'.';
    ?>
<h3>Part 6</h3>
<?php
//**********************************Beginning Part 6************************************
    $countries = array("Japan"=>"Tokyo", "Mexico"=>"Mexico City",  "USA"=>"New York City", "India"=>"Mumbai","South Korea"=>"Seoul", "China"=>"Shanghai", "Nigeria"=>"Lagos","Argentina"=>"Buenos_Aires","Egypt"=>"Cairo", "England"=>"London");

    foreach ($countries as $key =>$value){
        print_r(nl2br("Key = ".$key." , Value= ".$value.".\n"));
    }


   ?>
<button><a href="php.html">BACK TO HOME</a></button>
</body>
