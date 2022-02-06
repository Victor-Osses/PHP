<?php

/*You are given an array(list) strarr of strings and an integer k.
Your task is to return the first longest string consisting of k consecutive strings taken in the array.*/

function longestConsec($strarr, $k) {
    $strconc = "";
    $count = 0;

    for($index = 0; $index < count($strarr); $index++){

        $strconc = $strconc . $strarr[$index];

        if($count == ($k - 1)){
            $strArrConc[] = $strconc;
            $strconc = "";
            
            $count = 0;
            $index--;
        }else{
            $count++;
        }
    }

    foreach($strArrConc as $str){
        $strlen[$str] = strlen($str);
    }

    foreach($strlen as $str){
        echo strlen($str) . " == " . max($strlen) . "<br>";
        if(strlen($str) == max($strlen)):
            echo $str;
        endif;
    }

}

longestConsec(["tree25ee", "folingee", "trash13123123y", "blue", "abcdef", "uvwxyz"], 3);