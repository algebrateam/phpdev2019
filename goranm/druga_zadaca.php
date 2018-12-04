<?php

echo "1. Zadatak<br>";
echo "<br>";
$polje = array('Goran', 'Pero', 'Marica', 'Vinko', 'Jovica');
foreach ($polje as $ime) {
    echo "$ime<br>";
}
echo "<br>";
 echo "2. Zadatak<br>";
echo "<br>";
 $tmp = $polje[0];
$polje[0] = $polje[4];
$polje[4] = $tmp;
$tmp = $polje[1];
$polje[1] = $polje[3];
$polje[3] = $tmp;
foreach ($polje as $ime) {
    echo "$ime<br>";
}
echo "<br>";
 echo "3. Zadatak<br>";
echo "<br>";
 sort($polje); 
for ($i = 0; $i < count($polje); $i++) {
    echo "$polje[$i]<br>";
}
echo "<br>";
 echo "4. Zadatak<br>";
echo "<br>";
 ksort($polje); 
foreach ($polje as $key => $ime) {
    echo "$key $ime <br>";
}
echo "<br>";
 echo "5. Zadatak<br>"; 
echo "<br>";
 $brojevi = array();
for ($i = 1; $i <= 100; $i++) {
    $brojevi[$i] = $i;
}
foreach ($brojevi as $broj) {
    echo "$broj ";
}
echo "<br>";

