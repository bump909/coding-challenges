<?php

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testFizzBuzz()
    {
        $output = "";
        for ($i = 1; $i <= 100; $i++) {
            $output .= fizzBuzz($i) . "\n";
        }

        // Check that output contains Fizz, Buzz, and FizzBuzz
        $this->assertStringContainsString("Fizz", $output);
        $this->assertStringContainsString("Buzz", $output);
        $this->assertStringContainsString("FizzBuzz", $output);
        $this->assertStringContainsString("2", fizzBuzz(2));
        $this->assertStringContainsString("4", fizzBuzz(4));
        $this->assertStringContainsString("Fizz", fizzBuzz(3));
        $this->assertStringContainsString("Buzz", fizzBuzz(5));
        $this->assertStringContainsString("FizzBuzz", fizzBuzz(15));
    }
}
