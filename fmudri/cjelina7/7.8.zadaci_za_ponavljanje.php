<?php

/* funkcija koja vraća hrvatski naziv za trenutačni mjesec. Parametar
 * koji se proljeđuje funkciji je rezultat funkcije date('n)
 */

echo "Prvi zadatak:<br />";

function mjeseci($mjesec) {
    $mjesec_array = array();
    $mjesec_array[1] = "Siječanj";
    $mjesec_array[2] = "Veljača";
    $mjesec_array[3] = "Ožujak";
    $mjesec_array[4] = "Travanj";
    $mjesec_array[5] = "Svibanj";
    $mjesec_array[6] = "Lipanj";
    $mjesec_array[7] = "Srpanj";
    $mjesec_array[8] = "Kolovoz";
    $mjesec_array[9] = "Rujan";
    $mjesec_array[10] = "Listopad";
    $mjesec_array[11] = "Studeni";
    $mjesec_array[12] = "Prosinac";
    return $mjesec_array[$mjesec];
}

$mjesec = date('n');

echo mjeseci($mjesec);

echo '<hr>';
echo "Drugi zadatak:<br />";

/* Napišite funkciju koja ispisuje HTML tablicu imena i prezimena učenik. 
 * Kao parametar joj se prosljeđuje polje s imenima i prezimenima
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

$ucenici = array('marko markic', 'janko jankic', 'filip filipovic');
ispis_ucenika($ucenici);


echo '<hr>';
echo "Treći zadatak:<br />";

/* Napišite funkcije za zbrajanje, razliku, množenje i dijeljenje dva broja.
 * Zatim napišite funkciju koja će povezivati sve funkcije odjednom
 */

function zbrajanje($a, $b) {
    return $a + $b;
}

function oduzimanje($a, $b) {
    return $a - $b;
}

function mnozenje($a, $b) {
    return $a * $b;
}

function dijeljenje($a, $b) {
    return $a / $b;
}

function zajedno($a, $b) {
    echo zbrajanje($a, $b);
    echo oduzimanje($a, $b);
    echo mnozenje($a, $b);
    echo dijeljenje($a, $b);
}

$i = 5;
$j = 10;

zajedno($i, $j);



/*Napišite funkciju koja prima varijabilni broj parametra. Parametri su
 * kombinirani brojevi i stringovi. Za svaki parametar ispišite kojeg je tipa
 */
echo '<hr>';
echo "Četvrti zadatak:<br />";

echo "ovo ne znam";