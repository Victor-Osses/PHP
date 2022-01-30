<?php

/*Write a function, persistence, that takes in a positive parameter num and returns its multiplicative persistence, 
which is the number of times you must multiply the digits in num until you reach a single digit.*/

function persistence(int $num): int {
    $count = 0;

    while($num >= 10):
        $newNum = 1;
        $numbersInStr = str_split($num);
        
        foreach($numbersInStr as $number):
            $newNum *= (int)$number;
        endforeach;
    
        $num = $newNum;
        $count +=1;
    endwhile;

    return $count;
}

$retorno = persistence(999);
echo "Retornou: $retorno";


//Best Solution
function bestpersistence(int $num): int {
    $count = 0;
    
    while($num > 9):
        $num = array_product(str_split($num));
        $count+=1;
    endwhile;

    return $count;
}
