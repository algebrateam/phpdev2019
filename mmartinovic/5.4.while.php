<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$i = 1;
while ($i <= 10) {
    echo "<br>neki tekst linija : " . $i;
    $i++;
}
echo "<hr>";

$brojac = 0;
$naziv = "algebra";
echo substr($naziv, 1);
while ($i > 1) {
    //odreži jedan znat stringa
    //povećaj brojač znakova
    //ukoliko nema vise za rezanje izadji van
    //ispiši brojac
    if ($naziv != '') {
        $naziv = substr($naziv, 1);
        echo $naziv . " "; //ispis rezanja
        $brojac++;
    } else {
        break;
    }
}
echo "naziv ima " . $brojac . "znakova";



//
echo "<hr>";


unset($i);
unset($zbroj);
$i = 0;
$zbroj = 0;
while ($i <= 100) {
    echo $zbroj += $i;
    echo "<br>";
    $i++;
    if ($zbroj >= 80) {
        break;
    }
}
echo "<br>zbroj znameka " . ($i-1) . " mi daje sumu " . $zbroj;
//$i -1 stvljeno zato sto pocinje od 0


echo "<hr>dvostruka petlja <br>";

$x=0;
$y=0;
while($x<=10){
    while($y<=10){
        echo "coord: ".$x." ".$y."=".($x*$y)."<br>";
        $y++;
    }
    $y=0;
    $x++;
}
      