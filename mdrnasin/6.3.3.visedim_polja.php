<?php

/* 
 */

$ucenici=array(
    array('ime'=>'Ivan', 'prezime'=> 'Ivić'),
    array('ime'=>'Mara', 'prezime'=> 'Marić'),
    array('ime'=>'Pero', 'prezime'=> 'Perić')
);

print_r($ucenici);

foreach ($ucenici as $key => $uc) {
    foreach ($uc as $key => $value) {
        if($key=='prezime'){;
        echo '<br>'.$value;
    }
    }};
    
echo '<hr>';

foreach ($ucenici as $key => $uc) {
    foreach ($uc as $key => $value) {
        if($key=='ime'){;
            continue;;
    }
    echo '<br>'.$value;
    }};