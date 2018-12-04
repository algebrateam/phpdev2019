<?php

/* 
 */

$fruits=[
    0   =>'limun',
    'a' =>'naranča',
    1   =>'banana',
    'b' =>'jabuka',
    ];

$br=0;
    foreach ($fruits as $key => $value) {
    $br++;
}
echo 'Broj elemenetata polja: '.$br;

echo '<hr> Pomocu funkcije conut(): ';

echo '<hr>';

//ispis zadnjeg elementa polja

foreach ($fruits as $key => $value) {
    
}
echo $value;
echo "<br> Zadnji element" .'polja uz funkciju() end:' .end($fruits);

//pretraživanje polja

foreach ($fruits as $key => $value) {
    if($value=='banana'){
        echo '<br>Banana se nalazi pod ključem:' .$key;
    }
}

$kljuc= array_search('banana', $fruits);
echo '<br>array_search() Banana se nalazi pod ključem:' .$kljuc;

//(bool)?true:false
echo '<br>';
echo (in_array('banana', $fruits))?'Našao':'Nema je';

//drugi nacin
echo '<br>';
if(in_array('banana', $fruits)){
    echo 'Našao bananu';
}else{
    echo 'Nema banane';
}

echo '<br>';
if(in_array('banana', $fruits)){
    echo 'Našao bananu';
}else{
    echo 'Nema banane';
}