<?php

////////////////////
$fruts=[
  0  =>'limun',
  'a'=>'naranca',
  1  =>'banana',
  'b'=>'jabuka',
  ];

$br=0;
  foreach ($fruts as $key => $value) {
   $br++; 
}
echo 'broj elemenata polja fruits: '.$br;

echo '<br> pomocu funkcije count():'.count($fruts);


// ispis zadnjeg elementa;
foreach ($fruts as $key => $value) {
}
echo '<br>zadnji element polja je:'.$value;
echo '<br>zadnji element '
. 'polja uz funkciju end() je:'.end($fruts);

/// 6.6.3 Pretraživanje polja
foreach ($fruts as $key => $value) {
  if($value=='banana'){
    echo '<br>banana se nalazi pod ključem:'.$key;
  }
}

$kljuc= array_search('banana', $fruts);
echo '<br>array_search() banana se nalazi pod ključem:'.$kljuc;
echo '<hr>';


//   (bool)?true:false;
echo (in_array('narančča',$fruts))?'Našao':'Nema je';

// drugi način

if(in_array('bananna',$fruts)){
  echo '<br>Našao bananu';
}
else{
  echo '<br>Potraga za bananom je neuspješna';
}

// drugi način

if(in_array(['ban','ana'],$fruts)){
  echo '<br>Našao bananu';
}
else{
  echo '<br>ARR IN ARR Potraga za bananom je neuspješna';
}
