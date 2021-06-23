<?php
/**An avid hiker keeps meticulous records of their hikes. During the last hike that took exactly  steps, for every step it was noted if it was an uphill, , or a downhill,  step. Hikes always start and end at sea level, and each step up or down represents a  unit change in altitude. We define the following terms:

A mountain is a sequence of consecutive steps above sea level, starting with a step up from sea level and ending with a step down to sea level.
A valley is a sequence of consecutive steps below sea level, starting with a step down from sea level and ending with a step up to sea level.
Given the sequence of up and down steps during a hike, find and print the number of valleys walked through.

Example

The hiker first enters a valley  units deep. Then they climb out and up onto a mountain  units high. Finally, the hiker returns to sea level and ends the hike.

Function Description

Complete the countingValleys function in the editor below.

countingValleys has the following parameter(s):

int steps: the number of steps on the hike
string path: a string describing the path
Returns

int: the number of valleys traversed
Input Format

The first line contains an integer , the number of steps in the hike.
The second line contains a single string , of  characters that describe the path.
 

Sample Input

8
UDDDUDUU*/



/*
 * Complete the 'countingValleys' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER steps
 *  2. STRING path
 * DDUUDDUDUUUD
 *      
 *           /\
 * \  /\    /
    \/  \/\/
    2 valley
 */


function countingValleys($steps, $path) {
    $v = 0;
    $m = 0;
    $b = false;
    //track current level
    $current = 0;
    $journey = str_split($path);
    
        for($i = 0; $i < $steps; $i++) {
            if($journey[$i] == 'D') {
                $current--;//if going down
            }
            else if($journey[$i] == 'U') {
                $current++;//if going up
            }

            //checking if valley or not
            if($current == 0 && $b == true) {
                $b = false;//if current level is 0 its not a valley reset and count valley
                $v++;
            }//if lower than crount level set b to true
            else if($current < 0) {
                $b = true;
            }
        }
        
    
        //return valleys traversed
        return $v;
    }

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$steps = intval(trim(fgets(STDIN)));

$path = rtrim(fgets(STDIN), "\r\n");

$result = countingValleys($steps, $path);

fwrite($fptr, $result . "\n");

fclose($fptr);
