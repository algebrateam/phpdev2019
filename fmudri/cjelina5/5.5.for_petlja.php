<?php
//for petlja
for ($i = 0; $i < 10; $i++) {
    echo ' '.$i;
}
echo '<hr>';
//for petlja brojevi od 1 do 10 (2, 4, 6, 8, 10)

for ($i = 2; $i < 10; $i=$i+2) {
    echo ' '.$i;
}
echo '<hr>';
//for petlja neparni brojevi
for ($i = 1; $i < 10; $i=$i+2) {
    echo ' '.$i;
}

//for petlja neparni brojevi od 55 do 0
for ($i = 55; $i >= 0; $i=$i-2) {
    echo ' '.$i;
}

//svi neparni unatrag osim onih djeljivih sa 7 od 77
for ($i = 77; $i >= 0; $i=$i-2) {
    if($i%7==0){
        continue;
    }
    $sedam=(string)$i;
    if(strpos($sedam,'7')!=0){
        continue;
    }
    echo ' '.$i;
}

