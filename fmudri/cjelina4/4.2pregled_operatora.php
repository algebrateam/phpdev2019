<?php
/*
 * Operatori
 * aritmetički + - * / modulo(%)
 */
echo "<hr>aritmetiÄ�ki + <br>";
echo 2+3;
echo "<hr>aritmetiÄ�ki - <br>";
echo 2-3;
echo "<hr>aritmetiÄ�ki * <br>";
echo 2*3;
echo "<hr>aritmetiÄ�ki / <br>";
echo 2/3;
//ostatak kod dijeljenja
echo "<hr>aritmetiÄ�ki % <br>";
echo 16%3;
echo '<br>';
/**
 * operatori
 * nastavljanje nizova
 */
"<hr>operator .<br>";
$ime='Nikola';
$prezime='Tesla';
echo $ime.', '.$ime.' '.$prezime;
if(isset($ime)) {
    echo "ime je postavljeno<br>";
}
//uskličnik označava suprotnost
$ime=null;
if (!isset($ime)) {
    echo"isset<br>";
}
$ime='';
if(!isset($ime)) {
 echo "isset<br>";   
}
if($ime=='') {
 echo "ime je praznina<br>";   
}
if(is_null($ime)) {
    echo "ime je NULL<br>";
}