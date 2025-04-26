<?php

function fizzBuzz($number)
{
    $fizz = ($number % 3 === 0) ? 'Fizz' : '';
    $buzz = ($number % 5 === 0) ? 'Buzz' : '';

    if ($fizz && $buzz) {
        return $fizz . $buzz;
    } elseif ($fizz) {
        return $fizz;
    } elseif ($buzz) {
        return $buzz;
    }

    return $number;
}
