<?php

/* Pitanje: Zašto kada otvorim file slova s kvačicama napiše
 * poput "sluÅ¾i"? "sluÅ¾i" označava riječ "služi"
 * link od Inchooa: http://inchoo.hr/php-vodic/
 */

//Prvi zadatak
$ime = "Filip";
$prezime = "Mudri";

//crveni uskličnik se makne kada obrišem drugi navodnik kod .$prezime?
echo '.$ime. .$prezime.';
echo '<br>';


//Drugi zadatak
$a = 5;

echo ++$a;
echo '<br>';

echo --$a;
echo '<br>';

//Treći zadatak
//ovo sam pronašao na internetu
$a = number_format((float)$a, 5, '.', '');

echo $a;
echo '<br>';


//Četvrti zadatak
$b = $a + 5;

echo $b;
echo '<br>';


//Peti zadatak
$c = 7;
$d = 3;

echo $c + $d;
echo '<br>';

echo $c - $d;
echo '<br>';

echo $c * $d;
echo '<br>';

echo $c / $d;
echo '<br>';

echo $c % $d;
echo '<br>';


//Šesti zadatak
$e = 4;
$f = 2;

echo $e + $f;
echo '<br>';

echo $e - $f;
echo '<br>';

echo $e * $f;
echo '<br>';

echo $e / $f;
echo '<br>';

echo $e % $f;
echo '<br>';


