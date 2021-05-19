<?php

//Переменная $num может принимать одно из значений: 1, 2, 3 или 4. Если она имеет значение 1, то в переменную $result запишем ‘Winter’, если имеет значение 2 – ‘Spring’ и так далее

$num = '1';

switch ($num) {
    case '1':
        $result = 'winter';
        break;
    case '2':
        $result = 'spring';
        break;
    case '3':
        $result = 'summer';
        break;
    case '4':
        $result = 'autumn';
        break;            
}

echo $result






?>