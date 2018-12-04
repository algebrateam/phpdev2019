<?php
$fruits =[
    0 => 'limun',
    'a' => 'naranca',
    1 => 'banana',
    'b' => 'jabuka',
    ];

    foreach ($fruits as $key => $value) {
    echo $value;
}

echo '<pre>';
print_r($fruits);
echo '</pre>';
//sortira array, u ovom slučaju po abecedi
echo "<hr>sort()<br>";
sort($fruits);

echo '<pre>';
print_r($fruits);
echo '</pre>';
////////////////////////

//sortira array obrnutim redom
$fruits =[
    0 => 'limun',
    'a' => 'naranca',
    1 => 'banana',
    'b' => 'jabuka',
    ];

echo "<hr>rsort()<br>";
rsort($fruits);

echo '<pre>';
print_r($fruits);
echo '</pre>';
////////////////////

//sortira array po asocijama (ključevima)
$fruits =[
    0 => 'limun',
    'a' => 'naranca',
    1 => 'banana',
    'b' => 'jabuka',
    ];

echo "<hr>asort()<br>";
asort($fruits);

echo '<pre>';
print_r($fruits);
echo '</pre>';
/////////////////////////////

//ostavlja keyeve, sortira unatrag
$fruits =[
    0 => 'limun',
    'a' => 'naranca',
    1 => 'banana',
    'b' => 'jabuka',
    ];

echo "<hr>arsort()<br>";
arsort($fruits);

echo '<pre>';
print_r($fruits);
echo '</pre>';
///////////////////////

//razvrstava ključeve po abecedi
$fruits =[
    0 => 'limun',
    'a' => 'naranca',
    1 => 'banana',
    'b' => 'jabuka',
    ];

echo "<hr>ksort()<br>";
ksort($fruits);
ksort($fruits, SORT_NATURAL); //0,1,a,b
//ksort($fruits, SORT_REGULAR); //0,a,b,1 DEFAULT



echo '<pre>';
print_r($fruits);
echo '</pre>';
//////////////////////////

$fruits =[
    0 => 'limun',
    'a' => 'naranca',
    1 => 'banana',
    'b' => 'jabuka',
    ];

echo "<hr>krsort()<br>";
krsort($fruits, SORT_NATURAL);

echo '<pre>';
print_r($fruits);
echo '</pre>';