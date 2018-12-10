<?php

/**
 * funkcija prima polje imena i ispisuje ih u html tablicu 
 * 
 * @example path ispis imena (['ivo','mia'])
 * 
 * -> html tablica 2 reda
 * @param array $ucenici polje ucenika
 * @return string html tablica
 */
function ispis_ucenika($ucenik) {
    echo '<table border="1" width="200">';
    
    foreach ($ucenik as $value) {
        echo '<tr>';
        echo '<td>';
        echo $value;

        echo '</td>';
        echo '</tr>';
    }

    echo '</table>';
}
$ucenici=array('marko','janko','filip');
ispis_ucenika($ucenici);