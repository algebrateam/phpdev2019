<?php

$i=1;
while ($i <=10) {
    echo "<br>Neki text linija: ".$i;
    $i++;
}
echo "<br>";

$naziv="Algebra";
$brojac=0;

//echo substr($naziv, 1);

while (true) {
    //Odreži jedan znak stringa
    //povečaj brojač znakova
    //ukoliko nema više za rezanje izađi van
    //iskpiši brojač
    if ($naziv!=""){
    $naziv = substr($naziv, 1);
    echo "$naziv";;
    $brojac++;
}else{
    break;
}}

echo "Naziv ima $brojac znakova";
echo "<br>";

unset($i);
unset($zboj);
$i=0;
$zbroj=0;

while ($i<=100){
    $zbroj+=$i;
    $i++;
    if($zbroj>=80){
        break;
    }
}
echo "zbroj znamenka do $i-1 mi daje sumu $zbroj";

echo "<br>";

$x=0;
$y=0;

while ($x<=10){
    while ($y<=10){
        echo "coord: ".$x." ".$y. "<br>";
        $y++;
    }
    $y=0;
    $x++;
};

