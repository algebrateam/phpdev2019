<?php
/*
 * Funkcije primjeri
 */

$timestamp = time();
        echo $timestamp;
        

$naziv = "Algebra";
$broj_znakova = strlen($naziv);
$isto_broj = strlen('ovo je isto neki broj znakova');
echo $broj_znakova;
echo '<hr>';


if(is_array($isto_broj)){
    //true
    
}else{
    echo '<br>ovo je ipak broj<br>';
}


/**
 * @author fmudri
 * @return string binarni broj sa mogućom leading zero odnosno nulom viška
 * @param int $broj ulazni dekadski broj
 * 
 * 22 decimalno je 10110 binarno
 * 22 | 0
 * 11 | 1
 * 05 | 1
 * 02 | 0
 * 01 | 1
 * ↑
 * ovo se čita od dolje na gore
 */
function ubinarno(int $broj):string {
    $rez='';//prazan string koji čeka da ga se napuni
    while($broj>2){
        
    
    $ostatak=$broj%2;
    $broj=(int) ($broj/2);
    $rez.=$ostatak;
    }
    return strrev($rez);
}

$broj =  22;
echo ubinarno ($ulazni_broj);

