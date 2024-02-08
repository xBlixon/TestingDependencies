<?php

namespace Velsym\TestingDependencies;

class Person
{
    private Name $name;
    private Surname $surname;
    private int $age;

    public function __construct(Name $name, Surname $surname, int $age=0)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
    }

    public function introduce(): string
    {
        return "Hi! My name is {$this->name->name} {$this->surname->surname} and I'm {$this->age}.";
    }
}