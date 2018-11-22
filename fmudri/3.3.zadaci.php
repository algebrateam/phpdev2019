<?php
$cetiri = 4;
$pi = 3.14;
$pedeset = 50;
//echo služi za ispis na ekran, print_r služi za debugging
//var_dump($nešto) daje detaljniji prikaz, broj karaktera i vrstu (string, int..)
print_r($cetiri);
echo "<br>";
print_r($pi);
echo "<br>";

print_r($pedeset);
echo "<br>";
/*
 * $a=5;
 * $b=67.9;
 * 
 * echo $a." ".$b;
 */

$a = 3;
$b = 5;
echo "<br>varijabla a=".$a;
echo "<br>varijabla b=".$b;


$pom = $b;
$b=$a;
$a=$pom;

echo "<br>varijabla a=".$a;
echo "<br>varijabla b=".$b;
        
    echo "<br>";    
        
$ImePrezime = "Filip Mudri";
echo $ImePrezime;
