<?php

use PHPUnit\Framework\TestCase;

class PrimeNumberTest extends TestCase
{
    public function testPrimeNumbers()
    {
        $primes = getPrimes(50);
        $this->assertContains(2, $primes);
        $this->assertContains(3, $primes);
        $this->assertContains(5, $primes);
        $this->assertNotContains(4, $primes);
    }
}
