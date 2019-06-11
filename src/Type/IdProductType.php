<?php

namespace Store\Type;

use Doctrine\ODM\MongoDB\Types\ClosureToPHP;
use Doctrine\ODM\MongoDB\Types\Type;
use Ramsey\Uuid\Uuid;
use Store\IdProduct;

class IdProductType extends Type
{

    use ClosureToPHP;

    public function convertToPHPValue($value)
    {
        return Uuid::fromString((string)$value);
    }

    public function convertToDatabaseValue($value)
    {
        return $value instanceof IdProduct ? $value->toString() : $value;
    }
}
