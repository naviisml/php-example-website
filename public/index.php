<?php

/**
 * Navel Framework
 *
 * @package  Navel Framework
 * @author   Navi Ismail <contact@navel.dev>
 */


/**
 * Composer Auto Loader
 */

if ( file_exists( $composer_path = __DIR__ . '/../vendor/autoload.php' ) ) {
    require $composer_path;
}

/**
 * Bootstrap application
 */

$app = require_once __DIR__ . '/../bootstrap/app.php';

/**
 * Run application
 */

$kernel = $app->make( \Navel\Http\Kernel::class );

$kernel->handle(
    $request = \Navel\Helpers\Request::capture()
);