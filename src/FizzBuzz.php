<?php

namespace App;

class FizzBuzz
{
    public static  function makeFizzBuzz(int $no): string
    {
        if ($no % 3 === 0 && $no % 5 === 0) {
            return 'FizzBuzz';
        }
        if ($no % 3 === 0) {
            return 'Fizz';
        }
        if ($no % 5 === 0) {
            return 'Buzz';
        }
        return strval($no);
    }
}