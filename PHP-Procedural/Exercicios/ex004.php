<?php

/*
Given an array (arr) as an argument complete the function countSmileys that should return the total 
number of smiling faces.

Rules for a smiling face:

Each smiley face must contain a valid pair of eyes. Eyes can be marked as : or ;
A smiley face can have a nose but it does not have to. Valid characters for a nose are - or ~
Every smiling face must have a smiling mouth that should be marked with either ) or D
No additional characters are allowed except for those mentioned.

Valid smiley face examples: :) :D ;-D :~)
Invalid smiley faces: ;( :> :} :]
*/

function count_smileys($arr): int {
    $count = 0;
    $pattern = "/^[:|;]{1}[-|~]?[)|D]{1}$/";

    foreach($arr as $face):
        if(preg_match($pattern, $face)):
            $count++;
        endif;
    endforeach;

    return $count;
  }

echo count_smileys([]) . "<br>";
echo count_smileys([':D',':~)',';~D',':)']) . "<br>";
echo count_smileys([':)',':(',':D',':O',':;']) . "<br>";

function best_count_smileys($arr): int {
    return preg_match_all("/[:|;][-|~]?[)|D]/", implode(",", $arr));
}

echo best_count_smileys([]) . "<br>";
echo best_count_smileys([':D',':~)',';~D',':)']) . "<br>";
echo best_count_smileys([':)',':(',':D',':O',':;']) . "<br>";
