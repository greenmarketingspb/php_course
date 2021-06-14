<?php

//Сделайте в классе Employee метод getSalary, который будет возвращать зарплату работника

$object = new Employee();
$object->name = $name;
$object->age = $age;
$object->salary = $salary;
print_r($object);

class Employee {
    public $name, $age, $salary;
    function getSalary() {
        return $this->salary;
    }
}






?>