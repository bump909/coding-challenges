# Coding Challenges & Mini Tests

This repository contains a collection of common algorithmic challenges and coding tests in PHP. Each file provides a clean, efficient solution to a classic problem, and the repository also includes unit tests to demonstrate best practices in testing.

## Challenges Included

### 1. **FizzBuzz**
A classic programming challenge where numbers from 1 to 100 are printed with the following replacements:

- Multiples of 3 are replaced by "Fizz"
- Multiples of 5 are replaced by "Buzz"
- Multiples of both 3 and 5 are replaced by "FizzBuzz"

### 2. **Palindrome Checker**
A function that checks if a given string is a palindrome (i.e., it reads the same forward and backward).

### 3. **Prime Number Generator**
A function that returns all prime numbers up to a given number.

### 4. **Anagram Detector**
A function that checks whether two strings are anagrams (i.e., they contain the same characters in any order).

### 5. **Bubble Sort**
An implementation of the bubble sort algorithm that sorts an array of numbers in ascending order.

### 6. **Roman Numeral Converter**
A function that converts an integer into a Roman numeral.

## Installation

To run the tests and examples locally:

1. Clone the repository:

```bash
   git clone https://github.com/bump909/coding-challenges.git
   cd coding-challenges
   composer install
   vendor/bin/phpunit tests/[TestFile.php] 
   OR composer test
```

2. Install dependencies (using Composer):

`composer install`

3. Run the tests:

`vendor/bin/phpunit`

## Running Tests

Each challenge comes with unit tests located in the tests directory. The tests use PHPUnit and validate the correctness of the solutions.

### Example Test Output

`$ composer test`

Expected output:

```scss
OK (7 tests, 19 assertions)
```
