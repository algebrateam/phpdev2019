<?php

$a = 1;

if ($a == 1) {
  echo "tru je !";
} else {
  echo "false je !";
}


// Ovo dolje nemojte. stavljaj vičitaste
if ($a == 1)
  echo "tru je !";
// echo "tru je !";
else
  echo "false je !";


// stranica43, zadnji sivi okvir

$naziv = "Alge";
if (strlen($naziv) > 10) {
  echo '<hr>naziv ima više od 10 znakova';
} else {
  if (strlen($naziv) >= 5 && strlen($naziv) <= 10) {
    echo '<hr>naziv ima '
    . strlen($naziv)
    . ' znakova';
  } else {
    echo '<hr>naziv je prekratak';
  }
}

echo '<hr>Drugo način: <br>';
$naziv = "Alge";
if (strlen($naziv) > 10) {
  echo '<hr>naziv ima više od 10 znakova';
} elseif (strlen($naziv) >= 5 && strlen($naziv) <= 10) {
  echo '<hr>naziv ima '
  . strlen($naziv)
  . ' znakova';
} else {
  echo '<hr>naziv je prekratak';
}

// Kratak uvijet
// (true)?true:false;
$a = 3;
$b = ($a > 5) ? 'be je istina' : 'be nije istina';
echo $b;













