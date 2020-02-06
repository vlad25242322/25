<?php
namespace Dadi;
use core;

// Линейное уравнение kx + b = 0
Class Linear {
  // решение уравнения(ответ)
  protected $x;
  // уравнение целиком String
  protected $eq;

  public function __construct($result = null) {
    array_push($this->x, $result);
  }

  public function linearFindRoots($k, $b) {
    if($k == 0) throw new MyException($this->eq . " не является уравнением");
  	$this->eq = $k . "x + " . $b . " = 0";
    Log::log("Введено линейное уравнение " . $this->eq);
  	$this->x = ($b * -1)/$k;
    Log::log("Корень уравнения " . $this->x);
  	Log::write();
	return $this->x;
  }
}
?>
