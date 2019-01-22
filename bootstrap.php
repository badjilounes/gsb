<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);
// or if you prefer XML
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config"), $isDevMode);
// database configuration parameters

$conn = array(
    'driver' => 'pdo_mysql',
    'path' => __DIR__ . '/db.mysql',
    'host' => 'localhost',
    'port' => 3306,
    'dbname' => 'gsb',
    'user' => 'root',
    'password' => 'root',
    'charset' => 'utf8',
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);