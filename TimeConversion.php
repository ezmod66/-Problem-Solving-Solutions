<?php

/*  Given a time in -hour AM/PM format, convert it to military (24-hour) time.
    Note: - 12:00:00AM on a 12-hour clock is 00:00:00 on a 24-hour clock.
    12:00:00PM on a 12-hour clock is 12:00:00 on a 24-hour clock.

    Example input
    A single string  that represents a time in -hour clock format

    Return Variable from function.
 */

$s = '12:01:00PM';

timeConversion($s);

function timeConversion($s) {
    // Write your code here
    
    $time_in_24_hours = date("H:i:s", strtotime($s));

    echo $time_in_24_hours;
}


?>
