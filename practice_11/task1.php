<?php

//Сделайте класс Employee (работник), в котором будут следующие свойства - name (имя), age (возраст), salary (зарплата)

$object = new Employee();
$object->name = 'Vasya';
$object->age = 25;
$object->salary = 1000;

echo '<br>';

$object1 = new Employee();
$object1->name = 'Вася';
$object1->age = 26;
$object1->salary = 2000;



echo '<br>';


class Employee {
    public $name, $age, $salary;
    function summary($object, $object1) {
        return $object['age'] + $object1['age'];

    }
}


//Создайте второй объект класса Employee, установите его свойства в следующие значения - имя 'Вася', возраст 26, зарплата 2000.








?>