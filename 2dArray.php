<?php

/*
 * Complete the 'hourglassSum' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
    1 1 1 0 0 0
    0 1 0 0 0 0
    1 1 1 0 0 0
    0 0 2 4 4 0
    0 0 0 2 0 0
    0 0 1 2 4 0

    hour glass
    111
     1
    111
 */


function hourglassSum($arr) {
    //rowcount, minimum int possible and the sum set to 0
    $rowCount = count($arr) - 2;
    $maxSum = PHP_INT_MIN;
    $sum = 0;
    //loop through first row
    for ($i = 0; $i < $rowCount; $i++)
    {   //set colum count to that of the first row
        $columnCount = count($arr[$i]) - 2;
        for ($j = 0; $j < $columnCount; $j++)
        {         //sum values of the row and column 3 1 3
            $sum = $arr[$i][$j] + $arr[$i][$j + 1] + $arr[$i][$j + 2] //3 top value
                                    + $arr[$i + 1][$j + 1]              //middle value
                    + $arr[$i + 2][$j] + $arr[$i + 2][$j + 1] + $arr[$i + 2][$j + 2]; //bottom 3 values
            //if the max sum is less than sum of the current triangle add it to sum
            if ($maxSum < $sum)
            {
                $maxSum = $sum;
            }
        }
    }//return
    return $maxSum;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$arr = array();

for ($i = 0; $i < 6; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = hourglassSum($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);
