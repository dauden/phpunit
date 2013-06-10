<?php
require_once 'testcase.php';
require_once 'PHPUnit/Framework/TestCase.php';

$suite  = new PHPUnit_TestSuite("StringTest");
$result = PHPUnit::run($suite);

echo $result -> toString();
?>