<?php

/* 
 * zadataci
 */

$a=15;
$b=66;
echo $a." ".$b;

echo "<hr>";

$a=3;
$b=5;

echo "<br>varijabla a=".$a;
echo "<br>varijabla b=".$b;

$pom=$b;
$b=$a;
$a=$pom;

echo "<br>varijabla a=".$a;
echo "<br>varijabla b=".$b;

echo "<hr>";

$a="Mateo";
$b="Martinovic";
echo $a." ".$b;


echo "<hr>";
$brojevi=['ime',1,34,true,false];    
 
print_r($brojevi);
echo "<br>";
var_dump($brojevi);