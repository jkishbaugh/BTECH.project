<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="Justin Kishbaugh">
    <title>Hello World</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/w3.css">
</head>
<body>
<h3>Part 1</h3>
<p>
<?php
//************************Beginning Part 1*************************************************
    $string = 'abc';
    $i = 0;
    while($i <8 ){
        echo $string;
        $i++;
    }

?>
    </p>
    <p>
<?php
    $string = 'xyz ';
    do {
        echo $string;
        $i--;
    } while($i > 0);
?>
    </p>
    <p>
<?php


    for($j=1;$j<=9;$j++){
        echo $j;
    }
?>
    </p>
    <ol>
<?php
    $item = 'A';
    for($j=1;$j<=6;$j++){
        echo "<li>";
        echo 'Item '.$item."</li>" ;
        $item++;
    }
?>
    </ol>
<br>
</p>
<h3>Part 2</h3>
<?php
//************************ Beginning Part 2*****************************************
    for ($j=1;$j<=12;$j++){
       echo "<p>".$j."<sup>2</sup> =".pow($j,2)."</p>";
    }
?>
<br>
<h3>Part 3</h3>
<table class="w3-table-all w3-bordered">
    <?php
    //**********************************Beginning Part 3 ************************************
        for($i =1; $i<=7; $i++){
            echo"<tr>";
            for($j=1;$j<=7;$j++){
                echo "<td style='text-align: center;'>".$i*$j."</td>";
            }
            echo "</tr>";

        }

    ?>
</table>
<h4>Part 4</h4>
<table class ="w3-table-all">
    <tr>
        <td style="text-align: center;" colspan="12" >Days in a Month</td>
    </tr>
    <?php
        $months = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul","Aug", "Sept", "Oct", "Nov", "Dec");
        $daysInMonth = array(31,28,31,30,31,30,31,31,30,31,30,31);
        $topRow = "<tr>";
        $secondRow = "<tr>";
        foreach($months as $index =>$month){
            $topRow.="<td>$month</td>";
            $secondRow .="<td>$daysInMonth[$index]</td>";
        }
        echo $topRow."</tr>";
        echo$secondRow."</tr>";

    ?>
</table>
<br>
<br>
<button class="w3-button"><a href="php.html">BACK TO HOME</a></button>
</body>
