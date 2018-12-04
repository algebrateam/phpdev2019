<?php

/* 
 */

$fiat=array('Bravo', 'Tipo', 'Crome', 'favorit'=>'Multipla', 'Punto');
echo $fiat[1];
echo "<br>";
echo $fiat[3];
echo "<br>";
var_dump($fiat);
echo "<br>";
print_r($fiat);
echo "<br>";
echo $fiat['favorit'];
echo "<br>";

echo '<ul>';
foreach ($fiat as $key => $value) {
    echo "<li name='key".$key."'>".$value."</li>";
}
echo "</ul>";

echo "<br>";

foreach ($fiat as $k => $v) {
    echo ' # '.$k.'je pokazivač na' .$v;
}



