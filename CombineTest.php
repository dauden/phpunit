<?php
class CombineTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @dataProvider provider
	 */
	public function testCombine($a, $b, $c)
	{
		$this->assertEquals($c, $a . ' ' . $b);
	}
	public function provider()
	{
		return array (
				array ('Hello','World','Hello World'),
				array ('Go','PHP','Go PHP'),
				array ('This','Fails','This succeeds')
		);
	}
}