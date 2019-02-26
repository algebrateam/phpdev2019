<?php
include_once './ABody.php';
include_once './IBody.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Body
 *
 * @author pmrvic
 */
class Body extends ABody implements IBody {
  //put your code here
  public function setBodyContent() {
    
  }

  public function setBodyFooter(string $footer) {
    return "<div>".$footer."</div>";
  }

  public function setBodyHeader() {
    
  }

  public function setBodyNavigation() {
    
  }

}
