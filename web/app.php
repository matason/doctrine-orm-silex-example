<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$app = new Silex\Application();

// Services.
$app['entity_manager'] = function () {
    $connectionParams = array(
        'dbname' => '',
        'user' => '',
        'password' => '',
        'host' => 'localhost',
        'driver' => 'pdo_mysql',
    );

    $config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . '/../src/Matason/Example/Entity/'), true);

    return EntityManager::create($connectionParams, $config);
};

// Routes.
$app->get('/', function () use ($app) {
    $entityManager = $app['entity_manager'];
    $thing = $entityManager->find('Matason\Example\Entity\Thing', 1);

    var_dump($thing);
});

$app->run();
