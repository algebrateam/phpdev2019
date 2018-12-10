<?php

echo "Prvi zadatak<br><hr>";
$polje = array('anamarija', 'tina', 'barbara', 'arijan', 'mario');
foreach ($polje as $ime) {
    echo "$ime<br>";
}
echo "<hr><br>";

echo "Drugi zadatak<br><hr>";
$tmp = $polje[0];
$polje[0] = $polje[4];
$polje[4] = $tmp;
$tmp = $polje[1];
$polje[1] = $polje[3];
$polje[3] = $tmp;
foreach ($polje as $ime) {
    echo "$ime<br>";
}
echo "<hr><br>";

echo "Treci zadatak<br><hr>";
sort($polje); // rsort sortira od najvecega, sort od najmanjega
for ($i = 0; $i < count($polje); $i++) {
    echo "$polje[$i]<br>";
}
echo "<hr><br>";

echo "Cetvrti zadatak<br><hr>";
ksort($polje); 
foreach ($polje as $key => $ime) {
    echo "$key $ime <br>";
}
echo "<hr><br>";

echo "Peti zadatak<br><hr>"; 
$brojevi = array();
for ($i = 1; $i <= 100; $i++) {
    $brojevi[$i] = $i;
}
foreach ($brojevi as $broj) {
    echo "$broj ";
}
echo "<hr><br>";
