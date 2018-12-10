<?php

/* 
 * izlistaj sve iz mog foldera
 */

scandir('.');
$fscan=scandir('.');
foreach ($fscan as $value) {
    if(is_file($value)){
        //echo $value.' je datoteka <br>';
        if(is_dir('poglavlje_'.substr ($value, 0,1) ))
        {
        }else{
        }
                //ne ciniti nista il obrisati ga ako je prazan
        mkdir('poglavlje'. substr($value, 0,1));
        copy ($value,'./poglavlje_'.substr($value, 0,1).'/'.$value);
    }
    }