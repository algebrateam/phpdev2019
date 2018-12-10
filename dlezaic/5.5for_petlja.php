<?php

/* 
 * for petlja brojevi 1....10
 */

for($i = 1; $i <= 10; $i++){
    echo ' '.$i;
}
echo '<hr>';

/* 
 * for petlja parni brojevi 1....10
 * 2,4,6,8,10
 */

for($i = 2; $i <= 10; $i+=2){
    echo ' '.$i;

}


echo '<hr>';
/* 
 * for petlja neparni brojevi 1....10
 * 1 3 5 7 9
 */

for($i = 1; $i <= 9; $i+=2){
    echo ' '.$i;
}

echo '<hr>';
/* 
 * for petlja neparni brojevi 55....0
 * 55 53 51 49...0
 */

for($i = 55; $i >= 0; $i-=2){
    echo ' '.$i;
}

echo '<hr>';
/* 
 * for petlja neparni brojevi osim djeljivi sa 7
 *  77....0
 * 75 73 71 69...0 sve osim 7, 14, 70, 77...
 * 
 */

for($i = 77; $i >= 0; $i-=2){
    if($i%7==0){
        continue;
    }
    $sedam=(string)$i;
    if(strpbrk($sedam,'7')!=0){
        continue;
    }
    echo ' '.$i;
}


echo '<hr>';
/* 
 * for petlja neparni brojevi osim djeljivi sa 7
 *  77....0
 * 75 73 71 69...0 sve osim 7, 14, 70, 77...
 * 
 */

for($i = 77; $i >= 0; $i-=2){
    if($i%7==0){
        continue;
    }
    echo ' '.$i;
}




