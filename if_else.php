<?php


/*
$weekend = [
    6 => 'Sat',
    7 => 'Sun'
];

$weekdays = [
    1 => 'Mon',
    2 => 'Tue',
    3 => 'Wen',
    4 => 'Thu',
    5 => 'Fri'
];

$dayoff = [
    6 => 'Sat',
    7 => 'Sun'
];
*/

$curretnindex = date('w');

if ($currentindex === 6 || $currentindex === 0) {
    echo "WEEKENDS!!!";
} else {
    echo "WORK AGAIN";
}



?>