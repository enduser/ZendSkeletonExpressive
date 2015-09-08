<?php
use Zend\ServiceManager\ServiceManager;
use Zend\Expressive\Application;
use Zend\Stratigility\Http\Request;
use Zend\Stratigility\Http\Response;
use Zend\Stratigility\Next;

/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
chdir(dirname(__DIR__));

// Composer autoloading
require 'vendor/autoload.php';

/** @var ServiceManager $container */
$container = include 'config/services.php';

/** @var Application $app */
$app = $container->get('Zend\Expressive\Application');

$app->post('/post', function (Request $request, Response $response, Next $next) {
    $response->write('IN POST!');
    return $response;
});

// Run the application
$app->run();