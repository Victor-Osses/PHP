<?php
/*
Complete the function that accepts a string parameter, and reverses each word in the string.
All spaces in the string should be retained.
*/

function reverseWords($str) {
    /*echo strrev($str) . "<br>";
    echo print_r(explode(' ', strrev($str))) . "<br>";
    echo print_r(array_reverse(explode(' ', strrev($str)))) . "<br>";*/

    return implode(' ', array_reverse(explode(' ', strrev($str)))) ;
}

echo reverseWords('double  spaced  words');