<?php

$a = 1;

if ($a == 1) {
    echo "istina je!";
} else {
    echo "nije istina!";
}

if ($a == 1) {
    echo "istina je!";
}

//stranica 43, zadnji sivi okvir

$naziv = "Algebra";
if (true) {
    echo 'naziv ima više od 10 znakova';
}
//strlen je funkcija koja broji znakove
$naziv = "Algebra";
if (strlen($naziv) >= 10) {
    echo 'naziv ima više od 10 znakova';
} else {
    if (strlen($naziv) >= 5 && strlen($naziv) <= 10) {
        echo 'naziv ima '
        . strlen($naziv)
        . ' znakova';
    } else {
        echo '<hr>naziv je prekratak';
    }
}

        echo '<hr>Drugi način: <br>';
        $naziv = "Algebra";
if (strlen($naziv) >= 10) {
    echo 'naziv ima više od 10 znakova';
} 
    elseif (strlen($naziv) >= 5 && strlen($naziv)
            <= 10) {
        echo 'naziv ima '
        . strlen($naziv)
        . ' znakova';
    } else {
        echo '<hr>naziv je prekratak';
    }

    //Kratko uvijet
    // (true)?true:false;
    //upitnik postavlja pitanje na koje onda ovo dalje daje odgovor (true:false)
    $a=3;
    $b = ($a>5) ? -1 : 1;
    echo $b;
        


