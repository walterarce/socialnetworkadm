<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
require_once "vendor/autoload.php";
$connectionParams = array(
    ' dbname' => 'socialnetwork',
    'user' => 'warce',
    'password' => 'thor2021',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
);

$conn = \Doctrine\DBAL\DriverManager::getConnection( $connectionParams);

print_r ( $conn);

$sql = "SELECT * FROM Usuarios";
try {
    $stmt = $conn->prepare($sql);
} catch (\Doctrine\DBAL\Exception $e) {
}

$rows = $stmt->fetchAll();

print_r ( $rows);