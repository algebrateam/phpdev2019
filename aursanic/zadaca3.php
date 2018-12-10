<?php
echo "7.8 Zadaci za ponavljanje<br><hr>";
echo "Prvi zadatak:<br><hr>";

function hrvdate($d)
{
    $t = "nepoznati mjesec";
    if ($d == 1) $t = "sijecanj";
    if ($d == 2) $t = "veljaca";
    if ($d == 3) $t = "ozujak";
    if ($d == 4) $t = "travanj";
    if ($d == 5) $t = "svibanj";
    if ($d == 6) $t = "lipanj";
    if ($d == 7) $t = "srpanj";
    if ($d == 8) $t = "kolovoz";
    if ($d == 9) $t = "rujan";
    if ($d == 10) $t = "listopad";
    if ($d == 11) $t = "studeni";
    if ($d == 12) $t = "prosinac";
    return $t;
}

// $t = date('n');
// $d = hrvdate($t);
// echo "$d<br>";

echo hrvdate(date('n'))."<br><br>";

echo "Drugi zadatak:<br><hr>";

function napravi_tablicu($imena, $prezimena)
{
    echo "<table border=\"1\">";
    echo "<tr>";
    echo "<th>Ime</th>";
    echo "<th>Prezime</th>";
    echo "</tr>";
    for ($i = 0; $i < count($imena); $i++)
    { 
        echo "<tr>";
        echo "<td>$imena[$i]</td>";
        echo "<td>$prezimena[$i]</td>"; 
        echo "</tr>";
    }  
    echo "</table>";
}
function napravi_tablicu2($imena)
{
    echo "<table border=\"1\">";
    echo "<tr>";
    echo "<th>Ime</th>";
    echo "<th>Prezime</th>";
    echo "</tr>";
    foreach ($imena as $im) {
      echo "<tr>";
        echo "<td>$im[0]</td>";
        echo "<td>$im[1]</td>"; 
        echo "</tr>";
    }
    echo "</table>";
}

$polje_imena = array("Femto", "Nikica", "Ferdinand");
$polje_prezimena = array("Tarzan", "Torbica", "von Habsburg");
$imena=array();
for ($i=0;$i<count($polje_imena);$i++) {
 // $imena=[['ime1','prezime1'],['ime2','prezime2'],['ime3','prezime3']];
  $imena[]=array($polje_imena[$i],$polje_prezimena[$i]);
}
print_r($imena);
napravi_tablicu($polje_imena, $polje_prezimena);
$imena=[['ime1','prezime1'],['ime2','prezime2'],['ime3','prezime3']];
napravi_tablicu2($imena);
echo "<br>";

echo "Treći zadatak:<br><hr>";


function suma ($a,$b)
{
    return $a + $b;
}

function razlika ($a,$b)
{
    return $a - $b;
}

function  umnozak ($a, $b)
{
    return $a * $b;
}

function  dijeljenje ($a, $b)
{
    return $a / $b;
}

function pozovi_sve()
{
    $a=2;
    $b=2;
echo suma ($a, $b);
echo "<br>";
echo razlika ($a, $b);
echo "<br>";
echo umnozak  ($a, $b);
echo "<br>";
echo dijeljenje ($a, $b);
echo "<br>";
}

pozovi_sve();
echo "<br>";

echo "Četvrti zadatak:<br><hr>";
echo "<br>";

function zad4()
{
    for ($i = 0; $i < func_num_args(); $i++)
    {
        $var = func_get_arg($i); 
        if (is_string($var))
            echo "string ";
        elseif (is_numeric($var))
            echo "broj ";
        else
            echo "nista ";
        echo ' <span style="font-weight:bold">'. gettype($var).'</span> ';
           }
}

zad4(1, "str1", 2, 3, "str2", 1.23);
echo "<br><br>";

echo "8.5 Zadaci za ponavljanje<br><hr>";
echo "Prvi zadatak:<br><hr>";

$name = "zadaca1.php";
$file = fopen($name, 'r');
$text = fread($file, filesize($name));
fclose($file);
echo $text."<br><br>";

echo "Drugi zadatak:<br><hr>";

echo "Treći zadatak:<br><hr>";
