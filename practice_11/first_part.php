<?php

//Сделайте класс Employee (работник), в котором будут следующие свойства - name (имя), age (возраст), salary (зарплата).

class Employee 
{
    public string $name;
    public int $age;
    public int $salary;
}



//Создайте объект класса Employee, затем установите его свойства в следующие значения - имя Vanya, возраст 25, зарплата 1000

$firstEmployee = new Employee;
$firstEmployee->name = 'Vanya';
$firstEmployee->age = 25;
$firstEmployee->salary = 1000;


//Создайте второй объект класса Employee, установите его свойства в следующие значения - имя 'Вася', возраст 26, зарплата 2000

$secondEmployee = new Employee;
$secondEmployee->name = 'Vasya';
$secondEmployee->age = 26;
$secondEmployee->salary = 2000;

//Выведите на экран сумму возрастов Ивана и Васи
print_r($firstEmployee);
echo '<br>';
print_r($secondEmployee);

echo '<br>';

echo $firstEmployee->age + $secondEmployee->age;


//Выведите на экран сумму зарплат Ивана и Васи

echo '<br>';

echo $firstEmployee->salary +$secondEmployee->salary;




?>