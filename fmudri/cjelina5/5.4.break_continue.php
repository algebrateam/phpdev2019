<?php
/*
 * Ispiši sve brojeve od 1 do 100
 * preskoči sve djeljive s 13
 * ukoliko naletiš na 84, prekini izvršavanje
 * 
 */

$x = 1;
while($x<=100){
    
    if($x==84){
        break;
    }
    if($x%13==0){
        echo ' <span style="color:blue;">'.$x.'</span>';
        $x++;
        continue;
    }
    echo ' '.$x;
    $x++;
}

//dvostruki continue
$x=0;
$y=0;
while($x<=10){ //prva petlja
    $x++;
    if($y==5){
        $y=0;
    }
    while($y<=10){ //druga petlja
        echo '<br> ('.$x.' '.$y.')';
        if($y==5) {
            continue 2; //vrati me na prvu petlju
        }
        $y++;
    }
}

/*
 * Ispis
 * (1 0)
(1 1)
(1 2)
(1 3)
(1 4)
(1 5)
(2 0)
(2 1)
(2 2)
(2 3)
(2 4)
(2 5)
(3 0)
(3 1)
(3 2)
(3 3)
(3 4)
(3 5)
(4 0)
(4 1)
(4 2)
(4 3)
(4 4)
(4 5)
(5 0) <-- resetiramo y ako je x=5
(5 1)
(5 2)
(5 3)
(5 4)
(5 5)
(6 0)
(6 1)
(6 2)
(6 3)
(6 4)
(6 5)
(7 0)
(7 1)
(7 2)
(7 3)
(7 4)
(7 5)
(8 0)
(8 1)
(8 2)
(8 3)
(8 4)
(8 5)
(9 0)
(9 1)
(9 2)
(9 3)
(9 4)
(9 5)
(10 0)
(10 1)
(10 2)
(10 3)
(10 4)
(10 5)
(11 0)
(11 1)
(11 2)
(11 3)
(11 4)
(11 5)
 */