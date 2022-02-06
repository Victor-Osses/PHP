<?php

function tribonacci($signature, $n) {
    $tribonacci = array();
    $last_three = $signature;
  
    if($n > 3){
      $tribonacci = $last_three = $signature;
      for($count = 0; $count < $n - 3; $count++):
          $sum = array_sum($last_three);
          $tribonacci[] = $sum;
      
          array_push($last_three, $sum);
          array_shift($last_three);
      endfor;
    }
    else{
      for($index = 0; $index < $n; $index++):
        $tribonacci[] = $last_three[$index];
      endfor;
    }
        
    return $tribonacci; 
}


echo print_r(tribonacci([1,1,1],10)) . "<hr>";
echo print_r(tribonacci([0,0,1],10)) . "<hr>";
echo print_r(tribonacci([0,1,1],10)) . "<hr>";
echo print_r(tribonacci([1,0,0],10)) . "<hr>";
echo print_r(tribonacci([0,0,0],10)) . "<hr>";
echo print_r(tribonacci([1,2,3],10)) . "<hr>";
echo print_r(tribonacci([3,2,1],10)) . "<hr>";
echo print_r(tribonacci([1,1,1],1)) . "<hr>";
echo print_r(tribonacci([300,200,100],0)) . "<hr>";
echo print_r(tribonacci([0.5,0.5,0.5],30)) . "<hr>";
echo print_r(tribonacci([3,2,1],10)) . "<hr>";