<?php
/*
 * polja
 */
$polje=array('Tesla', 'edison', 'bell');

//echo $polje; ne može ispisati polje

print_r($polje); //može ispisati (debugger)

var_dump($polje); //također može ipsisati, malo napredniji

//dodajemo jedan element;
$polje[]='Benjamin Franklin';

print_r($polje); //može ispisati (debugger)

var_dump($polje);



//dodajemo jedan element;
array_push($polje, 9876);

print_r($polje); //može ispisati (debugger)

var_dump($polje);



//dodajemo jedan element;
$polje[5]='Newton';

print_r($polje); //može ispisati (debugger)

var_dump($polje);



//dodajemo jedan element;
$polje['auto']='Fiat';

print_r($polje); //može ispisati (debugger)

var_dump($polje);

//dodavanje u polje sa asocijacijama
$polje=array_merge($polje,['bicikl'=>'Trek','Fuji'],array('motor'=>'yamaha'));
print_r($polje); //može ispisati (debugger)

var_dump($polje);


//ispis
echo "<hr>";
echo 'Auto je:'.$polje['auto'];
echo 'Bicikl je:'.$polje['bicikl'];
echo "<hr>";

$boja=[
    'red'=>'rgb(255,0,0)',
    'green'=>'rgb(0,255,0)',
    'blue'=>'rgb(0,0,255)',
    'lightblue'=>'#0000FF'
];
echo "<span style='color:".$boja['lightblue']."'>Ovo je plavi tekst</span>";