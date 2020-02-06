<?php
require_once("core/linear.php");

// Решение квадратного уравнения ax^2 + bx + c = 0
Class Square extends Linear {
  public function __construct($obj1, $result = 0) {
	parent::__construct($result);
	$this->obj1 = $obj1;
  }
  
  /*
  public function getObj1() {
    return $this->obj1;
  }
  
  public function setObj1($val) {
	$this->obj1 = $val;
  }
  */
  protected function findDiscriminant($a, $b, $c) {
	return pow($b, 2) - 4 * $a * $c;
  }
  
  public function squareFindRoots($a, $b, $c) {
	if($a == 0) return $this->linearFindRoots($b, $c);
	
	$this->eq = $a . "x^2 + " . $b . "x + " . $c . " = 0";
	$disc = $this->findDiscriminant($a, $b, $c);
	
	if($disc < 0) throw new NoEquationException($eq);
	
	if($disc > 0) {
	  $this->x = Array();
	  $x1 = (-1 * $b + $disc)/(2 * $a);
	  $x2 = (-1 * $b - $disc)/(2 * $a);
	  array_push($this->x, $x1, $x2);
	}
	
	if($disc == 0) {
	  $this->x = (-1 * $b)/(2 * $a);
	}

	return $this->x;
  }
  
  protected $obj1;
}

?>