<?php

$polje=array('Tesla','Edison','Bell');

print_r($polje); //debugger

echo "<hr>";

var_dump($polje);

echo "<hr>";

$polje[]='Benjamin Franklin';

var_dump($polje);

//array push
echo "<hr>";

array_push($polje, 9876);

var_dump($polje);

// dodajemo direktno
echo "<hr>";

$polje[5]='Newton';

var_dump($polje);

// asocijativno polje
echo "<hr>";

$polje['auto']='Fiat';

var_dump($polje);

//ispis


