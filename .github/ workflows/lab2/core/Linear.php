<?php
require_once("core/NoEquationException.php");

// �������� ��������� kx + b = 0
Class Linear {
  // ������� ���������(�����)
  protected $x;
  // ��������� ������� String
  protected $eq;
  
  public function __construct($result = 0) {
    $this->x = $result;
  }
  
  public function getX() {
    return $this->result;
  }
  
  public function setX($val) {
    $this->x = $val;
  }
  
  public function linearFindRoots($k, $b) {
	$this->eq = $k . "x + " . $b . " = 0";
	$this->x = ($b * -1)/$k;
	return $this->x;
  }
}
?>