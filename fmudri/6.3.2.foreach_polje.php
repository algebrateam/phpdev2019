<?php

//keyevi su [0], [1], ]2]...
//value su Bravo, Tipo, Chroma...
$fiati = array('Bravo', 'Tipo', 'Chroma', 'favorit' => 'Multipla', 'Punto');

echo $fiati[1];
echo $fiati[3];

var_dump($fiati);
//print_r($fiati)
echo $fiati['favorit']; //ispisuje 'multiplu'
echo '<ul>';

foreach ($fiati as $key => $value) { //sve ispisuje
    echo "<li id='id" .$key "' name='name" . $key . "'>" . $value . "</li>";
}
echo '</ul>';

echo '<hr>';
//ovo je radi jednostavnosti
foreach ($fiati as $oznaka => $model) {
    echo ' # ' . $oznaka . ' je pokazivač na ' . $model;
}

//dvostruki array (višedimenzionalna polja)

$ucenici = array(
    array('ime' => 'Ivan', 'prezime' => 'Ivic'),
    array('ime' => 'Mara', 'prezime' => 'Maric'),
    array('ime' => 'Pero', 'prezime' => 'Peric'),
);

print_r($ucenici);
//ovom arrayu $uc key je 0,1,2...
foreach ($ucenici as $key => $uc) {
    foreach ($uc as $key => $value) {
        //prvi način za dobiti samo prezimena
        if($key=='prezime'){
        echo '<br>'.$value;
        }
    }
}


foreach ($ucenici as $key => $uc) {
    foreach ($uc as $key => $value) {
        //drugi način za dobiti samo prezimena
        if($key=='ime'){
            continue;
        }
        echo '<br>'.$value;
    }
}