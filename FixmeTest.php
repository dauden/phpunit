<?php
class FixmeTest extends PHPUnit_Framework_TestCase
{
    protected $fixme;
    public function setUp()
    {
        $this->fixme = array ();
	}
    public function testFixmeEmpty()
    {
        $this->assertEquals(0, sizeof($this->fixme));
	}
    public function testFixmeHasOne()
    {
        array_push($this->fixme, 'element');
        $this->assertEquals(1, sizeof($this->fixme));
    }
}