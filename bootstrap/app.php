<?php

/**
 * Navel Framework
 *
 * @package  Navel Framework
 * @author   Navi Ismail <contact@navel.dev>
 */


/**
 * Run the application
 */

$app = new Navel\Foundation\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

/**
 * Bind the instances to the application
 */

$app->instance(
    \Navel\Console\Kernel::class,
    \App\Console\Kernel::class
);

$app->instance(
    \Navel\Http\Kernel::class,
    \App\Http\Kernel::class
);

/**
 * Return the application
 */

return $app;
