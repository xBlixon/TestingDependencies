<?php

namespace Velsym\TestingDependencies\Classes;

class Name
{
    public string $name;

    public function __construct(string $name = "John")
    {
        $this->name = $name;
    }
}