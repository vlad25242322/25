<?php
namespace Dadi;
use core\LogAbstract;
use core\LogInterface;

Class Log extends LogAbstract implements LogInterface {
  private function __construct() {
  }

  static $i;
  protected $log = array();

  public static function write() {
	
  }

  public static function log($str) {
    array_push(Log::instance()->log, $str);
  }

  public function _write() {}
}

?>
