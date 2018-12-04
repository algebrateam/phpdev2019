<?php

/* 
 *
* */

$polje =array('tesla','edison','bella');

print_r($polje);

for($i = 0; $i < count($polje);$i++){
    echo '<br>Ja sam znanstvenik: ' .$polje[$i];
}


foreach ($polje as $key => $value) {
    echo '<br>Ja sam znanstvenik: ' .$value;
    
}