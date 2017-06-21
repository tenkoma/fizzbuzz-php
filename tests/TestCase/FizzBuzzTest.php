<?php
namespace App\Test\TestCase;
use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * @dataProvider provideMakeFizzBuzz
     */
    public function testMakeFizzBuzz($expected, $no)
    {
        $this->assertSame($expected, FizzBuzz::makeFizzBuzz($no));
    }

    public function provideMakeFizzBuzz()
    {
        return [
            ['1', 1],
            ['2', 2],
            ['Fizz', 3],
            ['Buzz', 5],
            ['FizzBuzz', 15],
        ];
    }
}
