<?php

namespace World;

/**
 * Description of Covijek
 *
 * @author marko
 */
class Covjek {
    public $ime="Marko";
    public $brojOI;
    private $spol;
    public $trenutna_brzina=0;
    
    public function ime(){
        echo 'Moje ime je '.$this;
    }
    public function hodaj(){}
    public function trci(){}
    public function stani(){}
    public function komuniciraj(Covijek $cov){
        $cov->trenutna_brzina+=2;
    }
}
