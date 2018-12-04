<?php


$fiati=array('Bravo','Tipo','Croma','favorit'=>'multipla','Punto');

echo $fiati[1];


echo $fiati[3];

print_r($fiati);
echo $fiati['favorit'];

echo '<ul>';
foreach ($fiati as $key => $value) {
    echo "<li ". "name='k".$key."'>".$value."</li>";
    
}
echo '</ul>';

echo '<hr>';

foreach ($fiati as $oznaka => $model) {
    echo ' # '.$oznaka. ' je pokazivač na '.$model;
    
}