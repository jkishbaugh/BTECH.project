<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Temperature Converter</title>
    </head>
    <body>
        <?php
        /* Function to convert Fahrenheit to Celsius */
        function displayCelsius($fahrenheit){
            
            $celsius = 0;
            
            echo "Converting from Fahrenheit to Celsius<br />";
            
            /* Loop through the array */
            for($i=0; $i<count($fahrenheit); $i++){
                
                /* Calculate and display celsius for
                 * for all Fahrenheit temps */
                $celsius = 5/9 * ($fahrenheit[$i] - 32);
                echo "Fahrenheit = " . $fahrenheit[$i] . " Celsius = $celsius";
                echo "<br />";
            }
            
        }        
        
        /* Function to convert from Celsius to Fahrenheit */
        function displayFahrenheit($celsius){
            
            $fahrenheit = 0;
            
            echo "Converting from Celsius to Fahrenheit<br />";
            
            /*Calculate and display Fahrenheit
             for each Celsius*/
            for($i=0; $i<count($celsius); $i++){
                
                $fahrenheit = (9/5 * $celsius[$i]) +32;
                echo "Celsius = " . $celsius[$i] . " Fahrenheit = $fahrenheit";
                echo "<br />";
            }
            
        }
        
        /* Array of temperatures */
        $celsius = array(-40, 0, 100);
        $fahrenheit = array(-40, 32, 212);
        

        
        /* Call displayCelsius
         * Pass fahrenheit and size */
        displayCelsius($fahrenheit);
        
        echo "<br /><br />";
        
        /* call displayFahrenheit
         * Pass celsius and size */
        displayFahrenheit($celsius);
        
        ?>
    </body>
</html>
