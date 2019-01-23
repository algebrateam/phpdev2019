<?php



/**
 * Description of Covjek
 *
 * @author pmrvic
 */
class Covjek {
  public $imeStud='Marko';
  public $ime='Marko';  
  public $broj;
  private $spol='M';
  public $trenutna_brzina=0;
  
  public function ime(){
    echo 'Moje ime je '. $this->ime.'<br>';
  }
  
  public function get_spol(){
    if($this->spol=='M'){
      return 'muško';
    }
    else{
      return 'žensko';
    }
    
  }
  public function set_spol($s){
    $this->spol=$s;
  }
  public function hodaj(){}
  public function trci(){}
  public function stani(){}
  public function komuniciraj(Covjek &$cov){
    $cov->trenutna_brzina+=2;
    if($this->spol===$cov->spol){
      $this->trenutna_brzina=100;
    }
  }  
}
