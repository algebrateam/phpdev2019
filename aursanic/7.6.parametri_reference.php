<?php

/* 
 * Predaja parametara
 */

function potencija(&$val){
        //$val=$val*$val; --> 3*3=9
        //4val*=$val  // mogli smo i ovako
        $val=pow($val, 2);

        }
        $val=3;
        potencija($val);
        echo$val;
        