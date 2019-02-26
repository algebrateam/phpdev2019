<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IBody
 *
 * @author pmrvic
 */
interface IBody {

  function setBodyHeader();

  function setBodyFooter(string $footer);

  function setBodyContent();

  function setBodyNavigation();
}
