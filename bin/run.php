<?php

require_once __DIR__ . '/../bootstrap.php';

use Doctrine\ODM\MongoDB\DocumentManager;
use Store\Product;
use Store\Name;
use Store\Money;

/** @var DocumentManager $dm */
$dm = require __DIR__ . '/../config/doctrine.php';

$product = Product::newProduct(
    Name::fromString('Notebook'),
    Money::USD(1000)
);

$dm->persist($product);
$dm->flush();

/** @var Product $productFound */
$productFound = $dm->getRepository(Product::class)->find($product->id()->toString());

$output = <<<OUTPUT
    \n---------------
    Product persisted
    ID: %s
    Name: %s
    Price: %s %s\n---------------\n
OUTPUT;

vprintf($output, [
    $productFound->id()->toString(),
    $productFound->name()->toString(),
    $productFound->price()->value(),
    $productFound->price()->currency()
]);
