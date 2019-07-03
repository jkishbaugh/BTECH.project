<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="Justin Kishbaugh">
    <title>User Defined Functions</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/w3.css">
</head>
<body>
<h4>Part 1</h4>
<?php
 function hello(){
    echo "Hello World";
 }
 echo "<p>".hello()."</p>";
 ?>
<h4>Part 2</h4>
<p>
<?php
    function rectangle($l, $w){
        $area = $l*$w;
        return "A rectangle of length ".$l." and width ".$w." has an area of ".$area.".";
    }

    echo rectangle(4,5);
?>
</p>
<h4>Part 3</h4>
<p>
<?php
    function string_table($s1="Elf", $s2="Psych", $s3="both", $s4="ways"){

        return "<table class='w3-table-all'><tr><td>{$s1}</td><td>{$s2}</td><td>{$s3}</td><td>{$s4}</td></tr></table>";
    }

    echo "<p>Default values</p>".string_table();
    echo "<p>Input values</p>".string_table("This", "isn't","all","right");
?>
</p>
<h4>Part 4</h4>
<p>
    <?php
        echo "<p>Rewrite Function 1</p>";
        function hello_rewrite($name){
            return "Hello {$name}!";
        }

        echo hello_rewrite("Gus Wilburforce");

        echo "<p>Rewrite Function 2</p>";
        function rectangle_rewrite($l, $w){
            $area = $l*$w;
            return hello_rewrite("A rectangle of length ".$l." and width ".$w." has an area of ".$area.".");
        }
        echo rectangle_rewrite(4, 50);
    ?>
</p>
<h5>Part 5</h5>
<p>
    <p>This function takes in two string variables, first name and last name and returns the initials.</p>
    <?php
        function getInitials($firstName, $lastName){
            $firstInitial = substr($firstName, 0, 1);
            $lastInitial= substr($lastName, 0, 1);

            return "{$firstInitial}.{$lastInitial}.";
        }
        echo getInitials("Ghee", "Buttersnaps");
    ?>
</p>
<br>
<br>
<button><a href="../sandbox/php.html">BACK</a></button>
</body>
