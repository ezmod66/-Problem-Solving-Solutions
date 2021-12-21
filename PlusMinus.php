<?php
/* Given an array of integers, calculate the ratios of its elements that are positive, negative, and zero. 
    Print the decimal value of each fraction on a new line with  places after the decimal.
    Note: This challenge introduces precision problems. The test cases are scaled to six decimal places, 
    though answers with absolute error of up to 10 (to the power of -4)  are acceptable. 
    
    Function Description

    Complete the plusMinus function in the editor below.
    plusMinus has the following parameter(s):
    int arr[n]: an array of integers
    --
    Print
    Print the ratios of positive, negative and zero values in the array. 
    Each value should be printed on a separate line with  digits after the decimal. T
    he function should not return a value.

    SAMPLE input
    STDIN           Function
    -----           --------
    6               arr[] size n = 6
    -4 3 -9 0 4 1   arr = [-4, 3, -9, 0, 4, 1]
    */
    $arr = [2,4,-5,-4, 0];

    plusMinus($arr);

    function plusMinus($arr) {

        $len = count($arr);
        $pos = 0;
        $neg = 0;
        $zero = 0;

        for($i = 0; $i < $len;$i++)
        {   // positive
            if($arr[$i] > 0)
            {
                $pos++;
            }
            else// negative
                if($arr[$i] < 0)
                {
                    $neg++;
                }
                else// zeros
                {
                    $zero++;
                }       
        }
                echo number_format($pos / $len, 6, '.', ',')."\n";
                echo number_format($neg / $len, 6, '.', ',')."\n";
                echo number_format($zero / $len, 6, '.', ',')."\n";

    }
    
    //all 11 test cases passed
?>