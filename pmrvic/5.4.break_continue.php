<?php

/* 
 * ispisi sve brojeve  od 1 ... 100
 * preskoci sve djeljive sa 13
 * ukolik naletis na 84 prekini izvrsavanje
 * 
 */

$x=1;
while($x<=100){
  
  if($x==84){
        echo ' <span style="color:#ff99ff;font-weight: bold;">'.$x.'</span>';
  break;
  }
  if($x%13==0){
    echo ' <span style="color:blue;font-weight: bold;">'.$x.'</span>';
    $x++;
    continue;
  }
  echo ' '.$x;
  $x++;
}

echo "<hr>";
// dvostruku continue
$x=0;
$y=0;
while($x<10){  // prva petlja
  $x++;
  if($x==5){
    $y=0;
  }
  while($y<=10){  // druga petlja
    echo '<br> ('.$x.' '.$y.')';
    if($y==5){
      continue 2;  // vrati me na prvu pelju
    }
    $y++;
  }
}

/**
 * ISPIS:
(1 0)
(1 1)
(1 2)
(1 3)
(1 4)
(1 5)
(2 5)
(3 5)
(4 5)
(5 0)  <-- resetiramo y ako je x=5
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