<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function inc_a(){
    static $a=0;
    $a++;
    /**kada bi dodali global ispred $a funkcija ne bi uzimala varijablu $a iz
     * funkcije nego bi pristupila varijabli $a izvan funkcije ukoliko je 
     * tamo definirana
     */
    echo $a;
}
inc_a();
inc_a();
inc_a();
//echo $a;