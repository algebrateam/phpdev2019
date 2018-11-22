<?php

/* 
 * osnovni tipovi,int,char,string,array,NULL...
 * 
 * 
 */
$var=5;
if(is_float($var)){
    echo "varijabla je decimalni";
}else{
echo "varijabla nije float/decimalni";
}
echo "<hr>";
if(is_int($var)){
    echo "varijabla je cjelobrojna";
}else{
    echo "varijabla nije int";
}
echo"<hr>";

$nekoime="algebra";
$nekodrugoime='algebra';

if($nekoime!=$nekodrugoime){
    echo "ove dvije varijable su nejednake";
}else
{echo "ove dvije varijable su jednake";
}


//komentar
#isto komentar

/*blok komentar
 * */
//polje

$polje=["bla",1,2.2313,12,2.12,false,true,true   ,false,
    $nekodrugoime,$var,'Skola'=>'algebra'];
echo "<pre>";
print_r($polje);

echo $polje['Skola'];
echo $polje['2'];
 echo "</pre>";


