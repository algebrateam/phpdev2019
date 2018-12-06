<?php

/**
 * Pisanje u datoteke fopen()
 */

//$filename=__DIR__.'\..\mdrnasin\kontakt.txt';
//$filename='C:\Users\pmrvic\Code\phpdev2019\mdrnasin\kontakt.txt';
$filename='ucenici.txt';
$handle= fopen($filename, 'w');  // modovi r,r+,w,w+,a,a+
fwrite($handle, 'xxxxMarko MArkic 1'.PHP_EOL);
fwrite($handle, 'xxxMarko MArkic 2'.PHP_EOL);
fwrite($handle, "xxxMarko MArkic 2 \n");
fclose($handle);




