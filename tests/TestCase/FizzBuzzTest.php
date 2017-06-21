<?php
namespace App\Test\TestCase;
use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testMakeFizzBuzz()
    {
        $this->assertSame('1', FizzBuzz::makeFizzBuzz(1));
    }
}
