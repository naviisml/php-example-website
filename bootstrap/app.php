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
 * Global functions test
 */

use Navel\Foundation\Container\Container;

function app( $name = null )
{
    if ( is_null( $name ) ) {
        return Container::getInstance();
    }

    return Container::getInstance()->make( $name );
}

function request()
{
    return app('request');
}

/**
 * Return the application
 */

return $app;
