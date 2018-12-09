<?php

/* 
 * Funkcije primjeri
 */

$timestamp=time();
//echo $timestamp;

$naziv="Algebra";
$broj_znakova=strlen('Ovo je neki novi text');
echo $broj_znakova;
echo "<hr>";

if(is_array($broj_znakova)){
  // true
}else{
  echo "<br> ovo ipak nije array <br>";
}