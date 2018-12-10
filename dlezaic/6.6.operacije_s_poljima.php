<?php

////////
$fruits=[
    0=>'limun',
    'a'=>'naranca',
    1=>'banana',
    'b'=>'jabuka',
    ];
      
    $br=0;
    foreach ($fruits as $key => $value) {
    $br++;
}
echo 'Broj elemenata polja fruits:'.$br;

echo '<br> Pomocu funkcije count():'.count($fruits);


 // ispis zadnjeg elementa;
    foreach ($fruits as $key => $value) {
}
echo '<br>Zadnji element polja je:'.$value;
echo '<br>Zadnji element polja uz funkciju end() je:'.end($fruits);


///6.6.3. Pretraživanje polja

 foreach ($fruits as $key => $value) {
     if($value=='banana'){
         echo '<br>banana se nalazi pod ključem:'.$key;
     }
}

$kljuc= array_search('banana', $fruits);
echo '<br>banana se nalazi pod ključem:'.$kljuc;

echo '<hr>';

// (bool)?true:false
echo (in_array('banana', $fruits))?'Našao':'Nema je';
// drugi način

if(in_array('banana', $fruits)){
    echo '<br>Našao bananu';
}
else{
    echo 'Potraga za bananom je neuspješna';
}


