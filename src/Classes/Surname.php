<?php

namespace Velsym\TestingDependencies;

class Surname
{
    public string $surname;

    public function __construct(string $surname = "Doe")
    {
        $this->surname = $surname;
    }
}