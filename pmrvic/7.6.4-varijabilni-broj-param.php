<?php

/**
 * varijabilni broj parametara
 */
//function sum($a,$b,$c){  // mora biti min tri argumenta
//  return $a+$b+$c;
//}

function sum() {
  //print_r(func_get_args());
  $rez = 0;
  for ($i = 0; $i < func_num_args(); $i++) {
    $rez += func_get_arg($i);
  }
  return $rez;
}

function zbroj() {
  //print_r(func_get_args());
  $rez = 0;
  foreach (func_get_args()as $value) {
    $rez += $value;
  }
  return $rez;
}

echo sum(4, 7, 18, 2, 3, 4, 5);
echo zbroj(4, 7, 18, 2, 3, 4, 5);
echo sum(4, 7);
