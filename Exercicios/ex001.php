<?php

/*
Write a function that will return the count of distinct case-insensitive alphabetic characters and numeric 
digits that occur more than once in the input string. The input string can be assumed to contain only alphabets 
(both uppercase and lowercase) and numeric digits.
*/

function duplicateCount($text) {
    $qtdChars = array();
    $qtdCharsRepeat = 0;
    
    if(strlen($text) > 0):

        //Creating associative array
        for($index = 0; $index < strlen($text); $index++):
            $key = strtolower($text[$index]);
            $qtdChars["$key"] = 0;
        endfor;

        //Counting how much each character repeats
        for($index = 0; $index < strlen($text); $index++):
            $key = strtolower($text[$index]);
            $qtdChars["$key"] += 1;
        endfor;

        //Checking how many characters repeat
        foreach($qtdChars as $qtd){
            if($qtd > 1):
                $qtdCharsRepeat+=1;
            endif;
        }
    else:
        return 0;
    endif;

    return $qtdCharsRepeat;
  }

echo duplicateCount("aabBcde");

//Best solution:
function bestDuplicateCount($text){
    $dupCount = 0;
    $text = array_count_values(str_split(strtolower($text)));

    foreach($text as $val){
        if($val > 1):
            $dupCount += 1;
        endif;
    }
    return $dupCount;
} 

echo "<br>" . bestDuplicateCount("aabBcde");