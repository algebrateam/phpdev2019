<?php

/* 
 *
 */

$polje =array('tesla','edison','bella');

print_r($polje);

for ($i = 0; $i < count($polje); $i++) {
  echo '<br>ja sam znanstvenik:'.$polje[$i];
}

$polje =array('tesla','amer'=>'edison','bella');

print_r($polje);
// ne mogu ispisivati asocijativnio polje ovom petljom
//for ($i = 0; $i < count($polje); $i++) {
//  echo '<br>ja sam znanstvenik:'.$polje[$i];
//}

foreach ($polje as $key => $value) {
  if(ctype_alpha($key)){
    continue;
  }
  echo '<br>ja sam znanstvenik pod ključem:'
  .$key
    .', moje ime je:'
  .$value;
  
  
}
