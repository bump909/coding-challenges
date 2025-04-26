<?php

use PHPUnit\Framework\TestCase;

class PalindromeTest extends TestCase
{
    public function testIsPalindrome()
    {
        $this->assertTrue(isPalindrome("Racecar"));
        $this->assertFalse(isPalindrome("Hello"));
    }
}
