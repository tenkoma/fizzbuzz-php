<?php

namespace App;

class FizzBuzz
{
    public static  function makeFizzBuzz(int $no): string
    {
        if ($no % 3 === 0) {
            return 'Fizz';
        }
        return strval($no);
    }
}