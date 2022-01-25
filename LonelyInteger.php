<?php

/*
    Given an array of integers, where all elements but one occur twice, find the unique element.
    a = [1, 2, 3, 4, 3, 2, 1] unique is = 4.

    Function Description
    Complete the lonelyinteger function in the editor below.
    lonelyinteger has the following parameter(s):
    int a[n]: an array of integers

    Returns
    int: the element that occurs only once

    Input Format

    The first line contains a single integer,n , the number of integers in the array.
    The second line contains  space-separated integers that describe the values in .
*/

function lonelyinteger($a) {
    // Write your code here
    $lonelyInt = 0;
    //loop through array to get values
    foreach($a as $aValue)
    {
        $count = 0;
        //loop through array again foreach value in first array. 
        foreach($a as $bVales)
        {   //add counter if value is found
            if($aValue == $bVales)
            {
                $count++;
            }
        }   //there is only 1 unique so anything less than two is the value
        if($count < 2)
        {
                $lonelyInt = $aValue;
                break;
        }
    }
        //return
    return $lonelyInt;
}


?>