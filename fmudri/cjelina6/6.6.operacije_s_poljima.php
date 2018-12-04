<?php

$fruits = [
    0 => 'limun',
    'a' => 'naranca',
    1 => 'banana',
    'b' => 'jabuka',
];
//broji elemente
$br = 0;
foreach ($fruits as $key => $value) {
    $br++;
}
echo 'broj elemenata polja fruits:' . $br;


echo '<br> pomoću funkcije count():' . count($fruits);

//ispis zadnjeg elementa polja
foreach ($fruits as $key => $value) {
    
}
echo 'zadnji element polja je:' . $value;
echo 'zadnji element ' . 'polja uz funkciju end() je:' . end($fruits);



//6.6.3. pretraživanje polja

foreach ($fruits as $key => $value) {
    if ($value == 'banana') {
        echo '<br>banana se nalazi pod ključem:' . $key;
    }
}

//skraćeni način (ujedno i bolji)
$kljuc = array_search('banana', $fruits);
echo '<br>banana se nalazi pod ključem:' . $kljuc;


if (in_array('bananna', $fruits)) {
    echo 'Našao bananu';
} else {
    echo '<br> Portaga je neuspješna';
}
//vraća TRUE ili FALSE
echo (in_array('banana', $fruits)) ? 'Našao' : 'Nema je';


if (in_array(['bananna', 'banana','ban'], $fruits)) {
    echo 'Našao bananu';
} else {
    echo '<br> Portaga je neuspješna';
}