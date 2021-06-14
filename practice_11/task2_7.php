<?php

$object = new Employee();
$object->name = $name;
$object->age = $age;
$object->salary = $salary;
print_r($object);

class Employee {
    public $name, $age, $salary;
}






?>