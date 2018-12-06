<?php

/**
 * Funkcija prima polje imena i 
 * ispisuje ih u html tablicu
 * 
 * @example ispis_imena(['ivo','mia']) 
 * -> html tablica dva reda
 * @param array $ucenici Polje učenika
 * @return string HTML tablica
 */
function ispis_imena($uc){
  echo '<table border="1">';
  foreach ($uc as $value) {
    echo '<tr>';
    echo '<td>';
    echo $value;
    echo '</td>';
    echo '</tr>';
  }
  echo '</table>';
}
$ucenici=array('Marko','Janko','FIlip');
ispis_imena($ucenici);