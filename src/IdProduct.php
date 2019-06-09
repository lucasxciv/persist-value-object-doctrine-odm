<?php

namespace Store;

use Rhumsaa\Uuid\Uuid;

class IdProduct
{

    /** @var Uuid */
    private $uuid;

    private function __construct(Uuid $uuid)
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
