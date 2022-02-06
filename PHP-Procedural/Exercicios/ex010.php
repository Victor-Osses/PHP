<?php

/*
Welcome.

In this kata you are required to, given a string, replace every letter with its position in the alphabet.

If anything in the text isn't a letter, ignore it and don't return it.

"a" = 1, "b" = 2, etc.
*/

function alphabet_position(string $s): string {
    $chars = str_split(strtolower($s));
    $str = array();
  
    foreach($chars as $char):
        if(ord($char) >= 97 and ord($char) <= 122):
            $str[] = (ord($char) - 96);
        endif;
    endforeach;

    return implode(' ', $str);
  }

echo alphabet_position('Atirei o pau no gato toto/');