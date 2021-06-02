
<table>


<?php

$year = date('Y');

$month = date('m');



$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);


$week = [
    'Sun',
    'Mon',
    'Tue',
    'Wed',
    'Thu',
    'Fri',
    'Sat'
];

echo '<tr>';


foreach ($week as $dayName) {
    echo "<td>$dayName</td>";
}


echo '<tr></tr>';

for ($day = 1; $day <= $daysInMonth; $day++) {
    echo "<td><a href=day?dayOfMonth=$day>$day</a></td>";
    if ($day % 7 === 0) {
        echo '<tr></tr>';

    }
}


echo '</tr>';
?>

</table>