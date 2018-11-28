<?php

$polje=array('Tesla','Edison','Bell');
print_r($polje);

for ($i = 0; $i < count($polje); $i++) {
    echo '<br>Ja sam znanstvenik '.$polje[$i];
}

$polje=array('Tesla','Edison','Bell');
print_r($polje);

foreach ($polje as $key => $value) {
    echo '<br>Ja sam znanstvenik: ključ:.$key '.$polje[$i];
}
    
