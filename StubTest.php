<?php
// example taken from phpunit.de
class StubTest extends PHPUnit_Framework_TestCase
{
    public function testStub()
    {
        $stub = $this->getMock('SomeClass');
        $stub->expects($this->any())
		->method('doSometing')
		->will($this->returnValue('foo'));
    }
    // Calling $stub->doSomething() will now return 'foo'
}


