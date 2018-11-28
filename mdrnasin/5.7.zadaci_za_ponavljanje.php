<?php

echo "Zadatak 1. - Operatori usporedbe veće od i manje od - Varijabla a = 4, b = 2 -  ";
$a = 4;
$b = 2;

if ($a < $b) {
    echo "Varijabla a je manja od varijable b ";
} else {
    echo "Varijabla a je veća od varijable b";
}

echo "<hr>";

echo "Zadatak 2. - Operatori automatskog povećavanja i smanjivanja - ";

$c = 5;
$d = 7;

echo "Varijable prije su a: $c i b: $d, ";

if ($c > $d) {
    $c++;
} else {
    $d--;
    echo "Varijable poslije su a: $c i b: $d";
}

echo "<hr>";

echo "Zadatak 3. - Ispis brojeva od 1 do 50 jedan ispod drugoga - ";

$i = 1;
while ($i <= 50) {
    echo "<br>Broj: " . $i;
    $i++;
}

echo "<hr>";

echo "Zadatak 4. - Zbroj brojeva od 20 do 30 pomoću petlje for iznosi - ";

$j = 0;

for ($ii = 20; $ii <= 30; $ii++) {
    $j += $ii;
}

echo "$j";
?>