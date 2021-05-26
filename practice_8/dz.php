<?php


$week = [
    'Sunday',
    'Monday',
    'Thuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday',
];

$currentdayindex = date('w');
$currentday = date('l');

foreach ($week as $key => $day) {
    if ($key === 0 || $key === 6) {
        echo "<b>$day</b>";
    } elseif ($currentday === $day) {
        echo "<i>$day<i>";
    } else {
        echo $day;
    }

    echo '<br>';
}        




    







?>