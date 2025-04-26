<?php

use PHPUnit\Framework\TestCase;

class SimpleSortTest extends TestCase
{
    public function testBubbleSort()
    {
        $sortedArray = bubbleSort([5, 3, 8, 4, 2]);
        // print_r($sortedArray);
        $this->assertEquals([2, 3, 4, 5, 8], $sortedArray);
    }
}
