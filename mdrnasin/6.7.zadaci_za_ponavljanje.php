<?php

/* 
 */
// 1. Zadatak
$imena= array('Marko', 'Anamarija', 'Darko', 'Ana', 'Marija');

echo '1. Zadatak - Ispis 5 imena petljom foreach: <br>';

foreach ($imena as $key => $value) {
    echo '<br>' .$value;
}

echo '<hr>';

//2. Zadatak
echo '2. Zadatak - Promjena ključeva: <br>';
$imena=[
    'ime5' => 'Marko',
    'ime4' => 'Anamarija',
    'ime3' => 'Darko',
    'ime3' => 'Ana',
    'ime2' => 'Marija'
];
echo '<pre>';
print_r($imena);
echo '</pre>';

echo '<hr>';

// 3. Zadatak
echo '3. Zadatak - Sortiranje imena po uzlaznom abecednom redu naredbom SORT: <br>';
$imena= array('Marko', 'Anamarija', 'Darko', 'Ana', 'Marija');

sort($imena);
for ($i = 0; $i < count($imena); $i++) {
    echo '<br>' .$imena[$i];
}

echo '<hr>';

// 4. Zadatak
echo '4. Zadatak - Sortiranje ključeva po uzlaznom redu naredbom KSORT: <br>';
$imena= array('p'=>'Marko', 't'=>'Anamarija', 'k'=>'Darko', 'r'=>'Ana', 'a'=>'Marija');

ksort($imena);

foreach ($imena as $key => $value) {
    echo $key.'=>'.$value .'<br>';
}


echo '<hr>';

// 5. Zadatak
echo '5. Zadatak - Polje brojeva od 1 do 100 - ispis petljom foreach: <br>';

$brojevi=array();

for ($i = 1; $i <=100; $i++) {
    $brojevi[]=$i;
}

foreach ($brojevi as $broj) {
    echo '<br>' .$broj;
}
