<?php

$fruts=[
  0  =>'limun',
  'a'=>'naranca',
  1  =>'banana',
  'b'=>'jabuka',
  ];

  foreach ($fruts as $key => $value) {
    echo $value;
}

echo '<pre>';
print_r($fruts);
echo '</pre>';

echo "<hr>sort()<br>";
sort($fruts);

echo '<pre>';
print_r($fruts);
echo '</pre>';

$fruts=[
  0  =>'limun',
  'a'=>'naranca',
  1  =>'banana',
  'b'=>'jabuka',
  ];

echo "<hr>rsort()<br>";
rsort($fruts);

echo '<pre>';
print_r($fruts);
echo '</pre>';

////////////////////
$fruts=[
  0  =>'limun',
  'a'=>'naranca',
  1  =>'banana',
  'b'=>'jabuka',
  ];

echo "<hr>asort()<br>";
asort($fruts);

echo '<pre>';
print_r($fruts);
echo '</pre>';

////////////////////
$fruts=[
  0  =>'limun',
  'a'=>'naranca',
  1  =>'banana',
  'b'=>'jabuka',
  ];

echo "<hr>arsort()<br>";
arsort($fruts);

echo '<pre>';
print_r($fruts);
echo '</pre>';

////////////////////
$fruts=[
  0  =>'limun',
  'a'=>'naranca',
  1  =>'banana',
  'b'=>'jabuka',
  ];

echo "<hr>ksort()<br>";
ksort($fruts, SORT_NATURAL);  // 0,1,a,b,.
//ksort($fruts, SORT_REGULAR);  // 0,a,b,1. DEFAULT

echo '<pre>';
print_r($fruts);
echo '</pre>';
//echo SORT_NATURAL;

////////////////////
$fruts=[
  0  =>'limun',
  'a'=>'naranca',
  1  =>'banana',
  'b'=>'jabuka',
  ];

echo "<hr>krsort()<br>";
krsort($fruts, SORT_NATURAL);  // 0,1,a,b,.
//krsort($fruts, SORT_REGULAR);  // 0,a,b,1. DEFAULT

echo '<pre>';
print_r($fruts);
echo '</pre>';