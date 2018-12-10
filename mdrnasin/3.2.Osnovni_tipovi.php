
<?php

/* 
osnovni tipovi
 * int, char, string, array, NULL
 */
$var=5;
if(is_float($var)){
    echo 'varijabla je cijeloborojna';
}else{
    echo 'varijabla nije float';
}

echo "<hr>";

if (is_int($var)){
    echo "varijabla je cjelobrojna vrijednost";
}else{
    echo "varijabla nije INT";
}

echo "<hr>";

$nekoime="algebra";
$nekodrugoime="algebra1";

if ($nekoime==$nekodrugoime) {
    echo 'dvije varijable su jednake'; 
}else{
    echo 'dvije varijable nisu jednake'; 
}

echo "<hr>";

if ($nekoime!==$nekodrugoime) {
    echo 'dvije varijable su jednake'; 
}else{
    echo 'dvije varijable nisu jednake'; 
}


//komentar

#komentar
/* blok komentar
 * 
 */

//polje

$polje=[1,2.22323,"bla",3,2.3,2,false,true,         false, $nekodrugoime, $var, "skola"=>"Algebra"];
echo '<pre>';
print_r($polje);

echo $polje[2];
