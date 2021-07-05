<?php

//Сделайте класс Employee (работник), в котором будут следующие свойства - name (имя), age (возраст), salary (зарплата)

class Employee 
{
    public string $name;
    public int $age;
    public int $salary;

    public function getName() 
    {
        return $this->name;
    }
    public function getAge() 
    {
        return $this->age;
    }
    public function getSalary() 
    {
        return $this->salary;
    }
    public function checkAge() 
    {
       return $this->age > 18 ? true : false;
        
    }

    public function doubleSalary(): void
    {
         $this->salary * 2;
    }

    public function setAge(int $newAge): void 
    {
        $this->age = $newAge;
    }
}




$firstEmployee = new Employee;
$firstEmployee->age = 20;
$firstEmployee->salary = 16000;

$secondEmployee = new Employee;
$secondEmployee->salary = 3000;
$secondEmployee->age = 13;

echo $firstEmployee->checkAge();

echo '<br>';

echo $firstEmployee->doubleSalary();

echo '<br>';

echo $secondEmployee->getAge();

echo '<br>';

$firstEmployee->setAge(35);

echo $firstEmployee->getAge();


//Сделайте в классе Employee метод getName, который будет возвращать имя работника

//Сделайте в классе Employee метод getAge, который будет возвращать возраст работника

//Сделайте в классе Employee метод getSalary, который будет возвращать зарплату работника

//Сделайте в классе Employee метод checkAge, который будет проверять то, что работнику больше 18 лет и возвращать true, если это так, и false, если это не так

//Создайте два объекта класса Employee, запишите в их свойства какие-либо значения. С помощью метода getSalary найдите сумму зарплат созданных работников

//Сделайте метод doubleSalary, который текущую зарплату будет увеличивать в 2 раза

//Сделайте метод setAge, который параметром будет принимать новый возраст работника. Задайте одному из обьектов новый возраст через setAge, а потом выведите его на экран при помощи getAge

?>