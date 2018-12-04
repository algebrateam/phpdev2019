<?php

echo "1. Zadatak - %";

echo "<hr>";

$ime = "Marko";
$prezime = "Drnasin";
echo "2. Zadatak - ";
echo $ime . " " . $prezime;

echo "<hr>";

$a = 5;
echo "3. Zadatak - ";
echo ++$a;
echo ', ';
echo --$a;

echo "<hr>";
$a = (float) $a;
echo "<br>4. Zadatak - ";
echo $a."<br>";
printf('%.2f', $a);

echo "<hr>";

$a = $a + 5;  // ili $a += 5;
echo "5. Zadatak - ";
echo $a;

echo "<hr>";

$a = 7;
$b = 3;

echo "6. Zadatak - ";
echo $a + $b;
echo ', ';
echo $a - $b;
echo ', ';
echo $a * $b;
echo ', ';
echo round($a / $b, 6);
echo ', ';
echo $a % $b;

echo "<hr>";

$a = 4;
$b = 2;
echo "7. Zadatak - ";
echo $a;
echo ", ";
echo $b;
?>