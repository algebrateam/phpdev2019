<?php

/**
 * 
 */
function hr_mjesec($mjesec) {
    switch ($mjesec) {
        case 0: return'Prosinac';
        case 2: return'Sjecanj';
        case 3: return'Veljaca';
        case 4: return'Ozujak';
        case 5: return'Travanj';
        case 6: return'Svibanj';
        case 7: return'Lipanj';
        case 8: return'Srpanj';
        case 9: return'Kolovoz';
        case 10: return'Rujan';
        case 11: return'Listopad';
        case 12: return'Studeni';

        default:
            break;
    }
}

echo'Zadatak 1. - Ispis trenutnog mjeseca na hrvatskom (napisan rijecima): ';
echo hr_mjesec(date('F'));
echo '<hr>';

echo'Zadatak 2. - Ispis HTML tablice imena i prezimena ucenika: ';

function ispis_imena($ucenici) {
    echo '<table border="2">';
    foreach ($ucenici as $value) {
        echo '<tr>';
        echo '<td>';
        echo $value;
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
}

$ucenici = array('Ivan Ivić', 'Petar Perić', 'Damir Senković');
ispis_imena($ucenici);
echo '<hr>';

echo"Zadatak 3. - Funkcije za zbrajanje, razliku, umnožak i dijeljenje varijabli 2 i 9 :";
echo '<br>';

function zbroj($a, $b) {
    return $a + $b;
}

function raz($a, $b) {
    return $a - $b;
}

function umnoz($a, $b) {
    return $a * $b;
}

function dije($a, $b) {
    return $a / $b;
}

function sve($a, $b) {
    echo 'Zbroj varijabli je: ' . zbroj($a, $b) . '<br>';
    echo 'Razlika varijabli je: ' . raz($a, $b) . '<br>';
    echo 'Umnožak varijabli je: ' . umnoz($a, $b) . '<br>';
    echo 'Količnik varijabli je: ' . dije($a, $b) . '<br>';
}

$c = 2;
$d = 9;

sve($c, $d);

echo '<hr>';

echo'Zadatak 4. - Funkcije koja prima varijabilni broj parametara i ispisuje kojeg je tipa: ';
echo '<br>';

function ispis_param(){
    $params= func_get_args();
    foreach ($params as $value) {
        if(is_int($value)){
            echo "$value je broj <br>";
        }else{
            echo "$value je string <br>";
        }
    }
}

echo ispis_param('Marko', 4, 'Nevenka', 'Blaženko', 12);