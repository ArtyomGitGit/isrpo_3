<?php
namespace ISRPO\Tests;

use ISRPO\MyClass;
use PHPUnit\Framework\TestCase;

class MyClassTest extends TestCase
{
    protected $myClass;
    protected function setUp(): void
    {
        $this->myClass = new MyClass;
    }

    protected function tearDown(): void
    { 
        
    }
    public function testHelloWorld()
    {
        $this->assertEquals('Hello world!', $this->myClass->helloWorld());
    }

    public function testPower()
    {
        $this->assertEquals(9, $this->myClass->power(3, 2));
    }
}