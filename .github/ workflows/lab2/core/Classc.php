<?php
require_once("core/square.php");

Class ClassC extends Square {
  public function __construct($obj1, $obj2) {
	parent::__construct($obj1);
	$this->obj2 = $obj2;
  }
  protected $obj2;
}
?>