<?php

use Doctrine\ODM\MongoDB\Types\Type;

Type::addType('product.id', Store\Type\IdProductType::class);
Type::addType('product.name', Store\Type\NameType::class);
