<?php

//Выведите столбец чисел от 1 до 100

$var = 0;

while ($var < 100) {
    echo ++$var . '</br>';
    
}

//Выведите столбец чисел от 11 до 33

$a = 11;
$b = 33;

while ($a <= $b) {
    echo $a++ . '</br>';
}

//Выведите столбец четных чисел в промежутке от 0 до 100.


echo 'even task <br>';

$a = 0;
$b = 100;


while ($a <= $b) {
    if ($a % 2 == 0) {
        echo $a . '</br>';

    }
    $a++;
}





//С помощью цикла найдите сумму чисел от 1 до 100


$a = 0;
$b = 1;


do {
    $a = $a + $b;
    $b++;    
} while ($b <= 100); 
    
echo $a . '</br>';






//Выведите столбец чисел от 1 до 100


for ($a = 1; $a <= 100; $a++) {
    echo $a . '</br>';
}


//Выведите столбец чисел от 11 до 33

for ($a = 11; $a <= 33; $a++) {
    echo $a . '</br>';
}



//Выведите столбец четных чисел в промежутке от 0 до 100


for ($a = 1; $a <= 100; $a++) {
    if ($a % 2 == 0) {
        echo $a . '</br>';

    }
    
}



//С помощью цикла найдите сумму чисел от 1 до 100

$a = 0;
$b = 1;


for ($a = 0, $b = 1; $b <= 100; $b++) {
    $a = $a + $b;
    echo $a . '</br>';
}


//С помощью цикла for заполните массив числами от 1 до 100. То есть у вас должен получится массив [1, 2, 3... 100]








?>