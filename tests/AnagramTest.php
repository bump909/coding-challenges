<?php

// require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class AnagramTest extends TestCase
{
    public function testAreAnagramsReturnsTrueForAnagrams()
    {
        $this->assertTrue(areAnagrams('listen', 'silent'));
    }

    public function testAreAnagramsReturnsFalseForNonAnagrams()
    {
        $this->assertFalse(areAnagrams('hello', 'world'));
    }
}
