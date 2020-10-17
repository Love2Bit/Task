<?php

class Person{
    public $name;
    protected $age;
    public function __construct($name)
    {
        $this->name=$name;
    }
    public function setAge($age)
    {
        if($age<18){
            exit ("You're not allowed");
        }

        $this->age=$age;

    }
    public function getAge()
    {
        return $this->age;
    }
    public function __toString()
    {
        return $this->name;
    }
}

$lusi = new Person($argv[1]);
$lusi->setAge($argv[2]);
echo "Your name ".$lusi." and your age ".$lusi->getAge();