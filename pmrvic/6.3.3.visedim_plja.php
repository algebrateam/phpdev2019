<?php

$ucenici=array(
  array('ime'=>'Ivan', 'prezime'=>'Ivić'),
  array('ime'=>'Mara', 'prezime'=>'Marić'),
  array('ime'=>'Pero', 'prezime'=>'Perić'),
);

print_r($ucenici);

echo '<hr>';

foreach ($ucenici as $key => $uc) {
  foreach ($uc as $key => $value) {
    // prvi način
    if($key=='prezime'){
    echo '<br>'.$value;
    }
  }
}

echo '<hr>';

foreach ($ucenici as $key => $uc) {
  foreach ($uc as $key => $value) {
    // drugi način
    if($key=='ime'){
      continue;
    }
    echo '<br>'.$value;
  }
}