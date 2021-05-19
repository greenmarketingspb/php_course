<?php


//Создайте переменную $text и присвойте ей значение 'Hello world!'. Выведите значение этой переменной на экран.

$text = 'Hello world!';

echo $text


//Создайте переменные $text1='Hello, ' и $text2='World'. С помощью этих переменных и операции сложения строк выведите на экран фразу 'Привет, Мир!'.

$text1 = 'Hello,  ';


$text2 = 'World!';

echo $text1 . $text2;



//Создайте переменную $age и присвойте ей ваш возраст. Выведите на экран 'My age is {здесь должен быть возраст} years'. Это задания нужно сделать двумя способами. Используя одинарные и двойные кавычки.

$age = 30;

$my_age = 'My age is 30 years';

echo $my_age;



$my_age1 = "My age is $age years";

echo $my_age1



/*Переделайте этот код так, чтобы в нем использовалась операция .=. Количество строк кода при этом не должно измениться.
$text = 'I';
$text = $text.' want';
$text = $text.' to know';
$text = $text.' PHP!';
echo $text;
*/


$text = 'I';

$text .= ' want';

$text .= ' to know';

$text .= ' PHP!';

echo $text






?>