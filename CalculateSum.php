<?php
class Calculator{
  
  public $a;
  public $b;
 
  public function __construct($a,$b) {
    $this->a = $a;
    $this->b = $b;
  }

  
  public function calculate($a,$b)
  {
    return $a + $b;
  }

}
