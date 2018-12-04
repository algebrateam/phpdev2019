<?php

echo "1.Napišite program koji upisuje pet imena u polje imena i ispisuje ih..";

echo "<br>";
$imena=array("Ivan","Marko","Ivana","Franjo","Ana");

foreach($imena as $ime){
    echo $ime. "<br>";
}

echo "<hr>";

echo "<br>2.Polju iz prethodnog zadatka promijenite ključeve tako da umjesto..";

echo "<br>";
$imena=array();
$imena["ime5"]="Ivan";
$imena["ime4"]="Marko";
$imena["ime3"]="Ivana";
$imena["ime2"]="Franjo";
$imena["ime1"]="Ana";

foreach($imena as $key => $ime){
    echo $key."=>".$ime."<br>";
}

echo "<hr>";

echo "<br>3.Posložite imena u polju iz prvog zadatka abecednim redom...";

echo "<br>";
$imena=array();

$imena[]="Ivan";
$imena[]="Marko";
$imena[]="Ivana";
$imena[]="Franjo";
$imena[]="Ana";

sort($imena);

for($i=0; $i<count($imena);$i++)
{
    echo $imena[$i]."<br>";
}

echo "<hr>";
echo "<br>4.Posložite ključeve u polju abecednim redom i ispišite..";

$imena=array();

$imena["ime5"]="Ivan";
$imena["ime4"]="Marko";
$imena["ime3"]="Ivana";
$imena["ime2"]="Franjo";
$imena["ime1"]="Ana";

ksort($imena);
foreach($imena as $key => $ime){
    echo $key."=>".$ime."<br>";
}

echo "<hr>";
echo "5.Napišite program koji će s pomoću petlje for automatski...";

echo "<br>";
$brojevi=array();

for($i=1; $i<=100; $i++){
    $brojevi[]=$i;
}

foreach($brojevi as $broj){
    echo $broj."<br>";
}
