<?php

$naziv = 'algEbRa';
//strtolower smanjuje sva slova na mala
switch (strtolower($naziv)) {
    case 'Algebra':
        
    case 'algebra':
        echo 'naziv je Algera';
        break;
   
    case 'Algera':
        echo 'naziv je Algera';
        break;
   
    default: echo 'naziv je generički';
        break;
}
