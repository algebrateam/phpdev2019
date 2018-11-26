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
for($i=1;$i<=120;$i++){
    echo"a";
}
//
//

$ime=null;
If(isset($ime)){
    echo "isset<br> ";
}

$ime='';
If(isset($ime)){
    echo "isset<br>";
}

if($ime==''){
    echo "ime je praznina<br>"
}

























      



