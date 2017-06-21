<?php
namespace App\Test\TestCase;
use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testMakeFizzBuzz()
    {
        $this->assertSame('1', FizzBuzz::makeFizzBuzz(1));
        $this->assertSame('2', FizzBuzz::makeFizzBuzz(2));
        $this->assertSame('Fizz', FizzBuzz::makeFizzBuzz(3));
        $this->assertSame('Buzz', FizzBuzz::makeFizzBuzz(5));
        $this->assertSame('FizzBuzz', FizzBuzz::makeFizzBuzz(15));
    }
}
