<?php

/**
 * diff clouds
 * -thunderheads
 * -cumulus
 * 
 * player can jump on an cumulus cloud
 * player cant touch thunder clouds.
 * 
 * get from start to finish
 * 
 *
 * Complete the 'jumpingOnClouds' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY c as parameter.
 */

function jumpingOnClouds($c)
{
    //num of jumps required
    $numOfSafeJumps = 0;

    //safe clouds are 0 thunderclouds are 1
    //always advance with two steps.
    for($i = 0; $i < count($c); $i++) 
    {
        //check step current step if safe.
        if($c[$i] === 0) 
        {
            //check second step ahead if they both safe add + 1 and increase i
            if($c[$i] === $c[$i + 1]) 
            {
                $numOfSafeJumps++;
                $i++;
            }            
        }else//if second step is bad just add +1 jump
            {
            $numOfSafeJumps++;
            }
    }
    return $numOfSafeJumps;

}


$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$c_temp = rtrim(fgets(STDIN));

$c = array_map('intval', preg_split('/ /', $c_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = jumpingOnClouds($c);

fwrite($fptr, $result . "\n");

fclose($fptr);
