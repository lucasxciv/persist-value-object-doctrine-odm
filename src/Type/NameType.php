<?php

namespace Store\Type;

use Doctrine\ODM\MongoDB\Types\ClosureToPHP;
use Doctrine\ODM\MongoDB\Types\Type;
use Store\Name;

class NameType extends Type
{

    use ClosureToPHP;

    public function convertToPHPValue($value)
    {
        return Name::fromString((string)$value);
    }

    public function convertToDatabaseValue($value)
    {
        return $value->toString();
    }
}
