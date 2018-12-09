<?php

$nazev = 'albREgla';

switch (strtolower($nazev)) {
  case 'algebra':  
  
  case 'albregla':
    echo 'naziv je Algebra';
    break;  
  
  case 'algera':
    echo 'naziv je algera';
    break;
  
  default: echo 'naziv je neki generički';
    break;
}

