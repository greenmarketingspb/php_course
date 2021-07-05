<?php

$gender = 'male';

class Human 
{
    protected string $gender;
    public int $age;

    public function getGender(): string 
    {
        return $this->gender;
    }

    public function setGender(string $gender): void 
    {
        if ($this->checkGender($gender)) {
            $this->gender = $gender;
        } else 
        {
            echo 'Fuck you';
        }
    }

    public function checkGender(string $gender): bool 
    {
        if ($gender === 'male' || $gender === 'female') {
            return true;
        } else {
            return false;
        }
    }
}

class Male extends Human 
{

}


$human1 = new Human;
$human1->gender = $gender;
$human1->checkGender($gender);
$human1->setGender = $gender;

//$human1->gender = $gender;

var_dump($human1->getGender());













?>