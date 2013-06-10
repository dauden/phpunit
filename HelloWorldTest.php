<?php
require_once 'HelloWorld.php';
require_once 'PHPUnit/Framework/TestCase.php';

class HelloWorldTest extends PHPUnit_Framework_TestCase
{
	public function test__construct()
	{
		$hw = new HelloWorld();
		$this->assertInstanceOf('HelloWorld', $hw);
	}
	public function testSayHello()
	{
		$hw = new HelloWorld();
		$string = $hw->sayHello();
		$this->assertEquals('Hello World!', $string);
	} 
}