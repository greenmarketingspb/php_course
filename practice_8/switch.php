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

echo $result;



//Переменная $beer может принимать одно из значений: Hoegaarden, Guinness, Baltika, остальные марки пива на ваш выбор. Если она имеет значение Hoegaarden или Guinness, то выводим ‘Good choice!’, если имеет значение Baltika выводим ‘Don't do that!’ для всех остальных значений выводим ‘It’s worth a try’



$beer = 'Baltika';


switch ($beer) {
    case 'Hoegaarden':
    case 'Guinness':
        echo 'Good choice!';
        break;
    case 'Baltika':
        echo 'Don\'t do that!';
        break;
    default:
    echo 'It is worth a try';


}
echo '</br>';







?>