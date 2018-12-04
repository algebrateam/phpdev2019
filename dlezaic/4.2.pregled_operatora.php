<?php

/**
 * Operatori
 * aritmetički + - * / modulo (%)
 */

echo"<hr>aritmetički + <br>";
echo 2+3;
echo"<hr>aritmetički - <br>";
echo 2-3;
echo"<hr>aritmetiči * <br>";
echo 2*3;
echo "<hr>aritmetički / <br>";
echo 2/3;
echo"<hr>aritmetički % <br>";
echo 16%3;


/**
 * Operatori
 * nastavljanje nizova
 */

"<hr><br>operator .<br>";
$ime='Nikola';
$prezime='Tesla';
echo $ime.', '.$ime.' '.$prezime;
if(isset($ime)){
    echo "Ime je postavljeno<br>";
}

//
$ime=null;
if(!isset($ime)){
    echo "isset<br>";
}
$ime='';
if(!isset($ime)){
    echo "isset<br>";
}

if($ime==''){
    echo "Ime je praznina<br>";
}

if(is_null($ime)==''){
    echo "Ime je NULL<br>";
}

