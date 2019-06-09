<?php

namespace Store;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/** @ODM\Document(collection="Product") */
class Product
{

    /**
     * @ODM\Id(type="product.id", strategy="NONE")
     * @var IdProduct
     */
    private $idProduct;

    /**
     * @ODM\Field(type="product.name")
     * @var Name
     */
    private $name;

    /**
     * @ODM\EmbedOne(name="price", targetDocument="Store\Money")
     * @var Money
     */
    private $price;

    private function __construct()
    {
        $this->idProduct = IdProduct::instance();
    }

    public function id() : IdProduct
    {
        return $this->idProduct;
    }

    public function name() : Name
    {
        return $this->name;
    }

    public function price() : Money
    {
        return $this->price;
    }

    public static function newProduct(Name $name, Money $price) : self
    {
        $instance = new self();
        $instance->name = $name;
        $instance->price = $price;
        return $instance;
    }
}
