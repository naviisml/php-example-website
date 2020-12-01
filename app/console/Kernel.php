<?php

namespace App\Console;

use Navel\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The commands
     *
     * @var array
     */
    protected $commands = [
        \Navel\Console\Commands\TestCommand::class,
    ];
}
