<?php

//Сделайте в классе Employee метод getName, который будет возвращать имя работника

$object = new Employee();
$object->name = $name;
$object->age = $age;
$object->salary = $salary;
print_r($object);

class Employee {
    public $name, $age, $salary;
    function getName() {
        return $this->name;
    }
}






?>