
<?php

/*
 * Osnovni tipovi:
 * int, char, string, array, Null
 */
/*
 * deklariranje i definiranje nije isto, deklaracija je sami "var", 
 * a definiranje je "5". "if" je funkcija. Paramteri funkcija nalaze se u
 * okruglim zagradama.
 */
$var = 5;
if (is_float($var)) {
    echo "varijabla je decimalni";
} else {
    echo "varijabla nije float/decimalni";
}
echo "<hr>";
if (is_int($var)) {
    echo "varijabla je cjelobrojna vrijednost";
} else {
    echo "varijabla nije int";
}
echo "<hr>";
/*
 * jedan "=" dodjeljuje vrijednost, dva "==" uspoređuje
 */
$nekoIme = "Algebra";
$nekoDrugoIme = 'Algebra1';
if ($nekoIme != $nekoDrugoIme) {
    echo "ove dvije varijable su jednake";
} else {
    echo "ove dvije varijable su nejednake";
}
echo "<hr>";
// komentar
# isto komentar
// Polje
$polje = [1, 2.2, 3, 3.2, $nekoDrugoIme, $var, false, true, true, "bla",
    'Skola' => 'Algebra'];
echo "<pre>";

print_r($polje);

echo $polje[4];
echo $polje['Skola'];
echo "</pre>";
