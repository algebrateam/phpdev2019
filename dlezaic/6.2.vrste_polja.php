<?php

/* 
 * polja
 * 
 */

$polje=array('tesla', 'edison', 'bell');

//echo $polje; ne može se ispisivati polje na ovaj način

print_r($polje);  // debugger

var_dump($polje);

//dodajemo jedan element:
$polje[]='Benjamin Franklin';
print_r($polje); //debugger
var_dump($polje);

//dodajemo jedan element:
array_push($polje, 9876);
print_r($polje); //debugger
var_dump($polje);

//dodajemo jedan element
$polje[55]='Newton';
print_r($polje); //debugger
var_dump($polje);

// dodajemo jedan element uz asocijaciju
$polje['auto']='Fiat';
print_r($polje); //debugger
var_dump($polje);


print_r($polje); //debugger
var_dump($polje);


//ISPIS
echo "<hr>";

echo 'Auto je:'.$polje['auto'];

//ISPIS
echo "<hr>";

$boja=[
    'red'=>'#rgb(255,0,0)',
    'green'=>'#rgb(0,255,0)',
    'blue'=>'#rgb(0,0,255)',
    'lightblue'=>'#0000FD'
];
echo "<span style='color:".$boja.['lightblue']."'Ovo je plavi tekst<span>";












