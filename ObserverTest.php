<?php

class ObserverTest extends PHPUnit_Framework_TestCase
{
    public function testUpdateIsCalledOnce()
    {
        $observer = $this->getMock('Observer', array('update'));
        $observer->expects($this->once())
                 ->method('update')
                 ->with($this->equalTo('something'));
        $subject = new Subject;
        $subject->attach($observer)->doSomething();
	} 
}