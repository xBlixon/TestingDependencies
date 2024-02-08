<?php

namespace Velsym\TestingDependencies\Classes;

class Surname
{
    public string $surname;

    public function __construct(string $surname = "Doe")
    {
        $this->surname = $surname;
    }
}