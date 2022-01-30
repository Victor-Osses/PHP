<?php

function race($v1, $v2, $g) {
    if($v1 >= $v2):
      return [0, 0, 0];
    else:    
        $time = $g / ($v2 - $v1);

        if($time < 1):
            $time *= 60;

            $hour = 0;
            $minutes = floor($time);
            $seconds = round($time - $minutes) * 60;
        else:
            $hour = floor($time);
            $minutes = floor($time - $hour) * 60;
            $seconds = round($time - $hour - $minutes) * 60;
        endif;

        $arr = array();
        array_push($arr, $hour, $minutes, $seconds);
        return $arr;        
    endif;
}

echo print_r(race(80, 91, 37));