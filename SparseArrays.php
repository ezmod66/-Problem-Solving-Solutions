<?php

/*  
    There is a collection of input strings and a collection of query strings. 
    For each query string, determine how many times it occurs in the list of input strings. 
    Return an array of the results.

    Function Description

    Complete the function matchingStrings in the editor below. The function must return an array of integers representing the frequency of occurrence of each query string in strings.
    matchingStrings has the following parameters:
    string strings[n] - an array of strings to search
    string queries[q] - an array of query strings

    Returns
    int[q]: an array of results for each query

    inputs  
    The first line contains and integer n, the size of strings[].
    Each of the next n lines contains a string strings[i].
    The next line contains q, the size of strings[].
    Each of the next q lines contains a string strings[i].
*/

/*
 * Complete the 'matchingStrings' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts following parameters:
 *  1. STRING_ARRAY strings
 *  2. STRING_ARRAY queries
 */

function matchingStrings($strings, $queries) {
    // Write your code here 
    $results = [];

    foreach($queries as $query)
    {   //reset each iteration
        $count = 0;
        //loop through second array
        foreach($strings as $string)
        {   //compare
            if($query === $string)
            {
                $count++;
            }
        }
        //add count to array
        array_push($results,$count);
    }
    return $results;
}


?>
