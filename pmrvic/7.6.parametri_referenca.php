<?php

/* 
 * Predaja parametara putem refrence
 */

function potencija(&$val){
  //print_r(func_get_args());
 //$val=$val*$val;  --> 3*3=9
// $val*=$val   // mogli smo i ovako
 $val=pow($val, 2);
}
$val=3;
potencija($val);
echo $val;
