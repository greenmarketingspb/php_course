<?php

//Создайте два объекта класса Employee, запишите в их свойства какие-либо значения. С помощью метода getSalary найдите сумму зарплат созданных работников

$object = new Employee();
$object2 = new Employee();
$object->salary = 100;
$object2->salary1 = 200;


class Employee {
    public $salary, $salary1;
    function getSalary($salary, $salary1) {
        echo $this->salary = $salary + $salary1;
    }
}






?>