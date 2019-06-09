<?php

namespace Store\Type;

use Doctrine\ODM\MongoDB\Types\Type;
use Store\Name;

class NameType extends Type
{

    public function convertToPHPValue($value)
    {
        return Name::fromString((string)$value);
    }

    public function closureToPHP() : string
    {
        return '$return = Store\Name::fromString((string)$value);';
    }

    public function convertToDatabaseValue($value)
    {
        return $value->toString();
    }
}
