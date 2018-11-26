<?php

$a = 1;

if ($a == 1) {
    echo "is true";
} else {
    echo "is false";
}
echo '<br>';
if ($a == 1) {
    echo "is true";
}
echo '<br>';
//ovo dolje nemoj raditi, uvijek vitičaste
if ($a == 1) {
    echo "is true";
} else {
    echo "is false";
}

echo '<br>';

$naziv = "Algebra";

if (strlen($naziv) >= 10) {
    echo 'naziv ima više od 10 znakova';
} else {
    if (strlen($naziv) <= 5 && (strlen($naziv) <= 10)) {
        echo "Duzina naziva je u zadanom nizu";
    } else {
        echo "Naziv je prekratak";
    }
}
echo '<br>';
echo "Drugi nacin";

$naziv = "Algebra";

if (strlen($naziv) >= 10) {
    echo 'naziv ima više od 10 znakova';
} else {
    if (strlen($naziv) <= 5 && (strlen($naziv) <= 10)) {
        echo "Duzina naziva je u zadanom nizu";
    } else {
        echo "Naziv je prekratak";
    }
}
echo '<br>';
//kratak uvjet
//(true)?true:false;
$a = 3;
$b = ($a > 5) ? -1 : 1;
echo "$b";
