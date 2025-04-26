<?php

function getPrimes($limit)
{
    $primes = [];
    for ($i = 2; $i <= $limit; $i++) {
        $isPrime = true;
        for ($j = 2; $j <= sqrt($i); $j++) {
            if ($i % $j === 0) {
                $isPrime = false;
                break;
            }
        }
        if ($isPrime) {
            $primes[] = $i;
        }
    }
    return $primes;
}

// print_r(getPrimes(50)); // Example usage