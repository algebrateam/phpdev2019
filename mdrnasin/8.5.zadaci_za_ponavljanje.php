<?php

/**
 *
 */

echo 'Zadatak 1. - Program koji čita sadržaj neke txt datoteke: ';
$filename='kontakt2.txt';
$mode='r';
$handle= fopen($filename, $mode);

$contents = fread($handle, 45);
var_dump($contents);
echo '<br>';
fclose($handle);

echo 'Zadatak 2. - Obrazac koji zapisuje podatak u .txt file: ';


