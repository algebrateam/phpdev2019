<?php

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
abstract class ABody {

  public function setHeading($naslov) {
    return "<h1>" . $naslov . "</h1>";
  }

}
