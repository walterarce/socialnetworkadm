<?php
// bootstrap.php
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array("/path/to/entity-files");
$isDevMode = false;

// the connection configuration
$dbParams = array(
    'dbname' => 'socialnet2',
    'user' => 'warce',
    'password' => 'thor2021',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);


// $conn = \Doctrine\DBAL\DriverManager::getConnection($dbParams);
$entityManager = EntityManager::create($dbParams, $config);