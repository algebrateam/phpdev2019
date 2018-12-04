<?php
/**
 * break prekida izvršavanje petlje i 
 * izlazi na kraj tijela
 * 
 * continue  -> prekida izvršavanje, i vraća
 * na početak
 * 
 * 
 */
echo "<hr>Prmjer break<br>";
$counter=1;
$x=1;
$y=1;
while($x<=1500){
  while($y<=10){
    echo "coord: "
      .$x.' '.$y.'='
      .($x*$y).' ('.$counter.')<br>'; 
    $y++;
    $counter++;
    if($counter>110){
      break 2;
    }
  } 
  $y=0;
  $x++;
}
