
<?php

declare(strict_types=1);

class Month
{
    public array $week = [
        'Sun',
        'Mon',
        'Tue',
        'Wed',
        'Thu',
        'Fri',
        'Sat'
    ];

    public int $daysInMonth;

    public string $dayOfWeek;


    public function __construct()
    {
        $year = (int) date('Y');
        $month = (int) date('m');
        $this->$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);

        $firstDayOfMonthTimestamp = mktime(0, 0, 0, $month, 1, $year);
        $this->$dayOfWeek = date('w', $firstDayOfMonthTimestamp);
    }

    public function showMonth()
    {
        echo '<table>';
        echo '<tr>';

for ($i = 0; $i < $this->$dayOfWeek; $i++) {
    echo "<td></td>";
}

foreach ($this->$week as $dayName) {
    echo "<td>$dayName</td>";
}

echo '<tr></tr>';

for ($day = 1; $day <= $this->$daysInMonth; $day++) {
    echo "<td><a href=day?dayOfMonth=$day>$day</a></td>";
    if (($day + $this->$dayOfWeek) % 7 === 0) {
        echo '<tr></tr>';

    }
}

echo '</tr>';
echo '</table>';

    }
}





?>
