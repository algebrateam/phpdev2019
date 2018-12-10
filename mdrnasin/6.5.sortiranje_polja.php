<?php

/* 
 */

$fruits=[
    0   =>'limun',
    'a' =>'naranča',
    1   =>'banana',
    'b' =>'jabuka',
    ];

    foreach ($fruits as $key => $value) {
        echo '<br>' .$value;
}

echo '<pre>';
print_r($fruits);
echo '</pre>';

echo '<br>';

echo "<hr>Sort<br>";
sort($fruits);

echo '<pre>';
print_r($fruits);
echo '</pre>';

$fruits=[
    0   =>'limun',
    'a' =>'naranča',
    1   =>'banana',
    'b' =>'jabuka',
    ];

echo "<hr>Rsort<br>";
rsort($fruits);

echo '<pre>';
print_r($fruits);
echo '</pre>';

$fruits=[
    0   =>'limun',
    'a' =>'naranča',
    1   =>'banana',
    'b' =>'jabuka',
    ];

echo "<hr>Asort<br>";
asort($fruits);

echo '<pre>';
print_r($fruits);
echo '</pre>';

$fruits=[
    0   =>'limun',
    'a' =>'naranča',
    1   =>'banana',
    'b' =>'jabuka',
    ];

echo "<hr>Arsort<br>";
arsort($fruits);

echo '<pre>';
print_r($fruits);
echo '</pre>';

$fruits=[
    0   =>'limun',
    'a' =>'naranča',
    1   =>'banana',
    'b' =>'jabuka',
    ];

echo "<hr>Ksort<br>";
ksort($fruits, SORT_NATURAL);//0 1 a b
//ksort($fruits, SORT_LOCALE_STRING);//0 1 A B
//ksort($fruits, SORT_STRING);//0 1 A B
//ksort($fruits, SORT_REGULAR);// 0 a b 2

echo '<pre>';
print_r($fruits);
echo '</pre>';

$fruits=[
    0   =>'limun',
    'a' =>'naranča',
    1   =>'banana',
    'b' =>'jabuka',
    ];

echo "<hr>Krsort<br>";
krsort($fruits, SORT_NATURAL);

echo '<pre>';
print_r($fruits);
echo '</pre>';
