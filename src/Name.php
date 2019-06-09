<?php

namespace Store;

use Assert\Assertion;

class Name
{

    /** @var string */
    private $name;

    private function __construct(string $name)
    {
        $this->name = $name;
    }

    public function toString() : string
    {
        return $this->name;
    }

    public static function fromString(string $name) : self
    {
        Assertion::minLength($name, 3, 'Name must have at least 3 characters');

        return new self($name);
    }
}
