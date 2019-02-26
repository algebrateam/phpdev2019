<?php
include_once './Body.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Start_Page
 *
 * @author pmrvic
 */
$s=new Start_Page();
class Start_Page {
  private $b;
  function __construct() {
    $this->b=new Body();
    echo $this->b->setHeading("Moja Prva Stranica");
    echo $this->b->setBodyFooter("Ovo je moj mali kopirajter");
}
}
