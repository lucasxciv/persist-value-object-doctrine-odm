<?php

namespace Store;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class IdProduct
{

    /** @var UuidInterface */
    private $uuid;

    private function __construct(UuidInterface $uuid)
    {
        $this->uuid = $uuid;
    }

    public function toString() : string
    {
        return $this->uuid->toString();
    }

    public static function instance() : self
    {
        return new self(Uuid::uuid4());
    }
}
