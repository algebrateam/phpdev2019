<?php

/**
 *
 */
echo 'Zadatak 1. - Program koji čita sadržaj neke txt datoteke: ';
$filename = 'kontakt2.txt';
$mode = 'r';
$handle = fopen($filename, $mode);

$contents = fread($handle, 45);
var_dump($contents);
echo '<br>';
fclose($handle);

echo 'Zadatak 2. - Obrazac koji zapisuje podatak u .txt file: ';

echo '<form method="POST">'
 . 'Text: <input name="text"/><br>'
 . '<input type="submit" name="Pošalji" value="Pošalji"/><br>';

if(isset($_POST["Pošalji"])){
    $filename='text.txt';
    $handle= fopen($filename, 'a+');
    fwrite($handle, $_POST["text"]);
    fclose($handle);
}

echo 'Zadatak 3. - Program preko kojeg korisnik dohvaća sadržaj, uređuje ga i ponovno sprema: <br>';

$filename="text.txt";

echo '
<form method="POST">
Text: <textarea name="text">';

 $file= file($filename);
foreach ($file as $line_num => $linija) {
    echo $linija."\n";
}

echo'
</textarea><br>
<input type="submit" name="spremi" value="Spremi"/>
</form>';

if(isset($_POST["spremi"])){
    $handle= fopen($filename, "a+");
    fwrite($handle, $_POST["text"]);
    fclose($handle);
}
