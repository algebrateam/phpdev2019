<?php

/* 
pola
 */

$polje=array('tesla','edison','bell'); //
//$polje=['tesla','edison','bell'];  može i ovako
$polje=['prvi'=>'tesla','edison','treci'=>'bell'];
//echo $polje;  ne može se ispisivazi polje na ovaj način

//print_r($polje);  // debugger
//var_dump($polje);

// dodajemo jedan element:
$polje[]='Benjamin Franklin';
//print_r($polje);  // debugger
//var_dump($polje);

// dodajemo jedan element samo vrijednost NE MOŽE ASOCIJACIJA
array_push($polje, 9876);
//print_r($polje);  // debugger
//var_dump($polje);

// dodajemo jedan element:
$polje[55]='Newton';
//print_r($polje);  // debugger
//var_dump($polje);

// dodajemo jedan element UZ ASOCIJACIJU
$polje['auto']='Fiat';
//print_r($polje);  // debugger
//var_dump($polje);


// dodavanje u polje sa asocijacijama
$polje=array_merge($polje,['bicikl'=>'Trek','Fuji'],array('motor'=>'yamaha'));
print_r($polje);  // debugger
//var_dump($polje);

// ISPIS
echo "<hr>";

echo 'Auto je:'. $polje['auto'];
echo 'Bicikl je:'. $polje['bicikl'];

// ISPIS
echo "<hr>";

$boja=[
  'red'=>'rgb(255,0,0)',
  'green'=>'rgb(0,255,0)',
  'blue'=>'rgb(0,0,255)',
  'lightblue'=>'#0000FD'
];
echo "<span style='color:".$boja['lightblue']."'>OVO JE PLAVI TEXT<span>";



