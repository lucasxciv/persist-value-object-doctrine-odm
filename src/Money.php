<?php

namespace Store;

use Assert\Assertion;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/** @ODM\EmbeddedDocument() */
class Money
{

    /** @var string */
    public const USD = 'USD';

    /**
     * @ODM\Field(name="value", type="float")
     * @var float
     */
    private $value;

    /**
     * @ODM\Field(name="currency", type="string")
     * @var string
     */
    private $currency;

    private function __construct(float $value, string $currency)
    {
        $this->value = $value;
        $this->currency = $currency;
    }

    public function value() : float
    {
        return $this->value;
    }

    public function currency() : string
    {
        return $this->currency;
    }

    public static function USD(float $value) : self
    {
        Assertion::min($value, 3, 'Money must be positive value');

        return new self($value, static::USD);
    }
}
