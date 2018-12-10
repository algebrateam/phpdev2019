<?php

$i = 1;
while ($i <= 10) {
    echo '<br> neki tekst linija: ' . $i;
    $i++;
}
echo "<br>";
$naziv = "Algebra";
$brojac = 0;
echo substr($naziv, 1);

while ($i > 1) {
    //odreži jedan znak stringa 
    //povećaj brojač znakova
    //ukoliko nema više za rezanje izađi van
    //ispiši brojač
    if ($naziv != '') {
        $naziv = substr($naziv, 1);
        echo $naziv. ' ';
        $brojac++;
    } else {
        break;
    }
}
echo "<br>Naziv ima " . $brojac . " znakova";


unset($i);
unset($zbroj);
$i = 0;
$zbroj = 0;
while($i<=100) {
    $zbroj+=$i;
    $i++;
    if($zbroj>=80){
        break;
    }
}
echo "zbroj znamenka do ".$i. " mi daje sumu ".$zbroj;

echo "<hr>dvostruka petlja <br>";
$x = 0;
$y = 0;
while($x<=10) {
    while($y<=10){
        echo "coord: ".$x.' '.$y.'<br>';
        $y++;
    }
    $y=0;
    $x++;
}
