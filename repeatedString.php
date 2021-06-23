<?php

/*
 * Complete the 'repeatedString' function below.
 *
 * The function is expected to return a LONG_INTEGER.
 * The function accepts following parameters:
 *  1. STRING s
 *  2. LONG_INTEGER n
 */

    function repeatedString($s, $n) 
    {
    
        $countA = 0;
        //get string length
        $strLength = strlen($s);
        //split string to array
        $stringArr = str_split($s);
        //$n / length to find out how many times the a character will apear based on $n
        $repeat = floor($n / $strLength);        
        // multiply number of a's found by number given by $n
        $repeat = $repeat * substr_count($s, 'a');
        //loop through searching for remainder. go through string till no remainder
        for($i = 0; $i < $n % $strLength; $i++) {

            if($stringArr[$i] == 'a') 
            {
                $countA++;
            }
        }
        //add number of as found while remainder to previous calc to find total num of a's
        $countA = $repeat + $countA;

        return $countA;  
    }




$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$s = rtrim(fgets(STDIN), "\r\n");

$n = intval(trim(fgets(STDIN)));

$result = repeatedString($s, $n);

fwrite($fptr, $result . "\n");

fclose($fptr);
?>