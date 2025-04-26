<?php

use PHPUnit\Framework\TestCase;

class RomanNumeralTest extends TestCase
{
    public function testRomanConversion()
    {
        $this->assertEquals("MCMXCIV", intToRoman(1994));
        $this->assertEquals("XXI", intToRoman(21));
    }
}
