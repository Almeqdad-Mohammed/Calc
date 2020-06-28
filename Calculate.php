<?php
// Create CLass
class Calculate{
  private $result01;
  private $result02;
  private $operator;
 // check function for  validation getting form
  public function getvalidateform($num01 , $num02 , $opt){
      if (is_numeric($num01) && is_numeric($num02)) {
        return true;
      }else {
        return false;
      }
      // create Array With The list Of symble
      $operators  = array("ADD" , "SUB" , "MULTI" ,"DIVI");
      if (in_array($opt , $operators)) {
        return true;
      }else {
        return false;
      }
    }
    // create addition function
    public function addition($num01, $num02){
       $this->result01 = $num01;
       $this->result02 = $num02;
       return $this->result01 + $this->result02;
    }
    // create substruction function
    public function substruction($num01 , $num02){
      $this->result01 = $num01;
      $this->result02 = $num02;
      return $this->result01 - $this->result02;
    }
    // create multibluction function
    public function multibluction($num01 , $num02){
      $this->result01 = $num01;
      $this->result02 = $num02;
      return $this->result01 * $this->result02;
    }
    // create divition function
    public function divition($num01 , $num02){
      $this->result01 = $num01;
      $this->result02 = $num02;
      return $this->result01 / $this->result02;
    }
}
  //header('location:index.php');
