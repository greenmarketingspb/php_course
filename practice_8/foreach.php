<?php

//Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.

$arr = ['html', 'css', 'php', 'js', 'jq'];



foreach ($arr as $el) {
    echo $el;
    echo '</br>';
} 
    

//Дан массив с элементами 1, 2, 3, 4, 5. С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result.



$result = 0;

$arr = [1, 2, 3, 4, 5];


foreach ($arr as $el) {
    $result = $result + $el;
}

echo $result;

echo '</br>';


?>