<?php

function find_uniq($a) {
    if($a[0] == $a[1]):
        return (array_sum($a) - ((count($a) - 1) * $a[0]));
    else:
        if($a[0] == $a[2]):
            return $a[1];
        else:
            return $a[0];
        endif;
    endif;
}

echo best_find_uniq([1, 1, 3, 1, 1, 1]) . "<br>";

function best_find_uniq($a) {
    sort($a);
    return ($a[0] === $a[1]) ? end($a) : current($a);
}

echo best_find_uniq([1, 1, 3, 1, 1, 1]);


