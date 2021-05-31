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



//Дано число $num=1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для этого (итерация - это проход цикла). Решите задачу сначала через цикл while, а потом через цикл for
    

$num = 1000;

$result;

do {
    $num / 2;


















?>