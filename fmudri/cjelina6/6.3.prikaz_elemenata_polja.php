<?php
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