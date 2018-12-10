<?php

/**
 * Čitanje iz datoteke fopen()
 */

//$filename=__DIR__.'\..\mdrnasin\kontakt.txt';
//$filename='C:\Users\pmrvic\Code\phpdev2019\mdrnasin\kontakt.txt';
$filename='..\mdrnasin\kontakt.txt';
$handle= fopen($filename, 'r');
var_dump($handle);
$contents=fread($handle,11);
$contents=fread($handle,11);
var_dump($contents);
echo 'trenutno se nalazim na '.ftell($handle).' znaku u datoteci';

fseek ($handle ,30); // pomiče pointer za 30 znakova
$contents=fread($handle,11);
var_dump($contents);
echo 'trenutno se nalazim na '.ftell($handle).' znaku u datoteci';


