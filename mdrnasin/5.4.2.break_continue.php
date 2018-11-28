<?php

/*ispisi sve brojeve 1 ... 100
 * preskoci sve djeljive s 13
 * ukoliko naletiš na 84 prekini izvršavanje
 */

$x=1;

while($x<=100){
    if($x==84){
        break;
    }
    if($x%13==0){
        echo ' ' .$x;
        $x++;
        continue;
    }
    echo ' ' .$x;
    $x++;
}

/* dvostruki continue*/
echo "<hr>";

$x=0;
$y=0;

while($x<10){
    $x++;
    if($x==5){
        $y=0;
    }
    while($y<10){
        echo '<br> (' .$x.' '.$y.')';
        if($y==5){
            continue 2;
        }
        $y++;
    }
}

/*
 * ispis
(1 0)
(1 1)
(1 2)
(1 3)
(1 4)
(1 5)
(2 5)
(3 5)
(4 5)
(5 0)
(5 1)
(5 2)
(5 3)
(5 4)
(5 5)
(6 5)
(7 5)
(8 5)
(9 5)
(10 5)
 */