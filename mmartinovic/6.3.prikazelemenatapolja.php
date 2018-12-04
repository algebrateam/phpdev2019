<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$polje = array('tesla', 'edison', 'bell');
print_r($polje);

for ($i = 0; $i < count($polje); $i++) {
    echo '<br>ja sam znanstvenik ' .$polje[$i];
}


//ispisuje sve elemente (indexe i asocijacije i sve)
$polje = array('tesla', 'amer'=>'edison', 'bell');

foreach ($polje as $key => $value) {
    if(ctype_digit(key)){
        continue;
    }
    echo'<br>ja sam znanstvenik pod ključem'
        .$key 
            .' moje ime je:'
            .$value;
    
}