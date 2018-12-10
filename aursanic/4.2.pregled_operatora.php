<?php



/* 
 *operatori
 * *aritmetički + - + / modulo %
 */



echo "<hr>aritmetički + <br>";
echo 2+3;
echo "<hr>aritmetički - <br>";
echo 2-3;
echo "<hr>aritmetički * <br>";
echo 2*3;
echo "<hr>aritmetički / <br>";
echo 2/3;
echo "<hr>aritmetički % <br>";
echo 16%3;

/**
 * *operatori
 * *nastavljanje nizova
 */



$ime="Nikola";
$prezime="Tesla";

echo $ime.', '.$ime.' '.$prezime;
If(isset($ime)){
    echo "ime je postavljeno";
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
  echo "ime je praznina<br>";
}
if(is_null($ime)){
  echo "ime je NULL<br>";
}





















      



