<?php
$a = 4;
$b = 2;

echo "Prvi zadatak";
echo "</br>";
if($a>$b){
    echo "a je veći od b";
}
else{
    echo "a je manji od b";
}
echo "<hr>";


echo "Drugi zadatak";
echo "</br>";

$a = 8;
$b = 6;
if($a > $b){
    echo $a++;
}
else{
    echo $a--;
}
echo $a. " " .$b;
echo "<hr>";



echo "Treći zadatak";
echo "</br>";

$a = 1;
while($a<= 50){
    echo $a++;
    echo "</br>";
}
echo "<hr>";




echo "Četvrti zadatak";
echo "</br>";

$zbroj = 0;
for($a = 20; $a <= 30; $a++ ){
    $zbroj += $a;
}
echo $zbroj;