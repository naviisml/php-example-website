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

$app = new Navel\Foundation\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

/**
 * Run application
 */

$kernel = $app->make(\App\Http\Kernel::class);

$kernel->handle();
