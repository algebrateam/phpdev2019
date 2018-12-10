<?php

for($i=0; $i<=10; $i++){
    echo "Vrijednost varijable i=".$i;
    echo "<br>";
}

echo "<hr>";
//parni brojevi 1 ... 10
for($i=2; $i<=10; $i=$i+2){
    echo "Vrijednost varijable i=".$i;
    echo "<br>";
}

echo "<hr>";

//neparni brojevi 1 ... 10
for($i=1; $i<=10; $i=$i+2){
    echo "Vrijednost varijable i=".$i;
    echo "<br>";
}

echo "<hr>";

//neparni brojevi 55 ... 0
for($i=55; $i>=0; $i=$i-2){
    echo "Vrijednost varijable i=".$i;
    echo "<br>";
}

echo "<hr>";

// neparani od 77 osim oni sto su djeljivi sa 7
// 77 .. 0, 75 73 71 ... 0
for($i=77; $i>=0; $i=$i-2){
    if($i%7==0){
        continue;
    }
    $sedam=(string)$i;
    if (strpos($sedam, '7')){
        continue;
    }
    echo "Vrijednost varijable i=".$i;
    echo "<br>";
}

echo "<hr>";
