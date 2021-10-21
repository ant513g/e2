<?php
class Person
{
    # Properties. e.g.:
    public $firstName;
    public $lastName;
    public $age;

    # Methods. e.g.:
    public function __construct($firstName, $lastName, $age) 
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;

        
    }
    
    public function getFullName ()
    {
        return ($this->firstName . " " . $this->lastName);
    }

    public function getClassification ()
    {
        $getAge = ($this->age >= 18) ? 'adult' : 'minor';
        return $getAge;
    }

}