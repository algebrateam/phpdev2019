<?php

/* 
 * Zadaća 22.11.2019. str.39
 */

echo 'Zadatak 1.'; //ZADATAK 1.Koji od navedenih operatora je arihmeticki %,&&,.

$a='%';

echo '<br>Arihmetički operator je '.$a;

echo "<hr>";

echo 'Zadatak 2.'; //ZADATAK 2.Nastavljanje nizova

$ime="Mateo";
$prezime="Martinović";

echo "<br>Zadaću napisao ".$ime." ".$prezime;
echo "<br>Zadaću napisao $ime $prezime";

echo "<hr>";

echo "Zadatak 3."; //ZADATAK 3.Automatsko povećavanje i smanjivanje

$g=5;
echo "<br>Automatski povećano je ";
echo ++$g;
echo "<br>Automatski smanjeno je vraćeno na osnovu ";
echo --$g;

echo "<hr>";

echo "Zadatak 4."; //ZADATAK 4. Operator pretvorbe

echo "<br>";
$h=(float)$g;
echo "Varijabla g u decimalnom/float obliku iz predhodnog zadatka je ";
echo $h;

echo '<hr>';

echo 'Zadatak 5.<br>'; //ZADATAK 5.Dodjeljivanje

$g+=5;
echo "Varijablu g dodjeljivanjem sam uvećao na ";
echo $g;

echo "<hr>";

echo "Zadatak 6.<br>"; //ZADATAK 6.Riješenja zadataka na php stranici

$c=7;
$d=3;
$e=$c+$d;
$f=$c-$d;
$i=$c*$d;
$j=$c/$d;
$k=$c%$d;
echo "a) ".$c." + ".$d." = ".$e;
echo "<br>b) ".$c." - ".$d." = ".$f;
echo "<br>c) ".$c." * ".$d." = ".$i;
echo "<br>d) ".$c." / ".$d." = ".$j;
echo "<br>e) ".$c." % ".$d." = ".$k;

echo "<hr>";

echo "Zadatak 7.<br>"; //ZADATAK 7. Ponavljanje zadatka 6. sa drugim
                       // vrijednostima

$c-=3;
$d-=1; 
$e=$c+$d;
$f=$c-$d;
$i=$c*$d;
$j=$c/$d;
$k=$c%$d; 
echo "a) ".$c." + ".$d." = ".$e;
echo "<br>b) ".$c." - ".$d." = ".$f;
echo "<br>c) ".$c." * ".$d." = ".$i;
echo "<br>d) ".$c." / ".$d." = ".$j;
echo "<br>e) ".$c." % ".$d." = ".$k;

