<?php

function areAnagrams($str1, $str2)
{
    $str1 = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $str1));
    $str2 = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $str2));

    return count_chars($str1, 1) === count_chars($str2, 1); // Compare character counts
}
