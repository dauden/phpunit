<?php
class OopsTest extends PHPUnit_Framework_TestCase
{
	public function testOops()
	{
		try {
			throw new Exception('I just made a booboo');
		} catch (Exception $expected) {
			return; }
			$this->fail('An expected Exception was not thrown');
	}
}
