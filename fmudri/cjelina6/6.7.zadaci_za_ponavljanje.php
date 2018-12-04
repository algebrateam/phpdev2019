<?php

/*Napišite program koji upisuje pet imena u polje $imena i ispisuje ih s
 * pomoću petlje foreach
 */
echo "Prvi zadatak";
echo "</br>";
echo "</br>";


$imena = ['Janko' , 'Marko' , 'Dinko' , 'Toni' , 'Luka'];

foreach ($imena as $value) {
    echo $value; 
           echo "</br>";
}
echo "<hr>";

/*Polju iz prethodnog zadtka promijenite ključeve tako da umjesto ključa 1
 * piše ime5, umjesto ključa 2 ime4 itd.
 */
echo "Drugi zadatak";
echo "</br>";
echo "</br>";


$imena = ['ime5' => 'Janko' , 'ime4' => 'Marko' , 'ime3' => 'Dinko' , 
    'ime2' => 'Toni' , 'ime1' => 'Luka'];
echo "<hr>";

/*Posložite imena u polju iz prvog zadatka abecednim rekom i ispišite 
 * vrijednosti elemenata uz pomoć petlje for
 */
echo "Treći zadatak";
echo "</br>";
echo "</br>";

$imena = array();
$imena["ime5"] = "Janko";
$imena["ime4"] = "Marko";
$imena["ime3"] = "Dinko";
$imena["ime2"] = "Toni";
$imena["ime1"] = "Luka";

sort($imena);

for($a=0;$a<count($imena);$a++){

    echo $imena[$a]."</br>";
}
echo "<hr>";


/*
 * Posložite ključeve u polju abecednim redom i ispišite vrijednosti
 * elemenata zajedno s pripadajućim ključevima s pomoću petlje foreach
 */
echo "Četvrti zadatak";
echo "</br>";
echo "</br>";

$predmeti = array(
    'a' => 'salica', 
    'e' => 'tanjur', 
    'c' => 'nož', 
    'd' => 'zlica', 
    'b' => 'vilica'
    );


    ksort($predmeti);
foreach ($predmeti as $key => $value) {
    //var_dump($predmeti);
  printf("%s je ključ koji pokazuje na %s",$key,$value);
    echo "</br>";
}
echo "<hr>";


/*
 * Napišite program koji će s pomoću petlje for automatski stvoriti polje
 * brojeva od 1 do 100 te s pretljom foreach ispisati sadržaj polja
 */
echo "Peti zadatak";
echo "</br>";
echo "</br>";

$brojevi = array();

for($i=1; $i<=100; $i++){
    $brojevi[] = $i;
}
foreach ($brojevi as $k=>$broj) {
    echo $k."=>".$broj. "</br>";
}
