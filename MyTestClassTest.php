<?php
require_once 'MyClass.php';

class MyTestClassTest extends PHPUnit_Framework_TestCase
{
    public function testHelloWorld()
    {
        $obj = new MyClass();
        $this->assertEquals('Hello world!', $obj->helloWorld());
    }
}