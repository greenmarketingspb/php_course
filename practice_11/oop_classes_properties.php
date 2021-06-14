<?php

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
    function getAge() {
        return $this->age;
    }
    function getSalary() {
        return $this->salary;
    }
    function checkAge() {
        if ($this->age > 18) {
            return true;
        } else {
            return false;
        }

        }
    }




















?>