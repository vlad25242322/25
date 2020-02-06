<?php
namespace core;

abstract class LogAbstract {
   protected static $i;

   private function __construct() {
   }

	/**
 	* @return static
 	*/
   /**
    * @return static
    */
   public static function Instance() {
      if (!(static::$i instanceof static)) {
         static::$i = new static();
      }
      return static::$i;
   }


   protected $log;

   abstract public function _write();
}

?>
