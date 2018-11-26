<?php
/* 
 * operatori
 * srihmeticki + - * / modluo(%)
 */

echo "<hr>arihmeticki + <br>";
echo 2+3;
echo "<hr>arihmeticki - <br>";
echo 2-3;
echo "<hr>arihmeticki * <br>";
echo 2*3;
echo "<hr>arihmeticki / <br>";
echo 2/3;
echo "<hr>arihmeticki % <br>";
echo 16%3;
echo "<hr>";

/* operatori
 * nastavljanje nizova
 */
"<br><hr>operator .<br>";
$ime='nikola';
$prezime='tesla';
echo $ime.',  '.$ime.' '.$prezime;

echo "<hr>";
/*neka vjezba
 * 
 */

if(isset($ime)){
    echo "ime je postavljeno";
    
}
$ime=null;
if(!isset($ime)){
    echo "isset<br>";
}
$ime='';
if(!isset($ime)){
    echo "isset<br>";
}
if($ime==''){
    echo "ime je preznina<br>";
}
if(is_null($ime)){
    echo "ime je NULL<br>";
}


    
   