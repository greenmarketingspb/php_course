<?php

//Сделайте в классе Employee метод getAge, который будет возвращать возраст работника

$object = new Employee();
$object->name = $name;
$object->age = $age;
$object->salary = $salary;
print_r($object);

class Employee {
    public $name, $age, $salary;
    function getAge() {
        return $this->age;
    }
}






?>