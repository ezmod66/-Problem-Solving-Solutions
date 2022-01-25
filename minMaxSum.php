<?php

/*  Given five positive integers, find the minimum and maximum values that can be calculated 
    by summing exactly four of the five integers. Then print the respective minimum and maximum 
    values as a single line of two space-separated long integers.*/

    /*
 * Complete the 'miniMaxSum' function below.
 *
 * Function Description
    Complete the miniMaxSum function in the editor below.
    miniMaxSum has the following parameter(s):
    arr: an array of 5 integers

    Print
    Print two space-separated integers on one line: the minimum sum and the maximum sum of 4 of 5 elements.

    Input Format
    A single line of five space-separated integers.

    Output Format
    Print two space-separated long integers denoting the respective minimum and maximum values that can be calculated by summing exactly four of the five integers. (The output can be greater than a 32 bit integer.)
 
/*  possible
        2 + 3 + 4 + 5 = 14
        1 + 3 + 4 + 5 = 13 
        1 + 2 + 4 + 5 = 12
        1 + 2 + 3 + 5 = 11
        1 + 2 + 3 + 4 = 10
    */
    

    $arr = [1, 2, 3, 4, 5];
    
    miniMaxSum($arr);

function miniMaxSum($arr) {
    // Write your code here
    $len = Count($arr);
    $sum1 = 0;
    $sum2 = 0;
    //sum array twice
    for($i = 0; $i < $len; $i++)
    {     
        $sum1+= $arr[$i];
        $sum2+= $arr[$i];
    }
    //find the max value and minus it from the sum 1. find min value and remove from sum2.
    echo ($sum1 - max($arr) ." ". ($sum2 - min($arr)));

}

?>