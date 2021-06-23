<?php

/*
 * Complete the 'rotLeft' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY a
 *  2. INTEGER d
 * 
 * a = array
 * d = num of rotations to make
 * 
 * only problem facing here is the test case 8 
 * doesnt seem to pass all other test cases work correctly
 */

$a= [1, 2, 3, 4, 5];

$d= 6;

function rotLeft($a, $d) {
    
    echo '<pre>';
    var_dump($a);
    echo '</pre>';

    $i = 0; //starting from
    do{ // use array $a and push the value removed from the first element to the end of the array
        array_push($a,array_shift($a));
    }
    while(++$i < $d);// while add to i before iteration check if its smaller than number of rotations

    echo '<pre>';
    var_dump($a);
    echo '</pre>';
    
    return $a;
}


rotLeft($a,$d);

?>
