<?php

use Doctrine\MongoDB\Connection;
use Doctrine\ODM\MongoDB\Configuration;
use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver;

$connection = new Connection('persist-value-object-doctrine-odm-mongo');

$config = new Configuration();
$config->setProxyDir(__DIR__ . '/../data/cache/Proxies');
$config->setProxyNamespace('Proxies');
$config->setHydratorDir(__DIR__ . '/../data/cache/Hydrators');
$config->setHydratorNamespace('Hydrators');
$config->setDefaultDB('test_value_object');
$config->setMetadataDriverImpl(AnnotationDriver::create(__DIR__ . '/../data/cache/Documents'));

AnnotationDriver::registerAnnotationClasses();

require __DIR__ . '/types.php';

return DocumentManager::create($connection, $config);