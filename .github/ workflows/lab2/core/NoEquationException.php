<?php
Class NoEquationException extends RuntimeException {
	public function __construct($eq) {
	  parent::__construct("� ��������� ��������������� ��������� �� ����������: " . $this->eq;);
	}
}
?>

