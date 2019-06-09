<?php

namespace Store\Type;

use Doctrine\ODM\MongoDB\Types\Type;
use Rhumsaa\Uuid\Uuid;
use Store\IdProduct;

class IdProductType extends Type
{

    public function convertToPHPValue($value)
    {
        return Uuid::fromString((string)$value);
    }

    public function closureToPHP() : string
    {
        return '$return = Rhumsaa\Uuid\Uuid::fromString((string)$value);';
    }

    public function convertToDatabaseValue($value)
    {
        return $value instanceof IdProduct ? $value->toString() : $value;
    }
}
