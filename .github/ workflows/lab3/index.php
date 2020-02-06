<?php
//spl_autoload_register();
/*include "core/LogInterface.php";
include "core/LogAbstract.php";
include "core/EquationInterface.php";
include "dadi/";
include "dadi/";
include "dadi/";
include "dadi/";
*/

$obj = new Dadi\Square();
var_dump($obj->solve(16, 8, 4));
?>
