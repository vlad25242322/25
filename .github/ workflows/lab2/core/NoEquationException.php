<?php
Class NoEquationException extends RuntimeException {
	public function __construct($eq) {
	  parent::__construct("С заданными коээффициентами уравнение не существует: " . $this->eq;);
	}
}
?>

