<?php

/**
 * break prekida izvršavanje petlje i izlazi na kraj tijela
 * 
 * 
 * continue -> prekida izvršavanje, i vraća na početak
 * 
 */

echo "<hr>Primjer break<br>";
$counter=1;
$x=0;
$y=0;
while ($x<=15){
    while($y<=10){
        echo "coord: ".$x.' '.$y.'('.$counter.')<br>';
           $y++;
           $counter++;
           if($counter>110){
               break 2;
           }
    }
    $y=0;
    $x++;
}
