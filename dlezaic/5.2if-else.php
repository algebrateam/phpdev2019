<?php

$a=1;

if($a==1){
    echo "tru je!";
}
else{
    echo "false je!";
}

// Ovo dolje ne valja.
if($a==1)
    echo "tru je!";
else
    echo "false je!"; 



// stranica43, zadnji sivi okvir

$naziv="Algebra";
if (strlen($naziv) >= 10) {
    echo '<hr>Naziv ima više od 10 znakova';
}
else{
    if(strlen($naziv) >=5 && strlen($naziv)<=10){
    echo 'Naziv ima '.strlen($naziv).'znakova';
} else {
    echo '<hr>Naziv je prekratak';
}
}

echo '<hr>Drugi način: <br>';


$naziv="Algebra";
if (strlen($naziv) >= 10) {
    echo '<hr>Naziv ima više od 10 znakova';
}
   elseif(strlen($naziv) >=5 && strlen($naziv)<=10){
    echo 'Naziv ima '.strlen($naziv).'znakova';
} else {
    echo '<hr>Naziv je prekratak';
}


//Kratak uvijet
// (true)?true:false;
$a=3;
$b = ($a>5) ? -1 : 1;
echo $b;

