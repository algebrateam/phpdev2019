<?php

$fruits=[
    0=>'limun',
    'a'=>'naranca',
    1=>'banana',
    'b'=>'jabuka',
    ];

    foreach ($fruits as $key => $value) {
        echo $value;
}

echo '<pre>';
print_r($fruits);
echo '</pre>';

echo "<hr>sort()<br>";
sort($fruits);

echo '<pre>';
print_r($fruits);
echo '</pre>';



//////
$fruits=[
    0=>'limun',
    'a'=>'naranca',
    1=>'banana',
    'b'=>'jabuka',
    ];

echo "<hr>rsort()<br>";
rsort($fruits);

echo '<pre>';
print_r($fruits);
echo '</pre>';


/////
$fruits=[
    0=>'limun',
    'a'=>'naranca',
    1=>'banana',
    'b'=>'jabuka',
    ];

echo "<hr>asort()<br>";
asort($fruits);

echo '<pre>';
print_r($fruits);
echo '</pre>';


///////
$fruits=[
    0=>'limun',
    'a'=>'naranca',
    1=>'banana',
    'b'=>'jabuka',
    ];

echo "<hr>arsort()<br>";
arsort($fruits);

echo '<pre>';
print_r($fruits);
echo '</pre>';

///////
$fruits=[
    0=>'limun',
    'a'=>'naranca',
    1=>'banana',
    'b'=>'jabuka',
    ];

echo "<hr>ksort()<br>";
ksort($fruits);

echo '<pre>';
print_r($fruits);
echo '</pre>';

////////
$fruits=[
    0=>'limun',
    'a'=>'naranca',
    1=>'banana',
    'b'=>'jabuka',
    ];

echo "<hr>krsort()<br>";
krsort($fruits, SORT_NATURAL);

echo '<pre>';
print_r($fruits);
echo '</pre>';