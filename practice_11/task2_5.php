<?php

//Сделайте в классе Employee метод checkAge, который будет проверять то, что работнику больше 18 лет и возвращать true, если это так, и false, если это не так

$object = new Employee();
$object->name = $name;
$object->age = $age;
$object->salary = $salary;
print_r($object);

class Employee {
    public $name, $age, $salary;
    function checkAge() {
        if ($this->age > 18) {
            return true;
        } else {
            return false;
        }
    }
}






?>