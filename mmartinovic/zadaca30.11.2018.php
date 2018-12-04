<?php

/* 
 Zadaca 30.11.2018. 
 stranica 72.
 */

echo "Zadatak 1."; //ZADATAK 1. FOREACH PETLJA
echo "<br>";
$imena  = array('Josip','Leonarda','Emilija','Perica','Lili');

foreach ($imena as $ime) {
    echo "<li> $ime </li>";
}


echo "<hr>";

echo "Zadatak 2."; //ZADATAK 2. PROMJENA KLJUČEVA
echo "<br>";

$imena = array();

$imena ["ime5"] = "Josip";
$imena ["ime4"] = "Leonarda";
$imena ["ime3"] = "Emilija";
$imena ["ime2"] = "Perica";
$imena ["ime1"] = "Lili";

foreach ($imena as $key => $ime){
    echo "<li> $key = $ime </li>";
}

echo "<hr>";

echo "Zadatak 3."; //ZADATAK 3. POREDAK ABECEDNIM REDOM
echo "<br>";

$imena = array();

$imena [] = "Josip";
$imena [] = "Leonarda";
$imena [] = "Emilija";
$imena [] = "Perica";
$imena [] = "Lili";

sort($imena);

for($i=0;$i<count($imena);$i++){
    echo "<li> $imena[$i] </li>";
}

echo "<hr>";

echo "Zadatak 4."; // ZADATAK 4. POREDAK ABECEDNIM REDOM ELEMENATA
echo "<br>";


$imena = array();

$imena ["ime5"] = "Josip";
$imena ["ime4"] = "Leonarda";
$imena ["ime3"] = "Emilija";
$imena ["ime2"] = "Perica";
$imena ["ime1"] = "Lili";

ksort($imena);

foreach ($imena as $key => $ime){
    echo "<li> $key = $ime </li>";
}

echo "<hr>";

echo "Zadatak 5."; //ZADATAK 5. AUTOMATSKO STVARANJE BROJEVA OD 1 DO 100
echo "<br>";

$brojevi = array();

for ($i=1;$i<=100;$i++){
    $brojevi[] = $i;
}

foreach ($brojevi as $broj){
    echo "<li> $broj </li>";
    
}

