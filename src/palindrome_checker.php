<?php

function isPalindrome($str)
{
    $str = preg_replace("/[^A-Za-z0-9]/", "", strtolower($str)); // Remove non-alphanumeric characters and convert to lowercase
    return $str === strrev($str); // Check if the string is the same when reversed
}
