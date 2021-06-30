<?php

class Day
{
    public string $dayOfWeek;
    public string $dayOfMonth;
    public string $fullDate;

    public function __construct(string $day)
    {
        $month = date('m');
        $year = date('Y');
        $currentTimestamp = mktime(0, 0, 0, $month, $day, $year);
    }
}

$day = isset($_GET['dayOfMonth']) ? $_GET['dayOfMonth'] : date('d');
$dayOfWeek = date('l', $currentTimestamp);
$fullDate = date('d-m-Y', $currentTimestamp);

$currentDay = new Day($day);




echo "The Day is $dayOfWeek -  $fullDate";

