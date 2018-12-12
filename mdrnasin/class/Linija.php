<?php
include_once "ITocka.php";
/**
 * Created by PhpStorm.
 * User: marko
 * Date: 12.12.2018.
 * Time: 21:24
 */
class Linija{
    private $t1;
    private $t2;
    public function __construct(Tocka $t1, Tocka $t2){
        $this->t1=$t1;
        $this->t2=$t2;
    }
    public function __toString()
    {
        return "Linija".$this->t1->get_koords()."----".$this->t2->get_koords()." ";
    }
}