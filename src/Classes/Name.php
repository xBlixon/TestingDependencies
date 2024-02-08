<?php

namespace Velsym\TestingDependencies;

class Name
{
    public string $name;

    public function __construct(string $name = "John")
    {
        $this->name = $name;
    }
}