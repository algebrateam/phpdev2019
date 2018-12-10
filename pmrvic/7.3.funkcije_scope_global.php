<?php

$a=2;

function inc_a(){
  global $a;
  $a++;
  echo $a;
}

inc_a();
 echo $a;
