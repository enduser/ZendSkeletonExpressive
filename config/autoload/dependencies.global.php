<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */
return [
    'services' => [
        'config' => include __DIR__ . '/../config.php',
    ],
    'invokables' => [
        'Application\HelloWorld' => 'Application\HelloWorld',
        'Application\Ping' => 'Application\Ping',
    ],
    'factories' => [
        'Zend\Expressive\Application' => 'Zend\Expressive\Container\ApplicationFactory',
    ]
];