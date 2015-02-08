<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Console\ConsoleRunner;

$connectionParams = array(
    'dbname' => '',
    'user' => '',
    'password' => '',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
);

$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . '/src/Matason/Example/Entity/'), true);

$entityManager = EntityManager::create($connectionParams, $config);

return ConsoleRunner::createHelperSet($entityManager);
