<?php

declare(strict_types=1);

use Phalcon\Autoload\Loader;
use Phalcon\Db\Adapter\Pdo\Mysql;
use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\Application;
use Phalcon\Mvc\View;

define('BASE_PATH', dirname(__DIR__));
define('APP_PATH', BASE_PATH . '/src');

$loader = new Loader();
$loader->setDirectories(
    [
        APP_PATH . '/Controllers/',
        APP_PATH . '/Models/',
    ],
);

$loader->setNamespaces([
    'App' => APP_PATH,
]);

$loader->register();

// create DI
$di = new FactoryDefault();

$di->set(
    'view',
    function () {
        $view = new View();
        $view->setViewsDir(APP_PATH . '/views/');

        return $view;
    },
);

$di->set(
    'db',
    function () {
        return new Mysql(
            [
                'host' => 'db',
                'username' => 'root',
                'password' => '',
                'port' => 3306,
                'dbname' => 'testdb',
            ],
        );
    },
);

$application = new Application($di);

try {
    $response = $application->handle($_SERVER['REQUEST_URI']);
    $response->send();
} catch (\Exception $e) {
    echo 'Exception: ', $e->getMessage();
}
