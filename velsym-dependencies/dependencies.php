<?php

use Velsym\Dependency\DependencyBuilder;
use Velsym\TestingDependencies\Classes\Name;
use Velsym\TestingDependencies\Classes\Person;
use Velsym\TestingDependencies\Classes\Surname;
use Velsym\TestingDependencies\Dependencies\Engineer;
use Velsym\TestingDependencies\Dependencies\Jones;
use Velsym\TestingDependencies\Dependencies\Michael;

$dependencies = new DependencyBuilder();
$dependencies
    ->addDependency(Michael::class)
        ->setClass(Name::class)
            ->setParam("name", "Michael")

    ->addDependency(Jones::class)
        ->setClass(Surname::class)
            ->setParam("surname", "Jones")

    ->addDependency(Engineer::class)
        ->setClass(Person::class)
            ->setParam("name", Michael::class)
            ->setParam("surname", Jones::class)
            ->setParam("age", 23)
    ;

return $dependencies->getDependencies();