<?php

$a=0.0000000000000000000001;

if( $a>0  && $a<10 ){
  echo 'broj je u trazenom nizu';
}
 else {
  echo 'broj je van niza';  
}


$a=0;
$b=-2;
if($a>0 || $b<0){
  echo 'broj je u trazenom nizu';
}
 else {
  echo 'broj je van niza';  
}