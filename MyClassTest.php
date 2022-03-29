<?php
require_once 'MyClass.php';

class MyClassTest extends PHPUnit_Framework_TestCase
{
    public function testHelloWorld()
    {
        $obj = new MyClass();
        $this->assertEquals('Hello world!', $obj->helloWorld());
    }

    public function testPower()
    {
        $obj = new MyClass();
        $this->assertEquals(9, $obj->power(3, 2));
    }

}