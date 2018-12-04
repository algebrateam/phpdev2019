<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$a = 1;
if (true) {
    echo "tru je";
} else {
    echo "false je";
}
echo "<br>"; //uvijek pisat viticasti zagrada
if ($a == 1)
    echo "tru je";
else
    echo "false je";

echo "<hr>";

//str 43 zadnji sivi okvir

$naziv = "algebra";
if (strlen($naziv) >= 10) {
    echo "naziv ima vise od 10 znakova ";
} else {
    echo "naziv ima " . strlen($naziv) . " znakova";
}




echo "<hr>";
if (strlen($naziv) >= 10) {        //ugnjezdeni if else
    echo "naziv ima vise od 10 znakova ";
} else {
    if (strlen($naziv) >= 5 && strlen($naziv) <= 10) {

        echo "naziv ima " . strlen($naziv) . " znakova";
    } else {
        echo "naziv je prekratak";
    }
}

echo "<hr> drugi nacin <br>";



if (strlen($naziv) >= 10) {        //ugnjezdeni if else
    echo "naziv ima vise od 10 znakova ";
}  
    elseif (strlen($naziv) >= 5 && strlen($naziv) <= 10) {

        echo "naziv ima " . strlen($naziv) . " znakova";
    } else {
        echo "naziv je prekratak";
    }

    
 echo "<hr>";  //kratak uvijet
 //(true)?true;false;
 $a = 3;
 $b = ($a>5) ? - 1 : 1 ;
 echo $b;
 
 echo "<hr>";

 
 