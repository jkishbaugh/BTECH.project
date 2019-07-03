<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="Justin Kishbaugh">
    <title>Logic Assignment</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/w3.css">
</head>
<body>
<h3>Part 1</h3>
<?php
//************************Beginning Part 1*************************************************
    $month= date('F', time());
    if(strtolower($month) == "august") {
        echo "It's August, so it's really hot.";
    }else{
        echo "Not August, so at least not in the peak of the heat.";
    }
?>

<br>
<h3>Part 2</h3>
<?php
//************************ Beginning Part 2*****************************************
    $string = (strtolower($month)=='august')?"It's August, so it's really hot.":"Not August, so at least not in the peak of the heat.";
    echo $string;
?>
<br>
<h3>Part 3</h3>
<?php
//**********************************Beginning Part ************************************
    switch (strtolower($month)){
        case 'january':
            echo 'Summer is a promissory note signed in June, its long days spent and gone before you know it, and due to be repaid next January.';
            break;
        case 'february':
            echo 'Why does February feel like one big Tuesday?';
            break;
        case 'march':
            echo 'Springtime is the land awakening. The March winds are the morning yawn.';
            break;
        case 'april':
            echo 'Here cometh April again, and as far as I can see the world hath more fools in it than ever.';
            break;
        case 'may':
            echo 'The world\'s favorite season is the spring. All things seem possible in May.';
            break;
        case 'june':
            echo 'There are two seasons in Scotland: June and Winter.';
            break;
        case 'july':
            echo ' Here men from the planet Earth first set foot upon the Moon. July 1969 AD. We came in peace for all mankind.';
            break;
        case 'august':
            echo 'August, the summer\'s last messenger of misery, is a hollow actor.';
            break;
        case 'september':
            echo 'We know that in September, we will wander through the warm winds of summer\'s wreckage. We will welcome summer\'s ghost.';
            break;
        case 'october':
            echo' I\'m so glad I live in a world where there are Octobers.';
            break;
        case 'november':
            echo 'The month of November makes me feel that life is passing more quickly. In an effort to slow it down, I try to fill the hours more meaningfully.';
            break;
        case 'december':
            echo 'God gave us memory so that we might have roses in December.';
            break;
        default:
            echo 'Are you sure you know your months?';
            break;
     }

?>
<br>
<br>
<button class="w3-button"><a href="php.html">BACK TO HOME</a></button>
</body>
