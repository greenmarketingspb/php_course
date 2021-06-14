<?php

//Сделайте класс Employee (работник), в котором будут следующие свойства - name (имя), age (возраст), salary (зарплата)

$object = new Employee();
$object->name = $name;
$object->age = $age;
$object->salary = $salary;
print_r($object);

class Employee {
    public $name, $age, $salary;
}






?>