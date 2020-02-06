<?php
namespace Dadi;
use core\EquationInterface;

// Решение квадратного уравнения ax^2 + bx + c = 0
Class Square extends Linear implements EquationInterface {
  protected $x = array();

  public function __construct($result = null) {
  	parent::__construct($result);
  }

  protected function findDiscriminant($a, $b, $c) {
	   return pow($b, 2) - 4 * $a * $c;
  }

  public function solve($a, $b, $c) {
  	if($a == 0) {
     Log::log("Введенный коэффициент а = 0, а значит уравнение линейное");
     array_push($this->x, $this->solve($b, $c));
     return $this->x[0];
    }

  	$this->eq = $a . "x^2 + " . $b . "x + " . $c . " = 0";
    Log::log("Введено уравнение " . $this->eq);

  	$disc = $this->findDiscriminant($a, $b, $c);
    Log::log("D = " . $disc);

  	if($disc < 0) {
      //throw new MyException("У уравнения " . $this->eq . " нет вещественных корней");
    }

  	if($disc > 0) {
  	  array_push($this->x, (-1 * $b + $disc)/(2 * $a), (-1 * $b - $disc)/(2 * $a));
      Log::log("У уравнения 2 корня: " . $this->x[0] . ", " . $this->x[1]);
  	}

  	if($disc == 0) {
  	  $this->x = (-1 * $b)/(2 * $a);
      Log::log("У уравнения 1 корень: " . $this->x[0]);
  	}

  	return $this->x;
  }

}

?>
