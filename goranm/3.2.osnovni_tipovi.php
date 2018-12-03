<?php

/* 
 * Osnovni tpovi:
 * int, char, string, array, NULL ...
 */
$var=5;
if(is_float($var)){
  echo "varijabla je decimalni";
}else{
  echo "varijabla nije float/decimalni";
}
echo "<hr>";
if(is_int($var)){
  echo "varijabla je cjelobrojna vrijednost";
}else{
  echo "varijabla nije int";
}
echo "<hr>";

$nekoime="Algebra";
$nekodrugoime='Algebra1';

if($nekoime!=$nekodrugoime){
  echo "Ove dvije varijable su nejednake";
}else
{
  echo "Ove dvije varijable su jednake";
}

// komentar

# isto komentar

/*
 * Blok komentar
 */

// Polje

$polje=[1,2.2313,"bla", 12,2.12,false,true, true     ,false,"#","//",$nekodrugoime,$var,'Skola'=>'Algebra'];
echo "<pre>";
print_r($polje);

echo $polje[2];

echo $polje['Skola'];
echo "</pre>";






